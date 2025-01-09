<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = [
            ['name' => 'Canaris', 'image' => 'categories/cat-1.jpg'],
            ['name' => 'Jarres', 'image' => 'categories/cat-2.jpg'],
            ['name' => 'Objets de décoration', 'image' => 'categories/cat-3.jpg'],
            ['name' => 'Vaisselles', 'image' => 'categories/cat-4.jpg'],
            ['name' => 'Ustensiles de cuisine', 'image' => 'categories/cat-5.jpg'],
            ['name' => 'Objets divers', 'image' => 'categories/cat-6.jpg'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
