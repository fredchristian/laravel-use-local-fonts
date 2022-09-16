<x-layout.web :title="__('Use local font in your Laravel project')">
    
    <x-ui.layout.container>
    
        <x-ui.element.heading.h1 title="DM Serif Display" />
        <x-ui.element.heading.authors :names="['Colophon Foundry', 'Frank Grießhammer']" />

        <x-ui.element.font.hero>
            Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense!
        </x-ui.element.font.hero>

        <x-ui.layout.2-cols>
            <x-slot:left>
                <x-ui.element.font.sample size="text-5xl" />
                <x-ui.element.font.sample size="text-2xl" />
            </x-slot>
            
            <x-slot:right>
                <x-ui.element.font.sample size="text-base" />
                <x-ui.element.font.sample size="text-sm" />
            </x-slot>
        </x-ui.layout.2-cols>

    </x-ui.layout.container>

</x-layout.web>
