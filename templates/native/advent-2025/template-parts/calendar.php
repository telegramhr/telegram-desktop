<div class="w-full relative overflow-hidden px-4 bg-[#F2E7DC]">


    <!-- Background Overlay -->
    <div class="absolute inset-0 w-full h-full">

        <img src="<?= $native_path; ?>/assets/calendar/leftSide.webp" class="absolute left-0 z-40" alt="Left side flowers">
        <img src="<?= $native_path; ?>/assets/calendar/rightSide.webp" class="absolute right-0 z-40" alt="Left side flowers">
        <img src="<?= $native_path; ?>/assets/stations/papir.webp" class="object-cover w-full h-full opacity-35 bg-blend-multiply" alt="Paper background">
    </div>
    <div class="max-w-[1088px] mx-auto pt-[50px] pb-[130px] flex flex-col gap-[62px] relative z-40">
        <div class="flex flex-col gap-7 w-full">
            <div class="max-w-[300px] mx-auto text-center flex flex-row gap-8 items-center">
                <button class="w-8 h-8 rounded-full bg-white flex items-center justify-center"> <i id="arrow-left" class="fa-solid fa-angle-left"></i>
                </button>
                <div class="flex flex-col gap-5">
                    <h2 class="font-christmas text-[50px] leading-[67px] text-olive-green">Vozni red</h2>
                    <span class="font-lato font-bold text-[18px] text-olive-green text-center">16.12. - 22.12.2025.</span>
                </div>
                <button class="w-8 h-8 rounded-full bg-white flex items-center justify-center">
                    <i id="arrow-right" class="fa-solid fa-angle-right"></i>
                </button>
            </div>
            <div class="flex flex-row gap-[10px] mx-auto">
                <button class="px-3 py-[10px] text-[#EFE1D3] bg-olive-green rounded-sm font-medium text-base font-poppins ">Sve</button>
                <button class="px-3 py-[10px] bg-[#E5CAB0] text-olive-green rounded-sm font-medium text-base font-poppins ">Zalogaj</button>
                <button class="px-3 py-[10px] bg-[#E5CAB0] text-olive-green rounded-sm font-medium text-base font-poppins ">Provod</button>
                <button class="px-3 py-[10px] bg-[#E5CAB0] text-olive-green rounded-sm font-medium text-base font-poppins ">Obitelj i djeca</button>
                <button class="px-3 py-[10px] bg-[#E5CAB0] text-olive-green rounded-sm font-medium text-base font-poppins ">Cuga</button>
                <button class="px-3 py-[10px] bg-[#E5CAB0] text-olive-green rounded-sm font-medium text-base font-poppins ">Pokloni</button>
            </div>
        </div>
        <div>
            <table class="w-full border-collapse">
                <thead class="">
                    <tr class=" w-full flex flex-row gap-3">
                        <th class="bg-olive-green text-light-sand text-base font-bold text-center py-2 max-w-[146px] w-full font-inter rounded-sm">Ponedjeljak <br> 16.12.2025.</th>
                        <th class="bg-olive-green text-light-sand text-base font-bold text-center py-2 max-w-[146px] w-full font-inter rounded-sm">Utorak <br> 17.12.2025.</th>
                        <th class="bg-olive-green text-light-sand text-base font-bold text-center py-2 max-w-[146px] w-full font-inter rounded-sm">Srijeda <br> 18.12.2025.</th>
                        <th class="bg-olive-green text-light-sand text-base font-bold text-center py-2 max-w-[146px] w-full font-inter rounded-sm">Cetvrtak <br> 19.12.2025.</th>
                        <th class="bg-olive-green text-light-sand text-base font-bold text-center py-2 max-w-[146px] w-full font-inter rounded-sm">Petak <br> 20.12.2025.</th>
                        <th class="bg-olive-green text-light-sand text-base font-bold text-center py-2 max-w-[146px] w-full font-inter rounded-sm">Subota <br> 21.12.2025.</th>
                        <th class="bg-olive-green text-light-sand text-base font-bold text-center py-2 max-w-[146px] w-full font-inter rounded-sm">Nedjelja <br> 22.12.2025.</th>
                    </tr>
                </thead>
                <tbody class="flex flex-col gap-4 pt-5">
                    <tr class="flex flex-row gap-3">
                        <td class="w-full max-w-[146px] bg-white px-3 py-4 rounded-sm flex flex-col gap-3 text-[#212525]">
                            <span class="font-medium text-base">17:00</span>
                            <h3 class="font-semibold text-lg">Najbolje Fritule</h3>
                            <p class="font-medium text-[12px]">Trg sv.Petra u Jabukovcu</p>
                        </td>
                        <td class="w-full max-w-[146px] bg-white px-3 py-4 rounded-sm flex flex-col gap-3 text-[#212525]">
                            <span class="font-medium text-base">17:00</span>
                            <h3 class="font-semibold text-lg">Najbolje Fritule</h3>
                            <p class="font-medium text-[12px]">Trg sv.Petra u Jabukovcu</p>
                        </td>
                        <td class="w-full max-w-[146px] bg-white px-3 py-4 rounded-sm flex flex-col gap-3 text-dark-slate">
                            <span class="font-medium text-base">17:00</span>
                            <h3 class="font-semibold text-lg">Najbolje Fritule</h3>
                            <p class="font-medium text-[12px]">Trg sv.Petra u Jabukovcu</p>
                        </td>
                        <td class="w-full max-w-[146px] bg-white px-3 py-4 rounded-sm flex flex-col gap-3 text-dark-slate">
                            <span class="font-medium text-base">17:00</span>
                            <h3 class="font-semibold text-lg">Najbolje Fritule</h3>
                            <p class="font-medium text-[12px]">Trg sv.Petra u Jabukovcu</p>
                        </td>
                        <td class="w-full max-w-[146px] bg-white px-3 py-4 rounded-sm flex flex-col gap-3 text-dark-slate">
                            <span class="font-medium text-base">17:00</span>
                            <h3 class="font-semibold text-lg">Najbolje Fritule</h3>
                            <p class="font-medium text-[12px]">Trg sv.Petra u Jabukovcu</p>
                        </td>
                        <td class="w-full max-w-[146px] bg-white px-3 py-4 rounded-sm flex flex-col gap-3 text-dark-slate">
                            <span class="font-medium text-base">17:00</span>
                            <h3 class="font-semibold text-lg">Najbolje Fritule</h3>
                            <p class="font-medium text-[12px]">Trg sv.Petra u Jabukovcu</p>
                        </td>
                        <td class="w-full max-w-[146px] bg-white px-3 py-4 rounded-sm flex flex-col gap-3 text-dark-slate">
                            <span class="font-medium text-base">17:00</span>
                            <h3 class="font-semibold text-lg">Najbolje Fritule</h3>
                            <p class="font-medium text-[12px]">Trg sv.Petra u Jabukovcu</p>
                        </td>

                    </tr>
                    <tr class="flex flex-row gap-3">
                        <td class="w-full max-w-[146px] bg-white px-3 py-4 rounded-sm flex flex-col gap-3 text-dark-slate">
                            <span class="font-medium text-base">17:00</span>
                            <h3 class="font-semibold text-lg">Najbolje Fritule</h3>
                            <p class="font-medium text-[12px]">Trg sv.Petra u Jabukovcu</p>
                        </td>
                        <td class="w-full max-w-[146px] bg-white px-3 py-4 rounded-sm flex flex-col gap-3 text-dark-slate">
                            <span class="font-medium text-base">17:00</span>
                            <h3 class="font-semibold text-lg">Najbolje Fritule</h3>
                            <p class="font-medium text-[12px]">Trg sv.Petra u Jabukovcu</p>
                        </td>
                        <td class="w-full max-w-[146px] bg-white px-3 py-4 rounded-sm flex flex-col gap-3 text-dark-slate">
                            <span class="font-medium text-base">17:00</span>
                            <h3 class="font-semibold text-lg">Najbolje Fritule</h3>
                            <p class="font-medium text-[12px]">Trg sv.Petra u Jabukovcu</p>
                        </td>
                        <td class="w-full max-w-[146px] bg-white px-3 py-4 rounded-sm flex flex-col gap-3 text-dark-slate">
                            <span class="font-medium text-base">17:00</span>
                            <h3 class="font-semibold text-lg">Najbolje Fritule</h3>
                            <p class="font-medium text-[12px]">Trg sv.Petra u Jabukovcu</p>
                        </td>
                        <td class="w-full max-w-[146px] bg-white px-3 py-4 rounded-sm flex flex-col gap-3 text-dark-slate">
                            <span class="font-medium text-base">17:00</span>
                            <h3 class="font-semibold text-lg">Najbolje Fritule</h3>
                            <p class="font-medium text-[12px]">Trg sv.Petra u Jabukovcu</p>
                        </td>
                        <td class="w-full max-w-[146px] bg-white px-3 py-4 rounded-sm flex flex-col gap-3 text-dark-slate">
                            <span class="font-medium text-base">17:00</span>
                            <h3 class="font-semibold text-lg">Najbolje Fritule</h3>
                            <p class="font-medium text-[12px]">Trg sv.Petra u Jabukovcu</p>
                        </td>
                        <td class="w-full max-w-[146px] bg-white px-3 py-4 rounded-sm flex flex-col gap-3 text-dark-slate">
                            <span class="font-medium text-base">17:00</span>
                            <h3 class="font-semibold text-lg">Najbolje Fritule</h3>
                            <p class="font-medium text-[12px]">Trg sv.Petra u Jabukovcu</p>
                        </td>

                    </tr>
                    <tr class="flex flex-row gap-3">
                        <td class="w-full max-w-[146px] bg-white px-3 py-4 rounded-sm flex flex-col gap-3 text-dark-slate">
                            <span class="font-medium text-base">17:00</span>
                            <h3 class="font-semibold text-lg">Najbolje Fritule</h3>
                            <p class="font-medium text-[12px]">Trg sv.Petra u Jabukovcu</p>
                        </td>
                        <td class="w-full max-w-[146px] bg-white px-3 py-4 rounded-sm flex flex-col gap-3 text-dark-slate">
                            <span class="font-medium text-base">17:00</span>
                            <h3 class="font-semibold text-lg">Najbolje Fritule</h3>
                            <p class="font-medium text-[12px]">Trg sv.Petra u Jabukovcu</p>
                        </td>
                        <td class="w-full max-w-[146px] bg-white px-3 py-4 rounded-sm flex flex-col gap-3 text-dark-slate">
                            <span class="font-medium text-base">17:00</span>
                            <h3 class="font-semibold text-lg">Najbolje Fritule</h3>
                            <p class="font-medium text-[12px]">Trg sv.Petra u Jabukovcu</p>
                        </td>
                        <td class="w-full max-w-[146px] bg-white px-3 py-4 rounded-sm flex flex-col gap-3 text-dark-slate">
                            <span class="font-medium text-base">17:00</span>
                            <h3 class="font-semibold text-lg">Najbolje Fritule</h3>
                            <p class="font-medium text-[12px]">Trg sv.Petra u Jabukovcu</p>
                        </td>
                        <td class="w-full max-w-[146px] bg-white px-3 py-4 rounded-sm flex flex-col gap-3 text-dark-slate">
                            <span class="font-medium text-base">17:00</span>
                            <h3 class="font-semibold text-lg">Najbolje Fritule</h3>
                            <p class="font-medium text-[12px]">Trg sv.Petra u Jabukovcu</p>
                        </td>
                        <td class="w-full max-w-[146px] bg-white px-3 py-4 rounded-sm flex flex-col gap-3 text-dark-slate">
                            <span class="font-medium text-base">17:00</span>
                            <h3 class="font-semibold text-lg">Najbolje Fritule</h3>
                            <p class="font-medium text-[12px]">Trg sv.Petra u Jabukovcu</p>
                        </td>
                        <td class="w-full max-w-[146px] bg-white px-3 py-4 rounded-sm flex flex-col gap-3 text-dark-slate">
                            <span class="font-medium text-base">17:00</span>
                            <h3 class="font-semibold text-lg">Najbolje Fritule</h3>
                            <p class="font-medium text-[12px]">Trg sv.Petra u Jabukovcu</p>
                        </td>

                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>