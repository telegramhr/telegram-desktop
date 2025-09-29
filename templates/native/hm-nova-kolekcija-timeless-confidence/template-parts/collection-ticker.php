<div class="w-full overflow-hidden relative">
    <div class="flex animate-ticker whitespace-nowrap text-secondary font-black font-poppins text-[20px] md:text-[32px] uppercase [&>span]:mx-1">
        <span>NEW COLLECTION </span>
        <span>NEW COLLECTION </span>
        <span>NEW COLLECTION </span>
        <span>NEW COLLECTION </span>
        <span>NEW COLLECTION </span>
        <span>NEW COLLECTION </span>
        <span>NEW COLLECTION </span>
        <span>NEW COLLECTION </span>
        <span>NEW COLLECTION </span>
        <span>NEW COLLECTION </span>
        <span>NEW COLLECTION </span>
        <span>NEW COLLECTION </span>
        <span>NEW COLLECTION </span>
        <span>NEW COLLECTION </span>
    </div>
</div>

<style>
    @keyframes ticker {
        0% {
            transform: translateX(0%);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    .animate-ticker {
        display: inline-flex;
        animation: ticker 20s linear infinite;
    }
</style>