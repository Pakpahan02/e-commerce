@extends('components.layouts.front')

@section('content')
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 flex justify-between items-center">
            {{-- logo --}}
            <a href="/" class="text-2xl font-bold text-indigo-600">Nama Toko</a>

            {{-- searchbar --}}
            <div class="hidden md:block w-1/3">
                <input type="text" placeholder="Cari produk..."
                    class="w-full px-4 borber border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div class="flex items-center space-x-4">
                {{-- icon user --}}
                <a href="/login" class="relative text-gray-600 hover:text-indigo-600 p-2 rounded-full hover:bg-gray-100">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                </a>

                {{-- icon keranjang --}}
                <a href="/login" class="relative text-gray-600 hover:text-indigo-600 p-2 rounded-full hover:bg-gray-100">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                        </path>
                    </svg>
                </a>
            </div>
        </div>

        <nav class="bg-gray-100 border-t border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex space-x-8 h-10 items-center">
                    <a href="#" class="text-sm font-medium text-gray-700 hover:text-indigo-600">Pakaian</a>
                    <a href="#" class="text-sm font-medium text-gray-700 hover:text-indigo-600">Furnitur</a>
                    <a href="#" class="text-sm font-medium text-gray-700 hover:text-indigo-600">Hobi</a>
                    <a href="#" class="text-sm font-medium text-gray-700 hover:text-indigo-600">Semua Kategori</a>
                </div>
            </div>
        </nav>
    </header>

    <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        {{-- Hero --}}
        <div class="bg-indigo-700 rounded-lg p-12 mb-10 text-white text-center shadow-lg">
            <h1 class="text-4xl font-extrabold mb-3">Diskon Besar Akhir Tahun!</h1>
            <p class="text-xl mb-6">Dapatkan hingga 50% untuk koleksi pilihan.</p>
            <a href="#"
                class="bg-white text-indigo-700 hover:bg-ingigo-100 font-bold py-3 px-8 rounded-full shadow-lg transition duration-300">Belanja
                Sekarang!</a>
        </div>

        {{-- Promo --}}
        <div class="text-center py-2 mb-8 bg-green-100 text-green-800 rounded-lg">
            Gratis Ongkir ke seluruh Indonesia! (Min. Pembelian Rp.150.000)
        </div>

        {{-- section produk --}}
        <section class="mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-6 border-b pb-2">Produk Unggulan</h2>

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6">
                @for ($i = 1; $i <= 8; $i++)
                    {{-- card product --}}
                    <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition duration-300 overflow-hidden">
                        <img src="" alt="" class="w-full h-48 object-cover">

                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 truncate">Nama Produk</h3>
                            <p class="tex-gray-500 text-sm mb-2">Kategori</p>
                            <p class="text-xl font-bold text-indigo-600 mb-3">Rp100.000</p>
                            <button
                                class="w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition duration-300 text-sm">
                                + Keranjang
                            </button>
                        </div>
                    </div>
                    {{-- card product --}}
                @endfor
            </div>
        </section>

        {{-- section kategori --}}
        <section class="mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-6 border-b pb-2">Telusuri Berdasarkan Kategori</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <a href="#"
                    class="block text-center p-8 bg-white rounded-xl shadow hover:shadow-lg transition duration-300">
                    <p class="text-2xl font-semibold text-gray-700">
                        Pakaian
                    </p>
                </a>
                <a href="#"
                    class="block text-center p-8 bg-white rounded-xl shadow hover:shadow-lg transition duration-300">
                    <p class="text-2xl font-semibold text-gray-700">
                        Furnitur
                    </p>
                </a>
                <a href="#"
                    class="block text-center p-8 bg-white rounded-xl shadow hover:shadow-lg transition duration-300">
                    <p class="text-2xl font-semibold text-gray-700">
                        Hobi
                    </p>
                </a>
            </div>
        </section>
    </main>

    <footer class="bg-gray-800 text-white mt-12">
        <div class="max-w7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div>
                    <h4 class="font-bold mb-3">Nama Toko</h4>
                    <p class="text-sm text-gray-400">Jl. H. Bokir Bin Dji'un (dh. Raya Pd. Gede) No.23-25, Dukuh, Kramat
                        jati,
                        Jakarta Timur, 13550</p>
                </div>
                <div>
                    <h4 class="font-bold mb-3">Bantuan</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="text-gray-300 hover:text-white">FAQ</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Kontak Kami</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Cara Belanja</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-3">Informasi</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="text-gray-300 hover:text-white">Tentang Kami</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Syarat & Ketentuan</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Kebijakan Privasi</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-3">Ikuti Kami</h4>
                    <div class="flex space-x-3">
                        <span class="p-2 bg-gray-400 hover:bg-indigo-600 transition duration-300 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.182 16.318A4.486 4.486 0 0 0 12.016 15a4.486 4.486 0 0 0-3.198 1.318M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Z" />
                            </svg>
                        </span>
                        <span class="p-2 bg-gray-400 hover:bg-indigo-600 transition duration-300 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection
