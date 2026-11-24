<?php
/**
 * Borko - advent (native advent-2026): kad urednik zalijepi URL članka u repeater,
 * admin JS preko AJAX-a povuče og:title, og:description i og:image i popuni polja ispod.
 *
 * Polja su definirana u plugins/acf.php (tg_advent_borko_fields).
 */

if (!defined('ABSPATH')) {
    exit;
}

const TG_ADVENT_BORKO_ALLOWED_HOSTS = ['telegram.hr', 'story.hr']; // + poddomene (www., super1.)
const TG_ADVENT_BORKO_TIMEOUT = 8;
const TG_ADVENT_BORKO_MAX_BYTES = 1048576; // og: tagovi su u <head>, 1 MB je dovoljno
const TG_ADVENT_BORKO_CACHE_TTL = HOUR_IN_SECONDS;

if (!function_exists('tg_advent_borko_host_allowed')) {
    /** Dopušteni su samo naši portali — ne dohvaćamo proizvoljne adrese sa servera. */
    function tg_advent_borko_host_allowed(string $url): bool
    {
        $scheme = strtolower((string) parse_url($url, PHP_URL_SCHEME));
        $host   = strtolower((string) parse_url($url, PHP_URL_HOST));
        if (!in_array($scheme, ['http', 'https'], true) || $host === '') {
            return false;
        }
        foreach (TG_ADVENT_BORKO_ALLOWED_HOSTS as $allowed) {
            if ($host === $allowed || str_ends_with($host, '.' . $allowed)) {
                return true;
            }
        }
        return false;
    }
}

if (!function_exists('tg_advent_borko_parse_meta')) {
    function tg_advent_borko_parse_meta(string $html): array
    {
        $doc = new DOMDocument();
        $previous = libxml_use_internal_errors(true);
        $doc->loadHTML('<?xml encoding="utf-8" ?>' . $html, LIBXML_NONET | LIBXML_NOWARNING | LIBXML_NOERROR);
        libxml_clear_errors();
        libxml_use_internal_errors($previous);

        $meta = [];
        foreach ($doc->getElementsByTagName('meta') as $tag) {
            $key = strtolower($tag->getAttribute('property') ?: $tag->getAttribute('name'));
            if ($key !== '' && !isset($meta[$key])) {
                $meta[$key] = trim($tag->getAttribute('content'));
            }
        }
        $title_tag = $doc->getElementsByTagName('title')->item(0);

        $pick = static function (array $keys) use ($meta): string {
            foreach ($keys as $key) {
                if (!empty($meta[$key])) {
                    return html_entity_decode($meta[$key], ENT_QUOTES | ENT_HTML5, 'UTF-8');
                }
            }
            return '';
        };

        $image = $pick(['og:image:secure_url', 'og:image', 'twitter:image']);

        return [
            'title'       => $pick(['og:title', 'twitter:title']) ?: ($title_tag ? trim($title_tag->textContent) : ''),
            'description' => $pick(['og:description', 'twitter:description', 'description']),
            'image'       => preg_match('#^https?://#i', $image) ? $image : '',
        ];
    }
}

if (!function_exists('tg_advent_borko_fetch_meta')) {
    /** @return array|WP_Error */
    function tg_advent_borko_fetch_meta(string $url)
    {
        $cache_key = 'tg_borko_meta_' . md5($url);
        $cached = get_transient($cache_key);
        if (is_array($cached)) {
            return $cached;
        }

        $response = wp_safe_remote_get($url, [
            'timeout'             => TG_ADVENT_BORKO_TIMEOUT,
            'redirection'         => 3,
            'limit_response_size' => TG_ADVENT_BORKO_MAX_BYTES,
            'user-agent'          => 'Mozilla/5.0 (compatible; TelegramAdventBorko/1.0)',
        ]);
        if (is_wp_error($response)) {
            error_log('[advent-borko] Dohvat nije uspio za ' . $url . ': ' . $response->get_error_message());
            return new WP_Error('fetch_failed', 'Stranica se ne može dohvatiti.');
        }

        $status = (int) wp_remote_retrieve_response_code($response);
        if ($status !== 200) {
            error_log('[advent-borko] HTTP ' . $status . ' za ' . $url);
            return new WP_Error('bad_status', 'Stranica je vratila grešku (HTTP ' . $status . ').');
        }

        $meta = tg_advent_borko_parse_meta((string) wp_remote_retrieve_body($response));
        if ($meta['title'] === '' && $meta['description'] === '' && $meta['image'] === '') {
            return new WP_Error('no_meta', 'Na stranici nisu pronađeni naslov, opis ni slika.');
        }

        set_transient($cache_key, $meta, TG_ADVENT_BORKO_CACHE_TTL);
        return $meta;
    }
}

add_action('wp_ajax_tg_advent_borko_fetch', 'tg_advent_borko_ajax_fetch');
if (!function_exists('tg_advent_borko_ajax_fetch')) {
    function tg_advent_borko_ajax_fetch()
    {
        check_ajax_referer('tg_advent_borko_fetch', 'nonce');
        if (!current_user_can('edit_posts')) {
            wp_send_json_error(['message' => 'Nemate ovlasti.'], 403);
        }

        $url = esc_url_raw(trim(wp_unslash((string) ($_POST['url'] ?? ''))), ['http', 'https']);
        if ($url === '' || !tg_advent_borko_host_allowed($url)) {
            wp_send_json_error(['message' => 'Podržani su samo linkovi s Telegrama, Super1 i Storyja.'], 400);
        }

        $meta = tg_advent_borko_fetch_meta($url);
        if (is_wp_error($meta)) {
            wp_send_json_error(['message' => $meta->get_error_message()], 502);
        }
        wp_send_json_success($meta);
    }
}

add_action('admin_footer-post.php', 'tg_advent_borko_admin_js');
add_action('admin_footer-post-new.php', 'tg_advent_borko_admin_js');
if (!function_exists('tg_advent_borko_admin_js')) {
    function tg_advent_borko_admin_js()
    {
        $screen = get_current_screen();
        if (!$screen || $screen->post_type !== 'native') {
            return;
        }
        $config = [
            'ajaxUrl' => admin_url('admin-ajax.php'),
            'nonce'   => wp_create_nonce('tg_advent_borko_fetch'),
        ];
        ?>
        <style>
            .tg-borko-status { margin: 6px 0 0; font-style: italic; }
            .tg-borko-status.is-error { color: #b32d2e; }
            .tg-borko-preview { display: block; max-width: 220px; max-height: 140px; margin-top: 8px; border-radius: 3px; object-fit: cover; }
        </style>
        <script>
        (function ($, config) {
            if (typeof acf === 'undefined' || !$) { return; }
            var PREFIX = 'field_advent_borko_';
            var URL_INPUT = '.acf-field[data-key^="' + PREFIX + '"][data-key$="_url"] input';

            function rowField(row, repeaterKey, suffix) {
                return row.find('.acf-field[data-key="' + repeaterKey + suffix + '"]').first();
            }

            function status(field, text, isError) {
                var el = field.find('.tg-borko-status');
                if (!el.length) { el = $('<p class="tg-borko-status"></p>').appendTo(field.find('.acf-input').first()); }
                el.text(text || '').toggleClass('is-error', !!isError).toggle(!!text);
            }

            function preview(imageField) {
                var input = imageField.find('input').first();
                var img = imageField.find('.tg-borko-preview');
                var src = (input.val() || '').trim();
                if (!/^https?:\/\//i.test(src)) { img.remove(); return; }
                if (!img.length) { img = $('<img class="tg-borko-preview" alt="">').appendTo(imageField.find('.acf-input').first()); }
                img.attr('src', src);
            }

            // Prepiši samo prazno polje ili ono koje je ranije popunio autofill (urednikove izmjene ostaju).
            function fill(input, value) {
                if (!value) { return; }
                var current = (input.val() || '').trim();
                if (current === '' || current === input.data('tgAutofilled')) {
                    input.val(value).data('tgAutofilled', value).trigger('change');
                }
            }

            function fetchMeta(urlInput) {
                var url = (urlInput.val() || '').trim();
                var urlField = urlInput.closest('.acf-field');
                if (!/^https?:\/\//i.test(url) || urlInput.data('tgFetched') === url) { return; }
                urlInput.data('tgFetched', url);

                var repeaterKey = urlField.attr('data-key').replace(/_url$/, '');
                var row = urlInput.closest('.acf-row');
                status(urlField, 'Povlačim naslov, opis i sliku…');

                $.post(config.ajaxUrl, { action: 'tg_advent_borko_fetch', nonce: config.nonce, url: url })
                    .done(function (res) {
                        if (!res || !res.success) {
                            status(urlField, (res && res.data && res.data.message) || 'Dohvat nije uspio.', true);
                            return;
                        }
                        var imageField = rowField(row, repeaterKey, '_ogimage');
                        fill(rowField(row, repeaterKey, '_title').find('input').first(), res.data.title);
                        fill(rowField(row, repeaterKey, '_description').find('textarea').first(), res.data.description);
                        fill(imageField.find('input').first(), res.data.image);
                        preview(imageField);
                        status(urlField, res.data.image ? '' : 'Članak nema sliku — možeš dodati drugu sliku ispod.');
                    })
                    .fail(function (xhr) {
                        urlInput.removeData('tgFetched'); // dopusti ponovni pokušaj
                        var msg = xhr.responseJSON && xhr.responseJSON.data && xhr.responseJSON.data.message;
                        status(urlField, msg || 'Dohvat nije uspio. Provjeri link ili upiši podatke ručno.', true);
                    });
            }

            $(document).on('change', URL_INPUT, function () { fetchMeta($(this)); });
            $(document).on('paste', URL_INPUT, function () {
                var input = $(this);
                setTimeout(function () { fetchMeta(input); }, 0);
            });
            $(document).on('change', '.acf-field[data-key^="' + PREFIX + '"][data-key$="_ogimage"] input', function () {
                preview($(this).closest('.acf-field'));
            });

            // Pregled slike za već spremljene redove.
            $(function () {
                $('.acf-field[data-key^="' + PREFIX + '"][data-key$="_ogimage"]').each(function () { preview($(this)); });
            });
        })(window.jQuery, <?php echo wp_json_encode($config); ?>);
        </script>
        <?php
    }
}
