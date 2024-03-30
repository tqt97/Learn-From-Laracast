<x-nav-link href="{{ route('cart') }}" :active="request()->routeIs('cart')">
    {{ __('Cart') }} <span class="ml-1 text-red-500 bg-gray-100 border-red-500 rounded px-1">{{ $this->count }}</span>
</x-nav-link>
