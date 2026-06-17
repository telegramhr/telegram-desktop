<?php

/**
 * Dohvat tablica (standings) sa football-data.org za Svjetsko prvenstvo (WC).
 * Token se čita iz FOOTBALL_DATA_TOKEN (definiran u wp-config.php).
 * Rezultat se kešira u WP transient da se poštuje rate-limit.
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!function_exists('zp_get_wc_standings')) {
    /**
     * Vraća polje skupina: [ ['name' => 'Group A', 'table' => [ ['position','team','playedGames','points', ...], ... ]], ... ]
     * U slučaju greške vraća prazno polje.
     */
    function zp_get_wc_standings(): array
    {
        $cache_key = 'zp_wc_standings';
        $cached = get_transient($cache_key);
        if ($cached !== false) {
            return $cached;
        }

        $token = defined('FOOTBALL_DATA_TOKEN') ? FOOTBALL_DATA_TOKEN : '';
        if (empty($token) || $token === 'your-token-here') {
            return [];
        }

        $response = wp_remote_get(
            'https://api.football-data.org/v4/competitions/WC/standings',
            [
                'headers' => ['X-Auth-Token' => $token],
                'timeout' => 10,
            ]
        );

        if (is_wp_error($response) || wp_remote_retrieve_response_code($response) !== 200) {
            return [];
        }

        $data = json_decode(wp_remote_retrieve_body($response), true);
        if (!is_array($data) || empty($data['standings'])) {
            return [];
        }

        // Zadrži samo "TOTAL" tablice (po skupini); preslikaj u jednostavnu strukturu.
        $groups = [];
        foreach ($data['standings'] as $standing) {
            if (($standing['type'] ?? '') !== 'TOTAL') {
                continue;
            }
            $rows = [];
            foreach (($standing['table'] ?? []) as $row) {
                $rows[] = [
                    'position'    => $row['position'] ?? '',
                    'team'        => $row['team']['name'] ?? '',
                    'crest'       => $row['team']['crest'] ?? '',
                    'playedGames' => $row['playedGames'] ?? 0,
                    'won'         => $row['won'] ?? 0,
                    'draw'        => $row['draw'] ?? 0,
                    'lost'        => $row['lost'] ?? 0,
                    'points'      => $row['points'] ?? 0,
                ];
            }
            $groups[] = [
                'name'  => $standing['group'] ?? ($standing['stage'] ?? 'Skupina'),
                'table' => $rows,
            ];
        }

        set_transient($cache_key, $groups, 10 * MINUTE_IN_SECONDS);

        return $groups;
    }
}

if (!function_exists('zp_team_label')) {
    /**
     * Formatira ime reprezentacije iz football-data API-ja (polje `team.name`):
     * emoji zastava (24px) + hrvatski naziv, razmak 8px.
     * Mapa je usklađena s nazivima koje vraća football-data /competitions/WC/standings.
     *
     * @param string $team_en Naziv reprezentacije na engleskom (kako ga vraća API).
     * @return string HTML span sa zastavom i hrvatskim nazivom.
     */
    function zp_team_label(string $team_en): string
    {
        // [hrvatski naziv, ISO-3166-1 alpha-2 kod] — ključevi su točni nazivi iz API-ja.
        $map = [
            'Algeria'            => ['Alžir', 'DZ'],
            'Argentina'          => ['Argentina', 'AR'],
            'Australia'          => ['Australija', 'AU'],
            'Austria'            => ['Austrija', 'AT'],
            'Belgium'            => ['Belgija', 'BE'],
            'Bosnia-Herzegovina' => ['Bosna i Hercegovina', 'BA'],
            'Brazil'             => ['Brazil', 'BR'],
            'Canada'             => ['Kanada', 'CA'],
            'Cape Verde Islands' => ['Zelenortski Otoci', 'CV'],
            'Colombia'           => ['Kolumbija', 'CO'],
            'Congo DR'           => ['DR Kongo', 'CD'],
            'Croatia'            => ['Hrvatska', 'HR'],
            'Curaçao'            => ['Curaçao', 'CW'],
            'Czechia'            => ['Češka', 'CZ'],
            'Ecuador'            => ['Ekvador', 'EC'],
            'Egypt'              => ['Egipat', 'EG'],
            'England'            => ['Engleska', 'GB-ENG'],
            'France'             => ['Francuska', 'FR'],
            'Germany'            => ['Njemačka', 'DE'],
            'Ghana'              => ['Gana', 'GH'],
            'Haiti'              => ['Haiti', 'HT'],
            'Iran'               => ['Iran', 'IR'],
            'Iraq'               => ['Irak', 'IQ'],
            'Ivory Coast'        => ['Obala Bjelokosti', 'CI'],
            'Japan'              => ['Japan', 'JP'],
            'Jordan'             => ['Jordan', 'JO'],
            'Mexico'             => ['Meksiko', 'MX'],
            'Morocco'            => ['Maroko', 'MA'],
            'Netherlands'        => ['Nizozemska', 'NL'],
            'New Zealand'        => ['Novi Zeland', 'NZ'],
            'Norway'             => ['Norveška', 'NO'],
            'Panama'             => ['Panama', 'PA'],
            'Paraguay'           => ['Paragvaj', 'PY'],
            'Portugal'           => ['Portugal', 'PT'],
            'Qatar'              => ['Katar', 'QA'],
            'Saudi Arabia'       => ['Saudijska Arabija', 'SA'],
            'Scotland'           => ['Škotska', 'GB-SCT'],
            'Senegal'            => ['Senegal', 'SN'],
            'South Africa'       => ['Južnoafrička Republika', 'ZA'],
            'South Korea'        => ['Južna Koreja', 'KR'],
            'Spain'              => ['Španjolska', 'ES'],
            'Sweden'             => ['Švedska', 'SE'],
            'Switzerland'        => ['Švicarska', 'CH'],
            'Tunisia'            => ['Tunis', 'TN'],
            'Turkey'             => ['Turska', 'TR'],
            'United States'      => ['Sjedinjene Države', 'US'],
            'Uruguay'            => ['Urugvaj', 'UY'],
            'Uzbekistan'         => ['Uzbekistan', 'UZ'],
        ];

        [$name_hr, $iso] = $map[$team_en] ?? [$team_en, ''];
        $flag = zp_team_flag($iso);

        return sprintf(
            '<span class="inline-flex items-center gap-2">%s%s</span>',
            $flag,
            '<span>' . esc_html($name_hr) . '</span>'
        );
    }
}

if (!function_exists('zp_team_flag')) {
    /**
     * Vraća flag-icons <span> za dani ISO-3166 kod (npr. "HR", "GB-SCT").
     * flag-icons koristi lowercase kodove i podržava pod-regije (gb-eng/gb-sct/gb-wls).
     *
     * @param string $iso ISO kod (npr. "HR" ili "GB-SCT"). Prazno => bez zastave.
     * @return string HTML span s flag-icons klasom ili prazan string.
     */
    function zp_team_flag(string $iso): string
    {
        $iso = strtolower(trim($iso));
        if ($iso === '') {
            return '';
        }

        // fis = uspravan format (1:1), zaobljeni rub; širina 24px.
        return sprintf(
            '<span class="fi fi-%s rounded-[2px]" style="width:24px;line-height:24px;" aria-hidden="true"></span>',
            esc_attr($iso)
        );
    }
}
