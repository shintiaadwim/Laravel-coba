<x-app-layout>
    @section('title', 'Products')

    {{-- SearchInput & ButtonModal --}}
    <div class="flex items-start justify-between pb-4">
        <div class="flex w-full justify-between">
            {{-- Product Search --}}
            <div id="InputSearch">
                <label for="search" class="sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input type="search" id="search"
                        class="block p-2 pl-10 text-sm w-36 text-gray-900 border border-gray-300 rounded-lg  bg-gray-50 focus:ring-blue-500 focus:border-blue-500 sm:max-w-md sm:w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Cari menu">
                </div>
            </div>

            {{-- Button CreateProduct Modal --}}
            <button type="button" data-modal-target="create-product-modal" data-modal-toggle="create-product-modal"
                class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                        clip-rule="evenodd"></path>
                </svg>
                Create
            </button>
        </div>
    </div>

    {{-- Product Table --}}
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="p-4">#</th>
                    <th scope="col" class="px-6 py-3 columns-2 md:columns-1">Nama Produk</th>
                    <th scope="col" class="px-6 py-3">Kode Produk</th>
                    <th scope="col" class="px-6 py-3">Harga Produk</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-4 p-4"> {{ $loop->iteration }} </td>
                        <td scope="row" class="px-6 py-4 max-w-[15rem] font-medium text-gray-900">
                            {{ $product->nama_product }} </td>
                        <td class="px-6 py-4 capitalize"> {{ $product->kode_product }} </td>
                        <td class="px-6 py-4 truncate">Rp. {{ $product->harga_product }} </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="edit-product-modal" data-modal-toggle="edit-product-modal"
                                class="text-blue-600 hover:underline">Edit</button>
                            <button data-modal-target="delete-product-modal" data-modal-toggle="delete-product-modal"
                                class="text-red-600 hover:underline">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Product Pagination --}}
    <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4" aria-label="Table navigation">
        <span
            class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-4 md:mb-0 block w-full md:inline md:w-auto">Showing
            <span class="font-semibold text-gray-900 dark:text-white">1-10</span> of <span
                class="font-semibold text-gray-900 dark:text-white">30</span></span>
        <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
            <li><a href="#"
                    class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg
                        hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
                        dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
            </li>
            <li><a href="#" aria-current="page"
                    class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">1</a>
            </li>
            <li><a href="#"
                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300
                        hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
                        dark:hover:bg-gray-700 dark:hover:text-white">2</a>
            </li>
            <li><a href="#"
                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300
                        hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
                        dark:hover:bg-gray-700 dark:hover:text-white">3</a>
            </li>
            <li><a href="#"
                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg
                        hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
                        dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
            </li>
        </ul>
    </nav>

    {{-- Content Modal --}}
    @include('pages.product.includes.modal-create')
    @include('pages.product.includes.modal-edit')
    @include('pages.product.includes.modal-delete')

</x-app-layout>
