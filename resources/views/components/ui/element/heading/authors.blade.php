@props([
    'names' => [],
])

@if($names)
    <span class="block font-medium text-sm text-center md:text-left text-gray-500">
        {{ __('Designed by :authors', ['authors' =>  Arr::join($names, ',', __(' and '))]) }}
    </span>
@endif
