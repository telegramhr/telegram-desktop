<div class="w-full max-w-[1800px] mx-auto relative bg-secondary overflow-hidden pt-[164px] lg:pb-[72px]">
    <img src="<?= $native_path ?>assets/green-border.png" alt="Green border" class="hidden lg:block w-full h-full scale-[1.05] absolute inset-0">
    <img src="<?= $native_path ?>assets/green-border-vertical.png" alt="Green border" class="block lg:hidden w-full h-full scale-[1.05] absolute inset-0">

    <div class="w-full max-w-[1200px] px-4 flex justify-center mx-auto relative">
        <img src="<?= $native_path ?>/assets/envelopes.png" alt="Koverte" class="envelopes-parallax max-w-[860px] w-full top-[-130px] lg:top-[-180px] absolute inset-x-0 mx-auto ">

        <div class="paper-parallax w-full min-h-[560px] max-w-[440px] lg:rotate-[-4deg] rotate-[1deg] z-40 relative">
            <img src="<?= $native_path ?>/assets/paper.png" alt="" class="absolute w-full inset-x-0 mx-auto top-0">
            <div class="flex flex-col gap-[32px] lg:justify-between max-h-[550px] h-full w-full px-12 lg:px-[70px] pt-[70px] lg:py-[60px] font-ballet text-primary z-[40] relative text-[33px] lg:text-[35px] leading-10">
                <div class="flex flex-col gap-10 lg:gap-12">
                    <span>Dear Santa,</span>
                    <p>For this Christmas, we want a perfect wool coat… and a little extra happiness to go with it.</p>
                </div>
                <span class="flex self-end">Yours truly, <br>Super 1</span>
            </div>
        </div>
    </div>
</div>

<script>
    const envelopes = document.querySelector('.envelopes-parallax');
    const paper = document.querySelector('.paper-parallax');

    let lastScrollY = 0;
    let ticking = false;

    function onScroll() {
        lastScrollY = window.scrollY;
        requestTick();
    }

    function requestTick() {
        if (!ticking) {
            requestAnimationFrame(updatePositions);
            ticking = true;
        }
    }

    function updatePositions() {
        if (envelopes) {
            envelopes.style.transform = `translateY(${lastScrollY * 0.15}px)`;
        }

        if (paper) {
            const rotation = window.innerWidth >= 1024 ? -4 : 1;
            paper.style.transform = `translateY(${-lastScrollY * 0.08}px) rotate(${rotation}deg)`;
        }

        ticking = false;
    }

    window.addEventListener('scroll', onScroll);
</script>