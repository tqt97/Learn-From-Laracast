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
                                <th scope="col" class="px-6 py-4 text-center">Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($this->items as $item)
                                <tr class="border-b border-neutral-200 dark:border-white/10 hover:bg-neutral-100 dark:hover:bg-white/10">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $loop->iteration }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">
                                        <span class="font-bold text-red-900 text-md">{{ $item->product->name }}</span> |
                                        <span class="font-semibold">Size: </span> {{ $item->variant->size }} |
                                        <span class="font-semibold">Color: </span> {{ $item->variant->color }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4 text-center">
                                        {{ $item->quantity }}
                                    </td>
                                </tr>
                            @endforeach
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
