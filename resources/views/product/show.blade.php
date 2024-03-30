<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-3xl text-red-500 dark:text-gray-200 leading-tight">
            {{ __('Product Page') }}
        </h2>
    </x-slot> --}}

    <livewire:product.show :id="request()->id" />
</x-app-layout>
