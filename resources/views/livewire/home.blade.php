<div class="p-6 sm:px-20 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-5">
        @foreach ($this->products as $product)
            <div
                class="relative group bg-white text-center dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg hover:shadow-xl">
                <img src="{{ $product->image->path }}" alt="{{ $product->name }}"
                    class="w-full group-hover:transform group-hover:scale-105 transition-all duration-200">
                <h3
                    class="p-2 mt-2 text-xl text-center leading-6 font-medium text-red-600 group-hover:text-red-500 dark:text-gray-100">
                    {{ $product->name }}
                </h3>
                <span
                    class="my-2 p-2 text-md leading-6 font-medium text-gray-600 group-hover:text-gray-800 dark:text-gray-100 border-t-2 border-gray-300">
                    {{ $product->price }}
                </span>
            </div>
        @endforeach
    </div>
    <div class="relative mt-6">
        {{ $this->products->links() }}
    </div>
</div>
