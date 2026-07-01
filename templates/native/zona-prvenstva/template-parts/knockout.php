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
        $zp_rounds[] = [
            'label'   => 'Finale',
            'ties'    => [$zp_bracket['final']],
            'isFinal' => true,
        ];
    }
}

/**
 * Renders one competitor line: flag + HR name + score, or an empty line when
 * the team is not decided yet. No boxes.
 */
$zp_line = static function (string $team, bool $isWinner, ?int $goals, ?int $pens, bool $isFinished): string {
    if ($team === '') {
        return '<div class="h-6"></div>';
    }

    $score = '';
    if ($isFinished && $goals !== null) {
        $score = (string) $goals;
        if ($pens !== null) {
            $score .= ' <span class="text-[#AAAAAA]">(' . (int) $pens . ')</span>';
        }
    }

    return sprintf(
        '<div class="h-6 flex flex-row items-center justify-between gap-2 %s">
            <span class="text-[14px] leading-5 truncate">%s</span>
            <span class="font-inter text-[12px] leading-5 tabular-nums text-[#DDDDDD]">%s</span>
        </div>',
        $isWinner ? 'font-bold' : 'text-[#CFCFCF]',
        zp_team_label($team),
        $score
    );
};

// Bracket geometry (px). A tie box is a fixed height so later rounds can be
// positioned mathematically. Round R (0-based) has a vertical margin around
// each box so it lands centred against the two boxes that feed it.
$ZP_BOX_H   = 72;  // fixed tie-box height
$ZP_BASE_GAP = 16; // gap between adjacent boxes in the first round

/**
 * Renders a tie as its own fixed-height box holding two competitor lines.
 * $marginY is the top/bottom margin (px) that centres it against its feeders.
 */
$zp_tie = static function (array $tie, int $boxH, float $marginY) use ($zp_line): string {
    $match = $tie['match'] ?? null;
    $isFinished = $match && ($match['status'] ?? '') === 'FINISHED';
    $winner = $tie['winnerTeam'] ?? '';

    $homeWinner = $isFinished && $winner !== '' && $winner === ($tie['homeTeam'] ?? '');
    $awayWinner = $isFinished && $winner !== '' && $winner === ($tie['awayTeam'] ?? '');

    return sprintf(
        '<div class="bg-[#22401E] rounded-lg px-3 flex flex-col justify-center gap-1" style="height:%dpx;margin-top:%.1fpx;margin-bottom:%.1fpx;">%s%s</div>',
        $boxH,
        $marginY,
        $marginY,
        $zp_line($tie['homeTeam'] ?? '', $homeWinner, $match['homeGoals'] ?? null, $match['homePens'] ?? null, $isFinished),
        $zp_line($tie['awayTeam'] ?? '', $awayWinner, $match['awayGoals'] ?? null, $match['awayPens'] ?? null, $isFinished)
    );
};

/**
 * Vertical margin (px) for a box in round $index so it centres against the two
 * feeder boxes. step_R = (H + baseGap) * 2^R; margin = (step_R - H) / 2.
 */
$zp_margin_for_round = static function (int $index, int $boxH, int $baseGap): float {
    $step = ($boxH + $baseGap) * (2 ** $index);
    return ($step - $boxH) / 2;
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
            <div class='js-bracket-carousel'>
                <?php foreach ($zp_rounds as $index => $round) : ?>
                    <?php $marginY = $zp_margin_for_round($index, $ZP_BOX_H, $ZP_BASE_GAP); ?>
                    <div class='carousel-cell w-[260px] max-w-full mr-6 md:mr-8 bg-[#1B3218] flex flex-col gap-6 p-6 rounded-xl'>
                        <span class='font-inter font-bold text-[11px] uppercase <?= !empty($round['isFinal']) ? 'text-[#F5C542]' : ''; ?>'><?= esc_html($round['label']); ?></span>
                        <div class='flex flex-col'>
                            <?php foreach ($round['ties'] as $tie) : ?>
                                <?= $zp_tie($tie, $ZP_BOX_H, $marginY); ?>
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
