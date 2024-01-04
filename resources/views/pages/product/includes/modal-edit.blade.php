 <div id="edit-product-modal" tabindex="-1" aria-hidden="true"
     class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
     <div class="relative p-4 w-full max-w-md max-h-full">
         <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
             <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                 <h1 class="text-lg font-semibold text-gray-900 dark:text-white">
                     Edit Produk
                 </h1>
                 <button type="button"
                     class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                     data-modal-hide="edit-product-modal">
                     <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 14 14">
                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                     </svg>
                     <span class="sr-only">Close modal</span>
                 </button>
             </div>
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
