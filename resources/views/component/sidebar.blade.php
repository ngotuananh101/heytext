<div id="sidebar" class=" py-[24px] bg-[#f3f6fb] flex flex-col justify-between items-center">
    <div class="flex flex-col mx-2 gap-[8px] w-[80px]">
        <a href="{{ route('home') }}" class="text-center flex flex-col items-center">
            <i class="fa-solid fa-square-a text-[24px] mb-[8px] {{ request()->routeIs('home') ? 'bg-[#cbf0f8] px-5 py-1 rounded-2xl w-fit' : '' }}"></i>
            <span class="text-[12px] font-medium">{{ __('Fonts') }}</span>
        </a>

        <a href="" class="text-center flex flex-col">
            <i class="fa-solid fa-square-u text-[24px] mb-[8px]"></i>
            <span class="text-[12px] font-medium">{{ __('Unicode') }}</span>
        </a>
    </div>
</div>
