@props([
    'size' => 'text-base',
])

<div class="space-y-4">
    <h2 class="font-medium text-base text-gray-400">
        {{ __('Regular 400 at :size', ['size' => $size]) }}
    </h2>
    
    <p @class([
        'font-dm-serif leading-tighter',
        $size
    ])>
        @if(strlen($slot))
            {{ $slot }}
        @else
            <x-ui.element.font.sentence />
        @endif
    </p>
</div>