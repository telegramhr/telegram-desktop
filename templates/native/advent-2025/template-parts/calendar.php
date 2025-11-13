<div class="w-full relative overflow-hidden px-4 bg-[#F2E7DC]">
    <!-- Background Overlay -->
    <div class="absolute inset-0 w-full h-full">
        <img src="<?= $native_path; ?>/assets/calendar/leftSide.webp" class="absolute hidden md:block left-0 z-40" alt="Left side flowers">
        <img src="<?= $native_path; ?>/assets/calendar/rightSide.webp" class="absolute hidden md:block right-0 z-40" alt="Left side flowers">
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
                    <span id="week-range" class="font-lato font-bold text-[18px] text-olive-green">24.11. - 30.11.2025.</span>
                </div>
                <button id="arrow-right" class="w-8 h-8 rounded-full bg-white hover:shadow-lg  hover:scale-[1.01] transition-all duration-75 ease-in-out flex items-center justify-center cursor-pointer">
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

        <div>
            <table class="w-full border-collapse">
                <thead>
                    <tr class="w-full hidden md:flex flex-row gap-3" id="thead-row">
                    </tr>
                </thead>
                <tbody class="flex flex-col gap-6 md:gap-4 md:pt-5" id="mixitup-container">
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
    #mixitup-container {
        display: flex;
        flex-wrap: wrap;
        transition: none !important;
        width: 100%;
    }

    .mix {
        flex: 0 0 auto;
    }
</style>