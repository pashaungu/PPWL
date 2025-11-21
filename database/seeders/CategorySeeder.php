<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'nama' => 'Electronics',
        ]);

        Category::create([
            'nama' => 'Clothing',
        ]);

        Category::create([
            'nama' => 'Books',
        ]);

        Category::create([
            'nama' => 'Home & Garden',
        ]);

        Category::create([
            'nama' => 'Sports',
        ]);
    }
}
