<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Fortlume') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">            
                <ul id="items">
                    <li>item 1</li>
                    <li>item 2</li>
                    <li>item 3</li>
                </ul>            
            </div>            
        </div>
    </div>
</x-app-layout>
