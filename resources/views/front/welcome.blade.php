@extends('components.layouts.front')

@section('content')
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
@endsection
