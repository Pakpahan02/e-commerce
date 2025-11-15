@extends('components.layouts.front')

@section('content')
    <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-extrabold text-gray-900 mb-8">Katalog Produk</h1>

        {{-- filter Section --}}
        <form
            method="GET"
            action="{{ route('product.index') }}"
            class="bg-white rounded-xl shadow-lg p-6 mb-10"
        >
            <h2 class="text-2xl font-bold text-gray-800 mb-5">Filter Produk</h2>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 items-end">
                {{-- search --}}
                <div class="md:col-span-2">
                    <label for="search" class="block text-sm font-medium text-gray-700 mb-1">Cari Produk</label>
                    <input
                        type="text"
                        name="search"
                        id="search"
                        placeholder="Contoh: Kemeja..."
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 transition duration-150"
                    >
                </div>

                {{-- category --}}
                <div>
                    <label for="catergory" class="block text-sm font-medium text-gray-700 mb-1">Pilih Kategori</label>
                    <select
                        name="category"
                        id="category"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 transition duration-150"
                    >
                        @foreach ($categories as $category)
                            <option value="{{ $category['key'] }}" {{ $currentCategory === $category['key'] ? 'selected' : '' }}>
                                {{ $category['name'] }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- Submit & Reset Button --}}
                <div class="flex justify-end space-x-3">
                    <button
                        type="sumbit"
                        class="w-full md:w-auto bg-indigo-600 text-white hover:bg-indigo-700 py-2 px-4 rounded-lg font-medium transistion duratiion-300 shadow-sm"
                    >
                        Filter
                    </button>
                    <a
                        href="{{ route('product.index') }}"
                        class="w-full md:w-auto bg-gray-200 text-gray-700 hover:bg-gray-300 py-2 px-4 rounded-lg font-medium transistion duratiion-300 shadow-sm text-center"
                    >
                        Reset
                    </a>
                </div>
            </div>
        </form>

        {{-- Product List Section --}}
        <section>
            <h2 class="text-2xl font-bold text-gray-800 mb-5">Daftar Produk</h2>

            @if ($products->isEmpty())
                <div class="text-center p-10 bg-yellow-50 rounded-lg border border-yellow-200">
                    <p class="text-xl font-medium text-yellow-800">
                        Maaf,tidak ada yang ditemukan untuk kriteria ini.
                    </p>
                    <a
                        href="{{ route('product.index') }}"
                        class="mt-4 inline-block text-indigo-600 hover:text-indigo-800 font-medium"
                    >
                        Tampilkan Semua Produk
                    </a>
                </div>
            @else
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
                    @foreach ($products as $product)
                        <div class="bg-white rounded-lg shadow-lg hover:shodw-xl transition duration-300 overflow-hidden">
                            <img
                                src="{{ $product['image'] }}"
                                alt="{{ $product['name'] }}"
                                class="w-full h-48 object-cover"
                            >
                            <div class="p-4">
                                <h3 class="text-lg font-semibold text-gray-800 trucate">
                                    {{ $product['name'] }}
                                </h3>
                                <p class="text-indigo-500 text-sm mb-2 capitalize">
                                    {{ $product['category'] }}
                                </p>
                                <p class="text xl font-bold text-indig600 mb-3">
                                    Rp {{ number_format($product['price'], 0, ',', '.') }}
                                </p>
                                <button
                                    class="w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition duration-300 text-sm"
                                >
                                    + Keranjang
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

            <div class="mt-8">
                {{ $products->links() }}
            </div>
        </section>
    </main>
@endsection