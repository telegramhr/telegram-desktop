<?php
$option = get_option('advent_2025');
$data = maybe_unserialize($option);
if (!isset($data) || empty($data)) {
    $allWeeks = [];
} else {
    $allWeeks = $data;
}

$weekKeys = array_keys($allWeeks);

$currentWeekIndex = 0;

$weekRange = $weekKeys[$currentWeekIndex] ?? '';
$weekEvents = $allWeeks[$weekRange] ?? [];

$startDate = null;
if (!empty($weekEvents)) {
    $startDate = new DateTime($weekEvents[0]['date']);
} else {
    $startDate = new DateTime('this week monday');
}

function renderDayEvents($events)
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

        echo "<div class='mix " . strtolower(str_replace(' ', '-', $ev['category'])) . " w-[146px] h-[138px] bg-white px-3 py-4 rounded-sm shadow mr-3'>";
        echo "<div class='flex flex-col gap-1 h-full'>";
        echo "<span class='font-medium text-base text-olive-green'>{$formattedTime}</span>";
        echo "<h3 class='font-semibold text-lg'>{$ev['title']}</h3>";
        echo "<p class='font-medium text-[12px]'>{$ev['location']}</p>";
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
        <img src="<?= $native_path; ?>/assets/calendar/leftSide.webp" class="absolute hidden md:block left-0 z-40" alt="Left side flowers">
        <img src="<?= $native_path; ?>/assets/calendar/rightSide.webp" class="absolute hidden md:block right-0 z-40" alt="Right side flowers">
        <img src="<?= $native_path; ?>/assets/stations/papir.webp" class="object-cover w-full h-full opacity-35 bg-blend-multiply" alt="Paper background">
    </div>
    <div class="max-w-[1088px] mx-auto pt-10 lg:pt-[50px] pb-16 lg:pb-[130px] flex flex-col gap-[60px] lg:gap-[62px] relative z-40">
        <div class="flex flex-col gap-7 w-full">
            <div class="max-w-[300px] mx-auto text-center flex flex-row gap-4 lg:gap-8 items-center">
                <button id="arrow-left" class="w-8 h-8 rounded-full bg-white hover:shadow-lg hover:scale-[1.01] transition-all duration-75 ease-in-out flex items-center justify-center cursor-pointer">
                    <i class="fa-solid fa-angle-left"></i>
                </button>
                <div class="flex flex-col gap-3 lg:gap-5 text-center">
                    <h2 id="week-title" class="font-christmas text-[39px] lg:text-[50px] text-olive-green">Vozni red</h2>
                    <span id="week-range" class="font-lato font-bold text-[18px] text-olive-green"><?= $weekRange ?></span>
                </div>
                <button id="arrow-right" class="w-8 h-8 rounded-full bg-white hover:shadow-lg hover:scale-[1.01] transition-all duration-75 ease-in-out flex items-center justify-center cursor-pointer">
                    <i class="fa-solid fa-angle-right"></i>
                </button>
            </div>
            <div class="flex flex-wrap md:flex-row justify-center gap-[10px] mx-auto">
                <button class="category-btn active px-3 py-[10px] text-[#EFE1D3] bg-olive-green rounded-sm font-medium text-base font-poppins cursor-pointer" data-filter="all">Sve</button>
                <button class="category-btn px-3 py-[10px] bg-[#E5CAB0] text-olive-green hover:bg-[#d4b79e] rounded-sm font-medium text-base font-poppins cursor-pointer" data-filter=".zalogaj">Zalogaj</button>
                <button class="category-btn px-3 py-[10px] bg-[#E5CAB0] text-olive-green hover:bg-[#d4b79e] rounded-sm font-medium text-base font-poppins cursor-pointer" data-filter=".provod">Provod</button>
                <button class="category-btn px-3 py-[10px] bg-[#E5CAB0] text-olive-green hover:bg-[#d4b79e] rounded-sm font-medium text-base font-poppins cursor-pointer" data-filter=".obitelj-i-djeca">Obitelj i djeca</button>
                <button class="category-btn px-3 py-[10px] bg-[#E5CAB0] text-olive-green hover:bg-[#d4b79e] rounded-sm font-medium text-base font-poppins cursor-pointer" data-filter=".cuga">Cuga</button>
                <button class="category-btn px-3 py-[10px] bg-[#E5CAB0] text-olive-green hover:bg-[#d4b79e] rounded-sm font-medium text-base font-poppins cursor-pointer" data-filter=".pokloni">Pokloni</button>
            </div>
        </div>

        <div class="hidden md:block">
            <table style="min-height: 400px;" class="w-full border-collapse">
                <thead>
                    <tr class="w-full flex flex-row gap-3" id="thead-row">
                        <?php
                        for ($i = 0; $i < 7; $i++) {
                            $dayDate = clone $startDate;
                            $dayDate->modify("+{$i} days");
                            $dayName = $daysOfWeek[$i];
                            $dayFormattedDate = $dayDate->format('d.m.');

                            echo "<th class='text-center bg-olive-green text-[#FEF4D3] font-bold text-lg w-full flex flex-1 flex-col p-2 rounded-[4px]'>";
                            echo "{$dayName}<br><span class='text-sm'>{$dayFormattedDate}</span>";
                            echo "</th>";
                        }
                        ?>
                    </tr>
                </thead>
                <tbody class="flex flex-col gap-4 pt-5" id="mixitup-container-desktop">
                    <?php
                    echo "<tr class='w-full flex flex-row gap-3'>";
                    for ($i = 0; $i < 7; $i++) {
                        $dayDate = clone $startDate;
                        $dayDate->modify("+{$i} days");
                        $dateKey = $dayDate->format("Y-m-d");

                        echo "<td class=' max-w-[146px] w-full flex flex-col gap-4'>";
                        $dayEvents = [];
                        foreach ($weekEvents as $ev) {
                            $evDate = (new DateTime($ev['date']))->format('Y-m-d');
                            if ($evDate === $dateKey) $dayEvents[] = $ev;
                        }
                        renderDayEvents($dayEvents);
                        echo "</td>";
                    }
                    echo "</tr>";
                    ?>
                </tbody>
            </table>
        </div>

        <!-- MOBILE -->
        <div class="block md:hidden" id="mixitup-container-mobile">
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

                echo "<div class='mb-8 day-section'>";
                echo "<div class='bg-olive-green text-[#FEF4D3] font-bold text-lg p-3 rounded-[4px] mb-4 text-center'>";
                echo "{$dayName}<br><span class='text-sm font-normal'>{$dayFormattedDate}</span>";
                echo "</div>";

                echo "<div class='mobile-day-carousel'>";
                renderDayEvents($dayEvents);
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
</div>

<style>
    #mixitup-container-desktop {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        opacity: 1;
        transition: opacity 0.4s ease;
    }

    .mix {
        flex: 0 0 auto;
        width: 146px;
        height: 138px;
    }
</style>

<script>
    document.getElementById("arrow-left")?.addEventListener("click", () => {
        <?= $currentWeekIndex = $currentWeekIndex + 1 ?>
    });

    document.getElementById("arrow-right")?.addEventListener("click", () => {
        <?= $currentWeekIndex = $currentWeekIndex - 1 ?>

    });
</script>