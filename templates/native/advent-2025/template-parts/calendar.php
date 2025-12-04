<?php
$option = get_option('advent_2025');
$data = maybe_unserialize($option);
if (!isset($data) || empty($data)) {
    $allWeeks = [];
} else {
    $allWeeks = $data;
}

$weekKeys = array_keys($allWeeks);
function renderDayEvents($events, $weekIndex)
{
    foreach ($events as $ev) {
        $formattedTime = '';
        if (!empty($ev['time'])) {
            try {
                $time = new DateTime($ev['time']);
                $formattedTime = $time->format('H:i');
            } catch (Exception $e) {
                $formattedTime = '--:--';
            }
        } else {
            $formattedTime = '--:--';
        }

        $category = strtolower(str_replace(' ', '-', $ev['category']));

        echo "<div class='mix {$category}  min-h-[138px] bg-white px-3 py-4 rounded-sm shadow mr-3 tb:mr-0' data-category='{$category}'>";
        echo "<div class='flex flex-col gap-1 h-full'>";
        echo "<div class='flex flex-col gap-1'>";
        echo "<span class='font-medium text-base leading-4 text-olive-green'>{$formattedTime}</span>";
        echo "<h3 class='font-semibold leading-6 text-lg'>{$ev['title']}</h3>";
        echo "</div>";
        echo "<p class='font-medium leading-3 text-[12px]'>{$ev['location']}</p>";
        echo "</div></div>";
    }
}

$daysOfWeek = [
    'Ponedjeljak',
    'Utorak',
    'Srijeda',
    'Četvrtak',
    'Petak',
    'Subota',
    'Nedjelja'
];
?>

<div class="w-full relative overflow-hidden px-4 bg-[#F2E7DC]">
    <div class="absolute inset-0 w-full h-full">
        <img src="<?= $native_path; ?>/assets/calendar/leftSide.webp" class="absolute hidden tb:block left-0 z-40" alt="Left side flowers">
        <img src="<?= $native_path; ?>/assets/calendar/rightSide.webp" class="absolute hidden tb:block right-0 z-40" alt="Right side flowers">
        <img src="<?= $native_path; ?>/assets/stations/papir.webp" class="object-cover w-full h-full opacity-10 bg-blend-darken" alt="Paper background">
    </div>
    <div class="max-w-[1088px] mx-auto pt-10 lg:pt-[50px] pb-16 lg:pb-[130px] flex flex-col gap-[60px] lg:gap-[62px] relative z-40">
        <div class="flex flex-col gap-7 w-full">
            <div class="max-w-[300px] mx-auto text-center flex flex-row gap-4 lg:gap-8 items-center">
                <button id="arrow-left" class="w-8 h-8 rounded-full bg-white hover:shadow-lg hover:scale-[1.01] transition-all duration-75 ease-in-out flex items-center justify-center cursor-pointer">
                    <i class="fa-solid fa-angle-left"></i>
                </button>
                <div class="flex flex-col gap-3 lg:gap-5 text-center">
                    <h2 id="week-title" class="font-christmas text-[39px] leading-[39px] lg:leading-[67px] lg:text-[50px] text-olive-green">Vozni red</h2>
                    <span id="week-range" class="font-inter font-bold text-base lg:leading-[18px] lg:text-[18px] text-olive-green"><?= $weekKeys[0] ?? '' ?></span>
                </div>
                <button id="arrow-right" class="w-8 h-8 rounded-full bg-white hover:shadow-lg hover:scale-[1.01] transition-all duration-75 ease-in-out flex items-center justify-center cursor-pointer">
                    <i class="fa-solid fa-angle-right"></i>
                </button>
            </div>
            <div class="flex flex-wrap tb:flex-row justify-center gap-[10px] mx-auto">
                <button class="category-btn active px-3 py-[10px] text-[#EFE1D3] bg-olive-green rounded-sm font-medium text-base leading-5 font-poppins cursor-pointer" data-filter="all">Sve</button>
                <button class="category-btn px-3 py-[10px] bg-[#E5CAB0] text-olive-green hover:bg-[#d4b79e] rounded-sm font-medium text-base leading-5 font-poppins cursor-pointer" data-filter=".zalogaj">Zalogaj</button>
                <button class="category-btn px-3 py-[10px] bg-[#E5CAB0] text-olive-green hover:bg-[#d4b79e] rounded-sm font-medium text-base leading-5 font-poppins cursor-pointer" data-filter=".provod">Provod</button>
                <button class="category-btn px-3 py-[10px] bg-[#E5CAB0] text-olive-green hover:bg-[#d4b79e] rounded-sm font-medium text-base leading-5 font-poppins cursor-pointer" data-filter=".obitelj-i-djeca">Obitelj i djeca</button>
                <button class="category-btn px-3 py-[10px] bg-[#E5CAB0] text-olive-green hover:bg-[#d4b79e] rounded-sm font-medium text-base leading-5 font-poppins cursor-pointer" data-filter=".cuga">Cuga</button>
                <button class="category-btn px-3 py-[10px] bg-[#E5CAB0] text-olive-green hover:bg-[#d4b79e] rounded-sm font-medium text-base leading-5 font-poppins cursor-pointer" data-filter=".pokloni">Pokloni</button>
            </div>
        </div>
        <!-- DESKTOP -->
        <div class="hidden tb:block">
            <?php
            foreach ($weekKeys as $weekIndex => $weekRange) {
                $weekEvents = $allWeeks[$weekRange] ?? [];
                if (empty($weekEvents)) continue;

                $startDate = new DateTime($weekEvents[0]['date']);
            ?>
                <table class="w-full min-h-[400px] border-collapse week-<?= $weekIndex ?>-table week-table <?= $weekIndex === 0 ? 'active' : '' ?>">
                    <thead>
                        <tr class="w-full flex flex-row gap-2 lg:gap-3 justify-center">
                            <?php
                            for ($i = 0; $i < 7; $i++) {
                                $dayDate = clone $startDate;
                                $dayDate->modify("+{$i} days");
                                $dayName = $daysOfWeek[$i];
                                $dayFormattedDate = $dayDate->format('d.m.Y');

                                echo "<th class='text-center bg-olive-green text-[#FEF4D3] font-inter font-bold text-[20px]  desktop-row flex flex-1 flex-col gap-1 p-2 rounded-[4px]'>";
                                echo "<span>{$dayName}</span><span class='text-[16px]'>{$dayFormattedDate}</span>";
                                echo "</th>";
                            }
                            ?>
                        </tr>
                    </thead>
                    <tbody class="flex flex-col gap-5 pt-5 mixitup-container-desktop">
                        <tr class='w-full flex flex-row gap-2 lg:gap-3 justify-center'>
                            <?php
                            for ($i = 0; $i < 7; $i++) {
                                $dayDate = clone $startDate;
                                $dayDate->modify("+{$i} days");
                                $dateKey = $dayDate->format("Y-m-d");

                                echo "<td class=' desktop-row w-full flex flex-col gap-4'>";

                                $dayEvents = [];
                                foreach ($weekEvents as $ev) {
                                    $evDate = (new DateTime($ev['date']))->format('Y-m-d');
                                    if ($evDate === $dateKey) $dayEvents[] = $ev;
                                }

                                renderDayEvents($dayEvents, $weekIndex);
                                echo "</td>";
                            }
                            ?>
                        </tr>
                    </tbody>
                </table>
            <?php
            }
            ?>
        </div>

        <!-- MOBILE -->
        <div class="block tb:hidden">
            <?php
            foreach ($weekKeys as $weekIndex => $weekRange) {
                $weekEvents = $allWeeks[$weekRange] ?? [];
                if (empty($weekEvents)) continue;

                $startDate = new DateTime($weekEvents[0]['date']);
            ?>
                <div class="week-<?= $weekIndex ?>-mobile week-mobile-container <?= $weekIndex === 0 ? 'active' : '' ?>">
                    <?php
                    for ($i = 0; $i < 7; $i++) {
                        $dayDate = clone $startDate;
                        $dayDate->modify("+{$i} days");
                        $dateKey = $dayDate->format("Y-m-d");
                        $dayName = $daysOfWeek[$i];
                        $dayFormattedDate = $dayDate->format('d.m.');

                        $dayEvents = [];
                        foreach ($weekEvents as $ev) {
                            $evDate = (new DateTime($ev['date']))->format('Y-m-d');
                            if ($evDate === $dateKey) $dayEvents[] = $ev;
                        }

                        if (empty($dayEvents)) continue;

                        echo "<div class='mb-6 day-section'>";
                        echo "<div class='bg-olive-green text-[#FEF4D3] font-bold text-lg p-2 rounded-[4px] flex flex-row gap-1 items-center mb-6 justify-center'>";
                        echo "<span>{$dayName}</span> <span>{$dayFormattedDate}</span>";
                        echo "</div>";

                        echo "<div class='mobile-day-carousel'>";
                        renderDayEvents($dayEvents, $weekIndex);
                        echo "</div>";
                        echo "</div>";
                    }
                    ?>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<style>
    @media (max-width: 920px) {
        .mix {
            width: 146px;
            transition: opacity 0.5s cubic-bezier(0.4, 0.0, 0.2, 1),
                transform 0.5s cubic-bezier(0.4, 0.0, 0.2, 1),
                max-width 0.5s cubic-bezier(0.4, 0.0, 0.2, 1),
                margin 0.5s cubic-bezier(0.4, 0.0, 0.2, 1);
        }

        .mix.filtered-out {
            opacity: 0 !important;
            transform: scale(0.8);
            max-width: 0 !important;
            margin: 0 !important;
            padding: 0 !important;
            overflow: hidden;
            pointer-events: none;
        }

    }

    @media (min-width: 920px) {

        .mix {
            width: 122px;
        }

        .desktop-row {
            max-width: 122px;
        }
    }


    @media (min-width: 1024px) {
        .mix {
            width: 132px;
        }

        .desktop-row {
            max-width: 132px;
        }

    }

    @media (min-width: 1280px) {
        .mix {
            width: 146px;
        }

        .desktop-row {
            max-width: 146px;
        }
    }

    .day-section {
        transition: all 0.6s cubic-bezier(0.4, 0.0, 0.2, 1);
        overflow: hidden;
        opacity: 1;
    }

    .mobile-day-carousel {
        transition: all 0.6s cubic-bezier(0.4, 0.0, 0.2, 1);
        min-height: 50px;
    }

    .mixitup-container-desktop {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        opacity: 1;
        transition: opacity 0.6s cubic-bezier(0.4, 0.0, 0.2, 1);
    }

    .mix {
        flex: 0 0 auto;

    }

    .week-table,
    .week-mobile-container {
        transition: opacity 0.6s cubic-bezier(0.4, 0.0, 0.2, 1);
    }

    .week-table:not(.active) {
        opacity: 0 !important;
        visibility: hidden !important;
        height: 0 !important;
        overflow: hidden !important;
        position: absolute !important;
        pointer-events: none !important;
    }

    .week-table.active {
        opacity: 1 !important;
        visibility: visible !important;
        position: relative !important;
        pointer-events: auto !important;
        height: auto !important;
    }

    .week-mobile-container:not(.active) {
        opacity: 0 !important;
        visibility: hidden !important;
        height: 0 !important;
        overflow: hidden !important;
        position: absolute !important;
        pointer-events: none !important;
    }

    .week-mobile-container.active {
        opacity: 1 !important;
        visibility: visible !important;
        position: relative !important;
        pointer-events: auto !important;
        height: auto !important;
    }

    #week-range {
        transition: opacity 0.4s cubic-bezier(0.4, 0.0, 0.2, 1),
            transform 0.4s cubic-bezier(0.4, 0.0, 0.2, 1);
    }

    #week-range.changing {
        opacity: 0;
        transform: translateY(-8px);
    }
</style>
<script>
</script>