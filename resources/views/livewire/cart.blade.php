<div class="bg-white rounded-b-lg border-t shahow p-5 mb-12">
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full text-left text-sm font-light text-surface dark:text-white">
                        <thead class="border-b text-lg border-neutral-200 font-medium dark:border-white/10">
                            <tr>
                                <th scope="col" class="px-6 py-4">#</th>
                                <th scope="col" class="px-6 py-4">Product</th>
                                <th scope="col" class="px-6 py-4 text-center">Size</th>
                                <th scope="col" class="px-6 py-4 text-center">Color</th>
                                <th scope="col" class="px-6 py-4 text-center">Quantity</th>
                                <th lass="px-6 py-4 text-center"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($this->items as $item)
                                <tr
                                    class="relative border-b border-neutral-200 dark:border-white/10 hover:bg-neutral-50 dark:hover:bg-white/10">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $loop->iteration }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">
                                        {{ $item->product->name }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4 text-center">
                                        {{ $item->variant->size }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4 text-center">
                                        {{ $item->variant->color }}
                                    </td>
                                    <td
                                        class="flex whitespace-nowrap px-6 py-4 text-center justify-center items-center">
                                        <button class="text-gray-800 font-bold p-1 bg-gray-100 hover:bg-gray-300"
                                            wire:click="decrement({{ $item->id }})">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                                            </svg>
                                        </button>
                                        <span class="font-semibold text-md mx-2">{{ $item->quantity }}</span>
                                        <button class="text-gray-800 font-bold p-1 bg-gray-100 hover:bg-gray-300"
                                            wire:click="increment({{ $item->id }})">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 4.5v15m7.5-7.5h-15" />
                                            </svg>

                                        </button>
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4 text-center">
                                        <button wire:click="delete({{ $item->id }})">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-red-600">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                            </svg>
                                        </button>

                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="whitespace-nowrap px-6 py-4 font-medium text-center" colspan="6">
                                        <span class="flex justify-center items-center text-lg font-bold text-red-900">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                            </svg>
                                            No items in cart
                                        </span>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="mt-6">
                    {{ $this->items->links() }}
                </div>
            </div>
        </div>
    </div>

</div>
