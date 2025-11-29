<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        
        {{-- section header --}}
        <div class="flex flex-col md:flex-row justify-between items-center rounded-xl bg-white p-6 shadow-sm border border-gray-100">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">
                    Halo, {{ Auth::user()->name }}
                </h1>
                <p class="mt-1 text-sm text-gray-500">
                    Berikut adalah laporan performa toko hari ini.
                </p>
            </div>

            <div class="mt-4 md:mt-0 flex gap-3">
                <button class="px-4 py-2 bg-white border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50">
                    Unduh Laporan
                </button>

                <button class="px-4 py-2 bg-indigo-600 border border-gray-300 rounded-lg text-sm font-medium text-white hover:bg-indigo-700 shadow-sm">
                    Unduh Laporan
                </button>
            </div>
        </div>

        {{-- section Laporan / Report --}}
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">

            {{-- card Total Pendapatan --}}
            <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Total Pendapatan</p>
                        <p class="text-2xl font-bold text-gray-900 mt-1">Rp 12.500.000</p>
                    </div>
                    <div class="flex h-10 w-10 items-center justify-center rounded-full bg-green-100 text-green-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>

                <div class="mt-4 flex items-center text-sm text-green-600">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 mr-1">
                        <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd" />
                    </svg>
                    <span>+12% dari bulan lalu</span>
                </div>
            </div>

            {{-- card total pesanan --}}
            <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Total Pesanan</p>
                        <p class="text-2xl font-bold text-gray-900 mt-1">1500</p>
                    </div>
                    <div class="flex h-10 w-10 items-center justify-center rounded-full bg-blue-100 text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                    </div>
                </div>

                <div class="mt-4 flex items-center text-sm text-green-600">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 mr-1">
                        <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd" />
                    </svg>
                    <span>+5% dari bulan lalu</span>
                </div>
            </div>

            {{-- card pending --}}
            <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Perlu Dikirim</p>
                        <p class="text-2xl font-bold text-gray-900 mt-1">15</p>
                    </div>
                    <div class="flex h-10 w-10 items-center justify-center rounded-full bg-orange-100 text-orange-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                        </svg>
                    </div>
                </div>

                <div class="mt-4 flex items-center text-sm text-gray-500">
                    <span class="text-orange-500 font-medium mr-1">Penting:</span> Segera proses pesanan ini.
                </div>
            </div>

            {{-- card produk aktif --}}
            <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Produk Aktif</p>
                        <p class="text-2xl font-bold text-gray-900 mt-1">45</p>
                    </div>
                    <div class="flex h-10 w-10 items-center justify-center rounded-full bg-purple-100 text-purple-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.593l6.002-2.002a2.625 2.625 0 00.593-2.607l-2.002-6.002a2.25 2.25 0 00-.592-.857l-9.582-9.582A2.25 2.25 0 009.568 3z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 9a3 3 0 100-6 3 3 0 000 6z" />
                        </svg>
                    </div>
                </div>

                <div class="mt-4 flex items-center text-sm text-gray-500">
                    3 Produk menipis
                </div>
            </div>

        </div>

        {{-- section grafik --}}
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">
            {{-- Grafik Penjualan --}}
            <div class="lg:col-span-2 rounded-xl border border-gray-200 bg-white p-6 shadow-sm">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-lg font-semibold text-gray-900">
                        Analitik Penjualan
                    </h2>
                    <select class="rounded-lg border-gray-200 bg-gray-50 text-sm focus:border-indigo-500 focus:ring-indigo-500">
                        <option>7 Hari Terakhir</option>
                        <option>Bulan Ini</option>
                        <option>Tahun Ini</option>
                    </select>
                </div>

                {{-- placeholder Chart Area --}}
                <div class="relative h-64 w-full rounded-lg bg-gray-50 flex items-center justify-center border border-dashed border-gray-300">
                    <p class="text-gray-400 text-sm">
                        [Area Grafik Penjualan akan dirender di sini]
                    </p>
                </div>
            </div>

            {{-- Pesanan Terbaru (list) --}}
            <div class="rounded-xl border border-gray-200 bg-white p-6 shadow-sm">
                <h2 class="text-lg font-semibold text-gray-900">
                    Pesanan Terbaru
                </h2>
                {{-- list pesanan --}}
                <div class="flow-root">
                    <ul class="my-5 divide-y divide-gray-200">
                        {{-- item 1 --}}
                        <li class="py-4">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <div class="h-8 w-8 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 font-bold text-xs">
                                        EP
                                    </div>
                                </div>
                                <div class="min-w-0 flex-1">
                                    <p class="truncate text-sm font-medium text-gray-900">
                                        Edward Pakpahan
                                    </p>
                                    <p class="truncate text-sx text-gray-500">
                                        Sepatu (x1)
                                    </p>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm font-medium text-gray-900">
                                        Rp 350k
                                    </p>
                                    <p class="text-xs text-orange-500">
                                        Pending
                                    </p>
                                </div>
                            </div>
                        </li>

                        {{-- item 2 --}}
                        <li class="py-4">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <div class="h-8 w-8 rounded-full bg-green-100 flex items-center justify-center text-green-600 font-bold text-xs">
                                        BK
                                    </div>
                                </div>
                                <div class="min-w-0 flex-1">
                                    <p class="truncate text-sm font-medium text-gray-900">
                                        Bajra Kavalerino
                                    </p>
                                    <p class="truncate text-sx text-gray-500">
                                        Kaos (x5)
                                    </p>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm font-medium text-gray-900">
                                        Rp 500k
                                    </p>
                                    <p class="text-xs text-green-500">
                                        Sukses
                                    </p>
                                </div>
                            </div>
                        </li>

                        {{-- item 3 --}}
                        <li class="py-4">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <div class="h-8 w-8 rounded-full bg-pink-100 flex items-center justify-center text-pink-600 font-bold text-xs">
                                        DA
                                    </div>
                                </div>
                                <div class="min-w-0 flex-1">
                                    <p class="truncate text-sm font-medium text-gray-900">
                                        Dina Ayu
                                    </p>
                                    <p class="truncate text-sx text-gray-500">
                                        Tas (x1)
                                    </p>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm font-medium text-gray-900">
                                        Rp 250k
                                    </p>
                                    <p class="text-xs text-green-500">
                                        Sukses
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="mt-6">
                    <a href="#" class="flex items-center justify-center w-full rounded-lg border border-gray-300 bg-white px-4 py-2 text-smfont-medium text-gray-700">
                        Lihat Semua Pesanan
                    </a>
                </div>
            </div>

        </div>

    </div>
</x-layouts.app>
