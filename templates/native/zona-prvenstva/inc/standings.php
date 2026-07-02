<?php

if (!defined('ABSPATH')) {
    exit;
}

if (!function_exists('zp_get_wc_standings')) {

    function zp_get_wc_standings(): array
    {
        $cache_key = 'zp_wc_standings';
        $cached = get_transient($cache_key);
        if ($cached !== false) {
            return $cached;
        }

        $token = defined('FOOTBALL_DATA_TOKEN');
        if (empty($token)) {
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

if (!function_exists('zp_get_wc_knockout')) {

    /**
     * Fetches World Cup 2026 knockout-stage matches grouped by round.
     *
     * One API call (all season matches), filtered to knockout stages and
     * cached for 10 minutes. Each round holds an ordered list of ties with
     * team names, crests, scores, penalties and status.
     *
     * @return array<int, array{stage:string, label:string, matches:array<int, array<string, mixed>>}>
     */
    function zp_get_wc_knockout(): array
    {
        $cache_key = 'zp_wc_knockout';
        $cached = get_transient($cache_key);
        if ($cached !== false) {
            return $cached;
        }

        $token = defined('FOOTBALL_DATA_TOKEN') ? FOOTBALL_DATA_TOKEN : '';
        if (empty($token)) {
            return [];
        }

        $response = wp_remote_get(
            'https://api.football-data.org/v4/competitions/WC/matches?season=2026',
            [
                'headers' => ['X-Auth-Token' => $token],
                'timeout' => 10,
            ]
        );

        if (is_wp_error($response) || wp_remote_retrieve_response_code($response) !== 200) {
            return [];
        }

        $data = json_decode(wp_remote_retrieve_body($response), true);
        if (!is_array($data) || empty($data['matches'])) {
            return [];
        }

        // Knockout rounds in bracket order. 2026 has 48 teams, so the round of
        // 32 (LAST_32) is the first knockout stage.
        $stage_labels = [
            'LAST_32'        => 'Šesnaestina finala',
            'LAST_16'        => 'Osmina finala',
            'QUARTER_FINALS' => 'Četvrtfinale',
            'SEMI_FINALS'    => 'Polufinale',
            'THIRD_PLACE'    => 'Za 3. mjesto',
            'FINAL'          => 'Finale',
        ];

        $buckets = array_fill_keys(array_keys($stage_labels), []);

        foreach ($data['matches'] as $match) {
            $stage = $match['stage'] ?? '';
            if (!isset($buckets[$stage])) {
                continue;
            }

            $score = $match['score'] ?? [];

            // On a shootout the API rolls penalties into fullTime (e.g. 4:5),
            // so prefer regularTime (the 1:1 at 90') when it exists and keep
            // the shootout tally in the penalty fields.
            $hasPens = isset($score['penalties']['home']);
            $mainScore = ($hasPens && isset($score['regularTime']['home']))
                ? $score['regularTime']
                : ($score['fullTime'] ?? []);

            $buckets[$stage][] = [
                'utcDate'   => $match['utcDate'] ?? '',
                'status'    => $match['status'] ?? '',
                'home'      => $match['homeTeam']['name'] ?? '',
                'homeCrest' => $match['homeTeam']['crest'] ?? '',
                'away'      => $match['awayTeam']['name'] ?? '',
                'awayCrest' => $match['awayTeam']['crest'] ?? '',
                'winner'    => $score['winner'] ?? null,
                'homeGoals' => $mainScore['home'] ?? null,
                'awayGoals' => $mainScore['away'] ?? null,
                'homePens'  => $score['penalties']['home'] ?? null,
                'awayPens'  => $score['penalties']['away'] ?? null,
            ];
        }

        $rounds = [];
        foreach ($stage_labels as $stage => $label) {
            if (empty($buckets[$stage])) {
                continue;
            }
            // Chronological order within a round.
            usort($buckets[$stage], static function ($a, $b) {
                return strcmp($a['utcDate'], $b['utcDate']);
            });
            $rounds[] = [
                'stage'   => $stage,
                'label'   => $label,
                'matches' => $buckets[$stage],
            ];
        }

        set_transient($cache_key, $rounds, 10 * MINUTE_IN_SECONDS);

        return $rounds;
    }
}

if (!function_exists('zp_bracket_slots')) {

    /**
     * Manual bracket seeding for World Cup 2026.
     *
     * Maps each team (by football-data English name) to a bracket slot: side
     * L/D and slot number 1..16. Round-of-32 pairs adjacent slots
     * ((L1,L2), (L3,L4)...); winners climb toward the centre final. Keyed by
     * English name because that is what the API returns for each team.
     *
     * @return array<string, string> team English name => slot code (e.g. "L1")
     */
    function zp_bracket_slots(): array
    {
        return [
            // Left side (L1–L16)
            'Germany'            => 'L1',
            'Paraguay'           => 'L2',
            'France'             => 'L3',
            'Sweden'             => 'L4',
            'South Africa'       => 'L5',
            'Canada'             => 'L6',
            'Netherlands'        => 'L7',
            'Morocco'            => 'L8',
            'Portugal'           => 'L9',
            'Croatia'            => 'L10',
            'Spain'              => 'L11',
            'Austria'            => 'L12',
            'United States'      => 'L13',
            'Bosnia-Herzegovina' => 'L14',
            'Belgium'            => 'L15',
            'Senegal'            => 'L16',
            // Right side (D1–D16)
            'Brazil'             => 'D1',
            'Japan'              => 'D2',
            'Ivory Coast'        => 'D3',
            'Norway'             => 'D4',
            'Mexico'             => 'D5',
            'Ecuador'            => 'D6',
            'England'            => 'D7',
            'Congo DR'           => 'D8',
            'Argentina'          => 'D9',
            'Cape Verde Islands' => 'D10',
            'Australia'          => 'D11',
            'Egypt'              => 'D12',
            'Switzerland'        => 'D13',
            'Algeria'            => 'D14',
            'Colombia'           => 'D15',
            'Ghana'              => 'D16',
        ];
    }
}

if (!function_exists('zp_get_wc_bracket')) {


    function zp_get_wc_bracket(): array
    {
        $slots = zp_bracket_slots();
        $team_by_slot = array_flip($slots);

        $rounds = zp_get_wc_knockout();
        $match_index = [];
        $match_by_team = [];
        foreach ($rounds as $round) {
            foreach ($round['matches'] as $match) {
                $home = $match['home'] ?? '';
                $away = $match['away'] ?? '';
                if ($home === '' || $away === '') {
                    continue;
                }
                $key = zp_pair_key($home, $away);
                $match_index[$key] = $match;

                $stage = $round['stage'];
                $match_by_team[$stage . '|' . $home] = $match;
                $match_by_team[$stage . '|' . $away] = $match;
            }
        }

        $round_labels = [
            16 => 'Šesnaestina finala',
            8  => 'Osmina finala',
            4  => 'Četvrtfinale',
            2  => 'Polufinale',
        ];

        $round_stages = [
            16 => 'LAST_32',
            8  => 'LAST_16',
            4  => 'QUARTER_FINALS',
            2  => 'SEMI_FINALS',
        ];


        $build_side = static function (string $side) use ($team_by_slot, $match_index, $match_by_team, $round_labels, $round_stages): array {
            $leaves = [];
            for ($i = 1; $i <= 16; $i++) {
                $code = $side . $i;
                $leaves[] = [
                    'slots' => [$code],
                    'team'  => $team_by_slot[$code] ?? '',
                ];
            }

            $side_rounds = [];
            $nodes = $leaves;
            $size = 16;

            while ($size >= 2) {
                $stage = $round_stages[$size] ?? '';
                $ties = [];
                for ($j = 0; $j < count($nodes); $j += 2) {
                    $a = $nodes[$j];
                    $b = $nodes[$j + 1];

                    $tie = zp_resolve_tie($a, $b, $match_index, $match_by_team, $stage);
                    $ties[] = $tie;
                }

                $side_rounds[] = [
                    'label' => $round_labels[$size] ?? '',
                    'ties'  => $ties,
                ];

                // Winners become the nodes of the next round.
                $nodes = array_map(static function ($tie) {
                    return [
                        'slots' => $tie['slots'],
                        'team'  => $tie['winnerTeam'],
                    ];
                }, $ties);
                $size = (int) ($size / 2);
            }

            return $side_rounds;
        };

        $left  = $build_side('L');
        $right = $build_side('D');

        $final = null;
        $left_final_node  = end($left)  ? end($left)['ties'][0]  : null;
        $right_final_node = end($right) ? end($right)['ties'][0] : null;
        if ($left_final_node && $right_final_node) {
            $final = zp_resolve_tie(
                ['slots' => $left_final_node['slots'], 'team' => $left_final_node['winnerTeam']],
                ['slots' => $right_final_node['slots'], 'team' => $right_final_node['winnerTeam']],
                $match_index,
                $match_by_team,
                'FINAL'
            );
            $final['label'] = 'Finale';
        }
       
        $third_match = null;
        foreach ($rounds as $round) {
            if ($round['stage'] === 'THIRD_PLACE' && !empty($round['matches'])) {
                $third_match = $round['matches'][0];
                break;
            }
        }
        $third_winner = '';
        if ($third_match && ($third_match['status'] ?? '') === 'FINISHED') {
            if (($third_match['winner'] ?? null) === 'HOME_TEAM') {
                $third_winner = $third_match['home'];
            } elseif (($third_match['winner'] ?? null) === 'AWAY_TEAM') {
                $third_winner = $third_match['away'];
            }
        }
        $third = ($final !== null) ? [
            'slots'      => ['3P'],
            'label'      => 'Za 3. mjesto',
            'homeTeam'   => $third_match['home'] ?? '',
            'awayTeam'   => $third_match['away'] ?? '',
            'homeSlots'  => [],
            'awaySlots'  => [],
            'match'      => $third_match,
            'winnerTeam' => $third_winner,
        ] : null;

        return [
            'left'  => $left,
            'right' => $right,
            'final' => $final,
            'third' => $third,
        ];
    }
}

if (!function_exists('zp_pair_key')) {

    /** Order-independent key for a pair of team names. */
    function zp_pair_key(string $a, string $b): string
    {
        $pair = [$a, $b];
        sort($pair, SORT_STRING);
        return implode('|', $pair);
    }
}

if (!function_exists('zp_resolve_tie')) {

    function zp_resolve_tie(array $a, array $b, array $match_index, array $match_by_team = [], string $stage = ''): array
    {
        $slots = array_merge($a['slots'], $b['slots']);
        $tie = [
            'slots'       => $slots,
            'homeTeam'    => $a['team'],
            'awayTeam'    => $b['team'],
            'homeSlots'   => $a['slots'],
            'awaySlots'   => $b['slots'],
            'match'       => null,
            'winnerTeam'  => '',
        ];

        $bothKnown = $a['team'] !== '' && $b['team'] !== '';

        if ($bothKnown) {
            $match = $match_index[zp_pair_key($a['team'], $b['team'])] ?? null;
        } else {

            $known = $a['team'] !== '' ? $a['team'] : $b['team'];
            $match = ($known !== '' && $stage !== '')
                ? ($match_by_team[$stage . '|' . $known] ?? null)
                : null;
        }

        if ($match === null) {
            return $tie;
        }

        $tie['match'] = $match;

        if ($bothKnown && ($match['status'] ?? '') === 'FINISHED') {
            $winner = $match['winner'] ?? null;
            if ($winner === 'HOME_TEAM') {
                $tie['winnerTeam'] = $match['home'];
            } elseif ($winner === 'AWAY_TEAM') {
                $tie['winnerTeam'] = $match['away'];
            }
        }

        return $tie;
    }
}

if (!function_exists('zp_team_label')) {

    function zp_team_label(string $team_en): string
    {
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

    function zp_team_flag(string $iso): string
    {
        $iso = strtolower(trim($iso));
        if ($iso === '') {
            return '';
        }

        return sprintf(
            '<span class="fi fi-%s rounded-[2px]" style="width:24px;line-height:24px;" aria-hidden="true"></span>',
            esc_attr($iso)
        );
    }
}
