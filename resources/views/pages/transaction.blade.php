<x-app-layout>
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 rounded-lg dark:border-gray-700 mt-14">

            <div class="flex items-start justify-between pb-4">
                <div class="flex w-full justify-between">
                    <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                        <span class="sr-only">Action button</span>
                        Action
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownAction" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownActionButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">??</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">??</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">??</a>
                            </li>
                        </ul>
                    </div>
                    <button type="button" data-modal-target="tambah-produk-modal"
                        data-modal-toggle="tambah-produk-modal"
                        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>Print
                    </button>
                </div>
            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="p-4">#</th>
                            <th scope="col" class="px-6 py-3 columns-2 md:columns-1">Nama Produk</th>
                            <th scope="col" class="px-6 py-3">qty</th>
                            <th scope="col" class="px-6 py-3">Harga Produk</th>
                            <th scope="col" class="px-6 py-3">Total</th>
                            <th scope="col" class="px-6 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4"> </td>
                            <td scope="row" class="px-6 py-4 max-w-[15rem] font-medium text-gray-900"> </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <button
                                        class="inline-flex items-center justify-center p-1 me-3 text-sm font-medium h-6 w-6 text-gray-500 bg-white border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                        type="button">
                                        <span class="sr-only">Quantity button</span>
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 18 2">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 1h16" />
                                        </svg>
                                    </button>
                                    <div>
                                        <input type="number" id="first_product"
                                            class="bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="1" required>
                                    </div>
                                    <button
                                        class="inline-flex items-center justify-center h-6 w-6 p-1 ms-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                        type="button">
                                        <span class="sr-only">Quantity button</span>
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 18 18">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M9 1v16M1 9h16" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">Rp. </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">Rp. </td>
                            <td class="px-6 py-4">
                                <button
                                    class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</button>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-12 py-8">

                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <div class="flex justify-end mt-8 p-5 md:py-0">
                <div class="md:w-64 grid grid-cols-2 gap-1">
                    <div>
                        <p class="mb-3 font-semibold text-left text-gray-500 dark:text-gray-200">Total Pembelian</p>
                        <p class="mb-3 font-semibold text-left text-gray-500 dark:text-gray-200">Pembayaran</p>
                        <p class="mb-3 font-semibold text-left text-gray-500 dark:text-gray-200">Kembalian</p>
                    </div>

                    <div>
                        <p class="mb-3 font-semibold text-end text-gray-600 dark:text-gray-50">: Rp. </p>
                        <div class="flex justify-end mb-2"></div>
                        <p class="mb-3 font-semibold text-end text-gray-600 dark:text-gray-50">: Rp. </p>
                        <p class="mb-3 font-semibold text-end text-gray-600 dark:text-gray-50">: Rp. </p>
                    </div>
                    <div class="col-span-2 md:w-64 grid grid-cols-2 gap-1">
                        <button type="button"
                            class="py-2.5 w-26 mb-2 text-sm font-medium text-white focus:outline-none bg-red-700 rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-red-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Reset</button>
                        <button type="button"
                            class="py-2.5 w-26 mb-2 text-sm font-medium text-white focus:outline-none bg-blue-700 rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Simpan</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
