<?php
$native_path = $native_path ?? get_stylesheet_directory_uri() . '/templates/native/zona-prvenstva';
require_once __DIR__ . '/../inc/standings.php';
$zp_bracket = zp_get_wc_bracket();
$zp_has_bracket = !empty($zp_bracket['left']);


$zp_rounds = [];
if ($zp_has_bracket) {
    $roundCount = count($zp_bracket['left']);
    for ($r = 0; $r < $roundCount; $r++) {
        $zp_rounds[] = [
            'label' => $zp_bracket['left'][$r]['label'],
            'ties'  => array_merge(
                $zp_bracket['left'][$r]['ties'],
                $zp_bracket['right'][$r]['ties']
            ),
        ];
    }
    if (!empty($zp_bracket['final'])) {
        $finalTies = [$zp_bracket['final']];
        if (!empty($zp_bracket['third'])) {
            $finalTies[] = $zp_bracket['third'];
        }
        $zp_rounds[] = [
            'label'   => 'Završnica natjecanja',
            'ties'    => $finalTies,
            'isFinal' => true,
        ];
    }
}


$zp_line = static function (string $team, bool $isWinner, string $sideText): string {
    if ($team === '') {
        return '<div class="h-6"></div>';
    }

    return sprintf(
        '<div class="h-6 flex flex-row items-center justify-between gap-2 %s">
            <span class="text-[14px] leading-5 truncate">%s</span>
            <span class="font-inter text-[12px] leading-5 tabular-nums text-[#DDDDDD] shrink-0">%s</span>
        </div>',
        $isWinner ? 'font-bold' : 'text-[#CFCFCF]',
        zp_team_label($team),
        $sideText
    );
};


$ZP_BOX_H   = 72; 
$ZP_BASE_GAP = 10; 


$zp_score_text = static function (?int $goals, ?int $pens): string {
    if ($goals === null) {
        return '';
    }
    $text = (string) $goals;
    if ($pens !== null) {
        $text .= ' <span class="text-[#AAAAAA]">(' . (int) $pens . ')</span>';
    }
    return $text;
};


$zp_slot_key = static function (array $slots): string {
    $s = $slots;
    sort($s, SORT_NATURAL);
    return implode(',', $s);
};

$L = static fn (int $a, int $b) => array_map(fn ($i) => 'L' . $i, range($a, $b));
$D = static fn (int $a, int $b) => array_map(fn ($i) => 'D' . $i, range($a, $b));

$ZP_SCHEDULE = [];
$zp_sched = static function (array $slots, string $utc, string $city) use (&$ZP_SCHEDULE, $zp_slot_key) {
    $ZP_SCHEDULE[$zp_slot_key($slots)] = ['utc' => $utc, 'city' => $city];
};

// ──(LAST_32) ──────────────────────────────────────────
$zp_sched($L(1, 2),   '2026-06-29T00:00:00Z', 'Boston');         
$zp_sched($L(3, 4),   '2026-06-30T20:00:00Z', 'New York');       
$zp_sched($L(5, 6),   '2026-06-28T19:00:00Z', 'Los Angeles');   
$zp_sched($L(7, 8),   '2026-06-30T01:00:00Z', 'Monterrey');      
$zp_sched($L(9, 10),  '2026-07-03T01:00:00Z', 'Toronto');        
$zp_sched($L(11, 12), '2026-07-02T21:00:00Z', 'Los Angeles');    
$zp_sched($L(13, 14), '2026-07-02T00:00:00Z', 'San Francisco');  
$zp_sched($L(15, 16), '2026-07-01T20:00:00Z', 'Seattle');     
$zp_sched($D(1, 2),   '2026-06-29T17:00:00Z', 'Houston');       
$zp_sched($D(3, 4),   '2026-06-30T17:00:00Z', 'Dallas');        
$zp_sched($D(5, 6),   '2026-07-01T01:00:00Z', 'Mexico City');   
$zp_sched($D(7, 8),   '2026-07-01T16:00:00Z', 'Atlanta');       
$zp_sched($D(9, 10),  '2026-07-04T00:00:00Z', 'Miami');         
$zp_sched($D(11, 12), '2026-07-03T20:00:00Z', 'Dallas');         
$zp_sched($D(13, 14), '2026-07-03T05:00:00Z', 'Vancouver');     
$zp_sched($D(15, 16), '2026-07-04T03:30:00Z', 'Kansas City');    

// ──  (LAST_16)
$zp_sched(array_merge($L(1, 2),   $L(3, 4)),   '2026-07-04T21:00:00Z', 'Philadelphia'); 
$zp_sched(array_merge($L(5, 6),   $L(7, 8)),   '2026-07-04T17:00:00Z', 'Houston');    
$zp_sched(array_merge($L(9, 10),  $L(11, 12)), '2026-07-06T19:00:00Z', 'Dallas');      
$zp_sched(array_merge($L(13, 14), $L(15, 16)), '2026-07-07T00:00:00Z', 'Seattle');      
$zp_sched(array_merge($D(1, 2),   $D(3, 4)),   '2026-07-05T20:00:00Z', 'New York');       
$zp_sched(array_merge($D(5, 6),   $D(7, 8)),   '2026-07-06T00:00:00Z', 'Mexico City');    
$zp_sched(array_merge($D(9, 10),  $D(11, 12)), '2026-07-07T16:00:00Z', 'Atlanta');       
$zp_sched(array_merge($D(13, 14), $D(15, 16)), '2026-07-07T20:00:00Z', 'Vancouver');    

// (QUARTER_FINALS):
$zp_sched($L(1, 8),  '2026-07-09T20:00:00Z', 'Boston');       
$zp_sched($L(9, 16), '2026-07-10T19:00:00Z', 'Los Angeles');  
$zp_sched($D(1, 8),  '2026-07-11T21:00:00Z', 'Miami');        
$zp_sched($D(9, 16), '2026-07-12T01:00:00Z', 'Kansas City');  

// (SEMI_FINALS) ─────────────────────────────────
$zp_sched($L(1, 16), '2026-07-14T19:00:00Z', 'Dallas');  
$zp_sched($D(1, 16), '2026-07-15T19:00:00Z', 'Atlanta');  

// ── Final ──────────────────────────────────────────────────
$zp_sched(array_merge($L(1, 16), $D(1, 16)), '2026-07-19T19:00:00Z', 'New York'); 

// ── Bronze match ────────────────────────────────────
$zp_sched(['3P'], '2026-07-18T21:00:00Z', 'Miami'); 

$zp_tie = static function (array $tie, int $boxH) use ($zp_line, $zp_score_text, $ZP_SCHEDULE, $zp_slot_key): string {
    $match = $tie['match'] ?? null;
    $isFinished = $match && ($match['status'] ?? '') === 'FINISHED';
    $winner = $tie['winnerTeam'] ?? '';

    $homeWinner = $isFinished && $winner !== '' && $winner === ($tie['homeTeam'] ?? '');
    $awayWinner = $isFinished && $winner !== '' && $winner === ($tie['awayTeam'] ?? '');


    $homeSide = $isFinished ? $zp_score_text($match['homeGoals'] ?? null, $match['homePens'] ?? null) : '';
    $awaySide = $isFinished ? $zp_score_text($match['awayGoals'] ?? null, $match['awayPens'] ?? null) : '';

    $kickoff = '';
    if (!$isFinished) {
       
        $sched = $ZP_SCHEDULE[$zp_slot_key($tie['slots'] ?? [])] ?? null;
        $utc = $sched['utc'] ?? ($match['utcDate'] ?? '');
        $city = $sched['city'] ?? '';

        $ts = $utc !== '' ? strtotime($utc) : false;
        if ($ts) {
            $line2 = $city !== ''
                ? esc_html($city) . ' - ' . esc_html(wp_date('H:i', $ts)) . ' h'
                : esc_html(wp_date('H:i', $ts)) . ' h';

            $kickoff = sprintf(
                '<div class="shrink-0 self-center text-center text-[11px] leading-4 text-[#9DBE92] whitespace-nowrap">
                    <div>%s</div>
                    <div>%s</div>
                </div>',
                esc_html(wp_date('j.n.Y.', $ts)),
                $line2
            );
        }
    }

    return sprintf(
        '<div class="zp-tie bg-[#22401E] rounded-lg px-3 flex flex-row items-center gap-2" style="height:%dpx;">
            <div class="flex flex-col justify-center gap-1 flex-1 min-w-0">%s%s</div>%s
        </div>',
        $boxH,
        $zp_line($tie['homeTeam'] ?? '', $homeWinner, $homeSide),
        $zp_line($tie['awayTeam'] ?? '', $awayWinner, $awaySide),
        $kickoff
    );
};
?>
<div class='w-full overflow-hidden'>
    <div class='relative max-w-[1312px] mx-auto w-full flex flex-col gap-5 md:gap-15 px-6 pt-9 md:pt-20'>
        <div class='flex flex-col md:flex-row gap-11 md:justify-between md:items-center'>
            <div class='flex flex-col gap-[22px] text-center md:text-left'>
                <h2 class='font-geist font-extrabold text-[22px] leading-7 md:text-[40px] md:leading-[52px] tracking-[-1%]'>Knockout faza</h2>
                <p class='font-geist text-[16px] md:text-[18px]'></p>
            </div>
            <div class='flex flex-row gap-2 md:gap-3 justify-center items-center'>
                <button type='button' class='cursor-pointer js-bracket-prev w-9 h-9 md:w-10 md:h-10 rounded-full flex items-center justify-center bg-white text-[#142610] border border-white transition-colors disabled:bg-transparent disabled:text-white' aria-label='Prethodna'>
                    <svg width='18' height='18' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg' aria-hidden='true'>
                        <path d='M19 12H5M5 12L12 19M5 12L12 5' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' />
                    </svg>
                </button>
                <button type='button' class='cursor-pointer js-bracket-next w-9 h-9 md:w-10 md:h-10 rounded-full flex items-center justify-center bg-white text-[#142610] border border-white transition-colors disabled:bg-transparent disabled:text-white' aria-label='Sljedeća'>
                    <svg width='18' height='18' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg' aria-hidden='true'>
                        <path d='M5 12H19M19 12L12 5M19 12L12 19' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' />
                    </svg>
                </button>
            </div>
        </div>

        <?php if (!$zp_has_bracket) : ?>
            <p class='font-inter text-[16px] text-[#AAAAAA]'>Knockout faza još nije počela.</p>
        <?php else : ?>
            <div class='js-bracket-carousel' data-box-h='<?= (int) $ZP_BOX_H; ?>' data-base-gap='<?= (int) $ZP_BASE_GAP; ?>'>
                <?php foreach ($zp_rounds as $index => $round) : ?>
                    <div class='carousel-cell zp-round w-[260px] max-w-full mr-3 md:mr-8 bg-[#1B3218] flex flex-col gap-4 md:gap-6 p-4 md:p-6 rounded-xl self-start' data-round='<?= (int) $index; ?>'>
                        <span class='font-inter font-bold text-[11px] uppercase'><?= esc_html($round['label']); ?></span>
                        <div class='zp-round-body flex flex-col'>
                            <?php foreach ($round['ties'] as $tie) : ?>
                                <?php if (!empty($round['isFinal'])) : ?>
                                    <?php
                                    $zp_isFinalTie = ($tie['label'] ?? 'Finale') === 'Finale';
                                    $zp_label = $zp_isFinalTie ? 'Finale' : 'Borba za broncu';
                                   
                                    $zp_label_cls = $zp_isFinalTie ? 'text-[#F5C542]' : 'text-[#CD7F32] mt-4';
                                    ?>
                                    <span class='zp-final-label font-inter font-bold text-[10px] uppercase text-center mb-2 leading-none <?= $zp_label_cls; ?>'><?= esc_html($zp_label); ?></span>
                                <?php endif; ?>
                                <?= $zp_tie($tie, $ZP_BOX_H); ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <div class='hidden md:flex flex-row gap-3 items-center mt-[-4px]'>
            <span class='text-[#9A9A9A]'>Powered by</span>
            <img class='h-[16px]' src="<?= $native_path; ?>/assets/images/supersport-white.webp" alt="Supersport logo">
        </div>
    </div>
</div>
