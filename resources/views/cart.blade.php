<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-red-500 dark:text-gray-200 leading-tight">
            {{ __('Cart Page') }}
        </h2>
    </x-slot>

    <livewire:cart />
</x-app-layout>
