<div class="grid grid-cols-2 gap-10 my-6 bg-white">
    <div class="space-y-6 p-2" x-data="{ image: '{{ $this->product->image->path }}' }">
        <div class="rounded shadow-md">
            <img x-bind:src="image" alt="{{ $this->product->name }}" class="rounded">
        </div>

        <div class="grid grid-cols-4 space-x-3">
            @foreach ($this->product->images as $image)
                <div class="rounded shadow">
                    <img src="{{ $image->path }}" x-on:click="image = '{{ $image->path }}'"
                        alt="{{ $this->product->name }}" class="rounded">
                </div>
            @endforeach
        </div>
    </div>
    <div class="py-2 px-4">
        <h1 class="text-3xl font-bold text-red-500 font-mono">{{ $this->product->name }}</h1>
        <h3 class="text-xl mt-6">{{ $this->product->price }}</h3>
        <div class="mt-6 text-justify text-gray-800">
            {{ $this->product->description }}
        </div>
        <div class="mt-6 space-y-6">
            <select name="" id=""
                class="w-full bg-gray-50 py-1.5 pl-3 pr-10 border-gray-300 focus:border-red-500 focus:ring-red-500 rounded-md shadow-sm">
                @foreach ($this->product->variants as $variant)
                    <option value="{{ $variant->id }}">
                        {{ $variant->size }} / {{ $variant->color }}
                    </option>
                @endforeach
            </select>

            <x-button class="hover:bg-red-600 font-bold"> Add to cart</x-button>
        </div>
    </div>
</div>
