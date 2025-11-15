<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $dummyProducts = collect([
            // Pakaian (10 item)
            [
                'id' => 1,
                'name' => 'Kemeja Formal Premium',
                'price' => 250000,
                'category' => 'pakaian',
                'image' => 'https://via.placeholder.com/400x300?text=Kemeja+Formal'
            ],
            ['id' => 2, 'name' => 'Celana Jeans Slim Fit', 'price' => 320000, 'category' => 'pakaian', 'image' => 'https://via.placeholder.com/400x300?text=Celana+Jeans'],
            ['id' => 3, 'name' => 'Jaket Bomber Stylish', 'price' => 410000, 'category' => 'pakaian', 'image' => 'https://via.placeholder.com/400x300?text=Jaket+Bomber'],
            ['id' => 4, 'name' => 'Kaos Katun Polos', 'price' => 85000, 'category' => 'pakaian', 'image' => 'https://via.placeholder.com/400x300?text=Kaos+Polos'],
            ['id' => 5, 'name' => 'Sweater Rajut Hangat', 'price' => 290000, 'category' => 'pakaian', 'image' => 'https://via.placeholder.com/400x300?text=Sweater+Rajut'],
            ['id' => 6, 'name' => 'Blazer Wanita Kerja', 'price' => 550000, 'category' => 'pakaian', 'image' => 'https://via.placeholder.com/400x300?text=Blazer+Wanita'],
            ['id' => 7, 'name' => 'Rok Denim Vintage', 'price' => 180000, 'category' => 'pakaian', 'image' => 'https://via.placeholder.com/400x300?text=Rok+Denim'],
            ['id' => 8, 'name' => 'Kemeja Batik Modern', 'price' => 210000, 'category' => 'pakaian', 'image' => 'https://via.placeholder.com/400x300?text=Kemeja+Batik'],
            ['id' => 9, 'name' => 'Topi Baseball Keren', 'price' => 75000, 'category' => 'pakaian', 'image' => 'https://via.placeholder.com/400x300?text=Topi+Baseball'],
            ['id' => 10, 'name' => 'Jumpsuit Kasual', 'price' => 380000, 'category' => 'pakaian', 'image' => 'https://via.placeholder.com/400x300?text=Jumpsuit'],

            // Aksesoris (10 item)
            ['id' => 11, 'name' => 'Kalung Emas Minimalis', 'price' => 450000, 'category' => 'aksesoris', 'image' => 'https://via.placeholder.com/400x300?text=Kalung+Emas'],
            ['id' => 12, 'name' => 'Jam Tangan Kulit', 'price' => 580000, 'category' => 'aksesoris', 'image' => 'https://via.placeholder.com/400x300?text=Jam+Tangan'],
            ['id' => 13, 'name' => 'Gelang Tali Etnik', 'price' => 85000, 'category' => 'aksesoris', 'image' => 'https://via.placeholder.com/400x300?text=Gelang+Tali'],
            ['id' => 14, 'name' => 'Cincin Perak Vintage', 'price' => 190000, 'category' => 'aksesoris', 'image' => 'https://via.placeholder.com/400x300?text=Cincin+Perak'],
            ['id' => 15, 'name' => 'Kacamata Hitam Polarized', 'price' => 145000, 'category' => 'aksesoris', 'image' => 'https://via.placeholder.com/400x300?text=Kacamata+Hitam'],
            ['id' => 16, 'name' => 'Syal Sutra Motif', 'price' => 95000, 'category' => 'aksesoris', 'image' => 'https://via.placeholder.com/400x300?text=Syal+Sutra'],
            ['id' => 17, 'name' => 'Dompet Kulit Pria', 'price' => 220000, 'category' => 'aksesoris', 'image' => 'https://via.placeholder.com/400x300?text=Dompet+Pria'],
            ['id' => 18, 'name' => 'Ikat Pinggang Otomatis', 'price' => 170000, 'category' => 'aksesoris', 'image' => 'https://via.placeholder.com/400x300?text=Ikat+Pinggang'],
            ['id' => 19, 'name' => 'Headband Olahraga', 'price' => 40000, 'category' => 'aksesoris', 'image' => 'https://via.placeholder.com/400x300?text=Headband'],
            ['id' => 20, 'name' => 'Sarung Tangan Musim Dingin', 'price' => 110000, 'category' => 'aksesoris', 'image' => 'https://via.placeholder.com/400x300?text=Sarung+Tangan'],
            
            // Elektronik (10 item)
            ['id' => 21, 'name' => 'Mouse Gaming RGB', 'price' => 120000, 'category' => 'elektronik', 'image' => 'https://via.placeholder.com/400x300?text=Mouse+Gaming'],
            ['id' => 22, 'name' => 'Headphone Noise Cancelling', 'price' => 850000, 'category' => 'elektronik', 'image' => 'https://via.placeholder.com/400x300?text=Headphone'],
            ['id' => 23, 'name' => 'Power Bank 10000mAh', 'price' => 180000, 'category' => 'elektronik', 'image' => 'https://via.placeholder.com/400x300?text=Power+Bank'],
            ['id' => 24, 'name' => 'Smartwatch Canggih', 'price' => 750000, 'category' => 'elektronik', 'image' => 'https://via.placeholder.com/400x300?text=Smartwatch'],
            ['id' => 25, 'name' => 'Keyboard Mekanikal TKL', 'price' => 620000, 'category' => 'elektronik', 'image' => 'https://via.placeholder.com/400x300?text=Keyboard+Mekanikal'],
            ['id' => 26, 'name' => 'Speaker Bluetooth Mini', 'price' => 150000, 'category' => 'elektronik', 'image' => 'https://via.placeholder.com/400x300?text=Speaker+Mini'],
            ['id' => 27, 'name' => 'Charger USB Fast Charging', 'price' => 90000, 'category' => 'elektronik', 'image' => 'https://via.placeholder.com/400x300?text=Charger+USB'],
            ['id' => 28, 'name' => 'Webcam HD 1080p', 'price' => 350000, 'category' => 'elektronik', 'image' => 'https://via.placeholder.com/400x300?text=Webcam+HD'],
            ['id' => 29, 'name' => 'Router Dual Band', 'price' => 450000, 'category' => 'elektronik', 'image' => 'https://via.placeholder.com/400x300?text=Router+Dual+Band'],
            ['id' => 30, 'name' => 'Drone Lipat Pemula', 'price' => 1200000, 'category' => 'elektronik', 'image' => 'https://via.placeholder.com/400x300?text=Drone+Lipat'],
        ]);

        $categories = [
            ['key' => 'all', 'name' => 'Semua Produk'],
            ['key' => 'pakaian', 'name' => 'Pakaian'],
            ['key' => 'aksesoris', 'name' => 'Aksesoris'],
            ['key' => 'elektronik', 'name' => 'Elektronik'],
        ];

        // variable filtering
        $search = $request->input('search', '');
        $category = $request->input('category', 'all');

        // Filtering Logic
        $filteredProducts = $dummyProducts->filter(function ($product) use ($search, $category) {
            // Filter Category
            if ($category !== 'all' && $product['category'] !== $category) {
                return false;
            }

            // Filter search
            if ($search) {
                return str_contains(strtolower($product['name']), strtolower($search));
            }

            return true;
        });

        // Pagination
        $perPage = 10;
        $currentPage = $request->input('page', 1);

        $paginatedProducts = new LengthAwarePaginator(
            $filteredProducts->forPage($currentPage, $perPage),
            $filteredProducts->count(),
            $perPage,
            $currentPage,
            ['path' => $request->url(), 'query' => $request->query()],
        );
        
        return view('front.product', [
            'products' => $paginatedProducts,
            'categories' => $categories,
            'currentSearch' => $search,
            'currentCategory' => $category,
        ]);
    }
}
