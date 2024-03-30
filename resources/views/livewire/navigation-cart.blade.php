<x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
    {{ __('Your Cart') }} ({{ $this->count }})
</x-nav-link>
