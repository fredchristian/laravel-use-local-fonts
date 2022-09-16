<div class="flex flex-col items-center justify-center space-y-32 pt-16 pb-8">
    <p class="w-full max-w-2xl font-dm-serif text-5xl text-center leading-snug">
        @if(strlen($slot))
            {{ $slot }}
        @else
            <x-ui.element.font.sentence size="text-5xl" />
        @endif
    </p>

    <p class="w-full flex items-center justify-center space-x-2 pb-4 border-b border-gray-200">
        <span class="inline-block">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-cyan-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3" />
            </svg>
        </span>

        <span class="font-medium text-sm text-cyan-500 ">
            {{ __('View all styles') }}
        </span>
    </p>
</div>
