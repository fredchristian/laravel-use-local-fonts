@props([
    'names' => [],
])

@if($names)
    <span class="font-medium text-sm text-gray-500">
        {{ __('Designed by :authors', ['authors' =>  Arr::join($names, ',', __(' and '))]) }}
    </span>
@endif
