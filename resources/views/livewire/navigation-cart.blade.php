<x-nav-link href="{{ route('cart') }}" :active="request()->routeIs('cart')">
    {{ __('Your Cart') }} ({{ $this->count }})
</x-nav-link>
