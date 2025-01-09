<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $products = [
            ['name' => 'Canaris', 'image' => 'featured/feature-1.jpg'],
            ['name' => 'Jarres', 'image' => 'featured/feature-2.jpg'],
            ['name' => 'Objets de décoration', 'image' => 'featured/feature-3.jpg'],
            ['name' => 'Vaisselles', 'image' => 'featured/feature-4.jpg'],
            ['name' => 'Ustensiles de cuisine', 'image' => 'featured/feature-5.jpg'],
            ['name' => 'Objets de décoration', 'image' => 'featured/feature-6.jpg'],
            ['name' => 'Objets divers', 'image' => 'featured/feature-7.jpg'],
            ['name' => 'Objets divers 2', 'image' => 'featured/feature-8.jpg'],
            ['name' => 'Objets divers 3', 'image' => 'featured/feature-9.jpg'],
        ];

        foreach ($products as $product) {
            Product::create([
                'name' => $product['name'],
                'description' => 'Description de ' . $product['name'],
                'price' => 5000.00,
                'image' => $product['image']
            ]);
        }
    
    }
}
