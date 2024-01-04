<x-app-layout>

    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 rounded-lg dark:border-gray-700 mt-14">

            <div class="flex items-start justify-between pb-4">
                <div class="flex w-full justify-between">
                    <div id="InputSearch">
                        <label for="search" class="sr-only">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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
                    <button type="button" data-modal-target="tambah-produk-modal"
                        data-modal-toggle="tambah-produk-modal"
                        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>Insert
                    </button>
                </div>
            </div>

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
                                    <a href="{{ $product->id }}" class="text-blue-600 hover:underline">Edit</a>
                                    <a href="{{ $product->id }}" class="text-red-600 hover:underline">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div id="delete-modal" tabindex="-1"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button"
                            class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="delete-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-4 md:p-5 text-center">
                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want
                                to delete this product?</h3>
                            <button data-modal-hide="delete-modal" type="button"
                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                                Yes, I'm sure
                            </button>
                            <button data-modal-hide="delete-modal" type="button"
                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                                cancel</button>
                        </div>
                    </div>
                </div>
            </div>

            <div id="edit-produk-modal" tabindex="-1" aria-hidden="true"
                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div
                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h1 class="text-lg font-semibold text-gray-900 dark:text-white">
                                Edit Produk
                            </h1>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="edit-produk-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form action="product" method="post" class="p-4 md:p-5">
                            @csrf
                            <div class="grid gap-4 mb-4 grid-cols-2">
                                <div class="col-span-2">
                                    <label for="nama_product"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                        Produk</label>
                                    <input type="text" name="nama_product" id="nama_product"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Nama produk" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="kode_product"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode
                                        Produk</label>
                                    <input type="text" name="kode_product" id="kode_product"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="SA10001" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="harga_product"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                                    <input type="text" name="harga_product" id="harga_product"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Nama produk" required="">
                                </div>
                            </div>
                            <button required type="submit"
                                class="w-full text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">Tambahkan</button>
                        </form>
                    </div>
                </div>
            </div>

            <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4"
                aria-label="Table navigation">
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

        </div>

    </div>
</x-app-layout>
