<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name' => 'İçecek', 'slug' => 'beverages', 'image' => 'beverage.png'],
            ['name' => 'Dondurma', 'slug' => 'ice-cream', 'image' => 'ice_cream.png'],
            ['name' => 'Sigara', 'slug' => 'cigarettes', 'image' => 'cigarettes.png'],
            ['name' => 'Yiyecek', 'slug' => 'food', 'image' => 'food.png'],
            ['name' => 'Oyuncak', 'slug' => 'toys', 'image' => 'toys.png'],
        ];

        foreach ($categories as $categoryData) {
            Category::create($categoryData);
        }
    }
}

