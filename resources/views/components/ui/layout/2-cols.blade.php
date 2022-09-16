@props([
    'left' => null,
    'right' => null,
])

<div class="flex flex-row items-start space-x-16">
    <div class="flex-1 space-y-12">
        {{ $left }}
    </div>

    @if($right)
        <div class="flex-1 space-y-12">
            {{ $right }}
        </div>
    @endif
</div>