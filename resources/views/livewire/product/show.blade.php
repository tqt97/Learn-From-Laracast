<div class="grid grid-cols-2 gap-10 my-6 bg-white min-h-min">
    <div class="space-y-6 p-4 mt-6" x-data="{ image: '{{ $this->product->image->path }}' }">
        <div class="rounded shadow-md">
            <img x-bind:src="image" alt="{{ $this->product->name }}" class="rounded">
        </div>

        <div class="flex space-x-3">
            @foreach ($this->product->images as $image)
                <div class="rounded shadow">
                    <img src="{{ $image->path }}" x-on:click="image = '{{ $image->path }}'"
                        alt="{{ $this->product->name }}" class="rounded hover:cursor-pointer">
                </div>
            @endforeach
        </div>
    </div>
    <div class="p-4 mt-6">
        <h1 class="text-3xl font-extrabold text-blue-800 font-mono">{{ $this->product->name }}</h1>
        <h3 class="text-md mt-6">Price:
            <span class="text-xl text-blue-900">{{ $this->product->price }}</span>
        </h3>
        <div class="mt-6 text-justify text-gray-800">
            <p class="text-md font-semibold">Description:</p>
            {{ $this->product->description }}
        </div>
        <div class="mt-6 space-y-6">
            <select name="" id="" wire:model="variant"
                class="w-full bg-gray-50 py-1.5 pl-3 pr-10 border-gray-300 focus:border-blue-700 focus:ring-blue-700 rounded-md shadow-sm">
                @foreach ($this->product->variants as $variant)
                    <option value="{{ $variant->id }}">
                        {{ $variant->size }} / {{ $variant->color }}
                    </option>
                @endforeach
            </select> 
            @error('variant')
                <div class="text-red-500 mt-2">{{ $message }}</div>
            @enderror

            <x-button class="hover:bg-red-600 font-bold" wire:click="addToCart">
                Add to cart
            </x-button>
        </div>
    </div>
</div>
