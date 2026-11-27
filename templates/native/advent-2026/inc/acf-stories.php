<?php
/**
 * Članci za bor iz ACF polja "Native oprema → Borko - advent" (plugins/acf.php, tg_advent_borko_fields).
 */

if (!defined('ADVENT_BORKO_CATEGORIES')) {
    // slug ACF repeatera => naziv kategorije na stranici (mora odgovarati $advent_categories)
    define('ADVENT_BORKO_CATEGORIES', [
        'recepti' => 'Recepti',
        'pokloni' => 'Pokloni',
        'dom'     => 'Dom',
        'stil'    => 'Stil',
        'ljepota' => 'Ljepota',
        // Prikazuje se samo u redu ispod Adventskog vodiča (ne u redu ispod bora ni u filteru).
        'zimske_aktivnosti' => 'Zimske aktivnosti',
    ]);
}

if (!function_exists('advent_borko_portal')) {
    function advent_borko_portal(string $url): string
    {
        $host = (string) parse_url($url, PHP_URL_HOST);
        $path = (string) parse_url($url, PHP_URL_PATH);

        if (str_contains($host, 'story.hr')) {
            return 'Story';
        }
        if (str_starts_with($path, '/super1/')) {
            return 'Super1';
        }
        return 'Telegram';
    }
}

if (!function_exists('advent_borko_story')) {
    function advent_borko_story(array $row, string $slug, string $category): ?array
    {
        $url   = esc_url_raw(trim((string) ($row['url'] ?? '')), ['http', 'https']);
        $title = trim((string) ($row['title'] ?? ''));
        if ($url === '' || $title === '') {
            return null; // nepotpun red se preskače
        }

        // Ručno postavljena slika ima prednost pred slikom povučenom s portala (og:image).
        $image_id = (int) ($row['image'] ?? 0);
        $image    = $image_id ? (string) wp_get_attachment_image_url($image_id, 'large') : '';
        $alt      = $image_id ? (string) get_post_meta($image_id, '_wp_attachment_image_alt', true) : '';
        if ($image === '') {
            $image = esc_url_raw(trim((string) ($row['og_image'] ?? '')), ['http', 'https']);
        }

        return [
            // Stabilan ID iz URL-a: ne ovisi o redoslijedu redova u repeateru.
            'id'        => $slug . '-' . substr(md5($url), 0, 10),
            'title'     => $title,
            'category'  => $category,
            'portal'    => advent_borko_portal($url),
            'icon'      => '',
            'excerpt'   => trim((string) ($row['description'] ?? '')),
            'body'      => '',
            'image'     => $image,
            'image_alt' => $alt !== '' ? $alt : $title,
            'url'       => $url,
            'position'  => null,
            'published' => true,
        ];
    }
}

if (!function_exists('advent_borko_stories')) {
    /** @return array|null null kad Borko - advent nije uključen na postu */
    function advent_borko_stories(int $post_id): ?array
    {
        if (!$post_id || !function_exists('get_field') || !get_field('advent_borko', $post_id)) {
            return null;
        }

        $stories = [];
        foreach (ADVENT_BORKO_CATEGORIES as $slug => $category) {
            $rows = get_field('advent_borko_' . $slug, $post_id);
            if (!is_array($rows)) {
                continue;
            }
            foreach ($rows as $row) {
                $story = is_array($row) ? advent_borko_story($row, $slug, $category) : null;
                if ($story) {
                    $stories[] = $story;
                }
            }
        }
        return $stories;
    }
}
