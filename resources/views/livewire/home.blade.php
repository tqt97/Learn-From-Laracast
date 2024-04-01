<div>
    <x-slot name="slider">
        <section
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-nordic-gray-light flex pt-12 md:pt-0 md:items-center bg-cover bg-right">
            <div class="flex h-full w-full mx-auto pt-6 md:pt-0 md:items-center rounded"
                style="height: 24rem; background-image: url('{{ asset('images/bg-home.avif') }}');">
                <div class="flex flex-col w-full justify-center items-center  px-6 tracking-wide">
                    <h1 class="text-blue-900 text-6xl my-4 font-bold font-mono">Welcome to our Shop</h1>
                    <a class="flex items-center justify-center text-2xl text-white no-underline border-b border-gray-800 leading-relaxed hover:text-black hover:border-black"
                        href="/">
                        Buy now
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 text-gray-800 animate-bounce ml-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 17.25 12 21m0 0-3.75-3.75M12 21V3" />
                        </svg>


                    </a>
                </div>
            </div>
        </section>
    </x-slot>

    <div class="my-6 p-6 rounded bg-white  dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">

        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-3">

            <span class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl">
                Filter
            </span>

            <div class="flex items-center">

                <button class="pl-3 inline-block no-underline hover:text-black cursor-pointer" wire:click="orderBy">
                    <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24">
                        <path d="M7 11H17V13H7zM4 7H20V9H4zM10 15H14V17H10z"></path>
                    </svg>
                </button>

                <button class="pl-3 inline-block no-underline hover:text-black">
                    <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24">
                        <path
                            d="M10,18c1.846,0,3.543-0.635,4.897-1.688l4.396,4.396l1.414-1.414l-4.396-4.396C17.365,13.543,18,11.846,18,10 c0-4.411-3.589-8-8-8s-8,3.589-8,8S5.589,18,10,18z M10,4c3.309,0,6,2.691,6,6s-2.691,6-6,6s-6-2.691-6-6S6.691,4,10,4z">
                        </path>
                    </svg>
                </button>

            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-5">

            @foreach ($products as $product)
                <div
                    class="relative group bg-white  dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg hover:shadow-xl transition duration-200">
                    <a href="{{ route('products.show', $product) }}" class="">
                        <img src="{{ $product->image->path }}" alt="{{ $product->name }}"
                            class="w-full group-hover:transform group-hover:brightness-75 ">
                        <h3
                            class="my-3 px-3 text-xl leading-6 font-bold text-blue-900 group-hover:text-blue-800 font-mono">
                            {{ $product->name }}
                        </h3>
                        <div class="px-3 mb-3 flex items-center justify-between">
                            <span
                                class="text-md leading-6 group-hover:font-bold text-gray-700 group-hover:text-gray-950">
                                {{ $product->price }}
                            </span>
                            {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor"
                                class="w-5 h-5 group-hover:scale-110 group-hover:text-red-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                            </svg> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor"
                                class="w-5 h-5 group-hover:scale-110 group-hover:text-red-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                            </svg>

                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="relative mt-6">
            {{-- {{ $products->links() }} --}}
            {{ $products->links(data: ['scrollTo' => false]) }}
        </div>
    </div>
</div>
