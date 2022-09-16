@props([
    'left' => null,
    'right' => null,
])

<div class="flex flex-col md:flex-row items-start space-y-16 md:space-y-0 md:space-x-16">
    <div class="flex-1 space-y-12">
        {{ $left }}
    </div>

    @if($right)
        <div class="flex-1 space-y-12">
            {{ $right }}
        </div>
    @endif
</div>