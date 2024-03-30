<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-red-500 dark:text-gray-200 leading-tight">
            {{ __('Home Page') }}
        </h2>
    </x-slot>

    <livewire:home-page />
</x-app-layout>
