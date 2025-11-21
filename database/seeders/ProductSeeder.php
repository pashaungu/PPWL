<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'nama' => 'iPhone 15',
            'deskripsi' => 'Latest iPhone with advanced features',
            'harga' => 999.99,
            'stok' => 50,
            'kategori_id' => 1,
        ]);

        Product::create([
            'nama' => 'Samsung Galaxy S24',
            'deskripsi' => 'High-performance Android smartphone',
            'harga' => 899.99,
            'stok' => 40,
            'kategori_id' => 1,
        ]);

        Product::create([
            'nama' => 'MacBook Pro',
            'deskripsi' => 'Powerful laptop for professionals',
            'harga' => 1999.99,
            'stok' => 20,
            'kategori_id' => 1,
        ]);

        Product::create([
            'nama' => 'Nike T-Shirt',
            'deskripsi' => 'Comfortable cotton t-shirt',
            'harga' => 29.99,
            'stok' => 100,
            'kategori_id' => 2,
        ]);

        Product::create([
            'nama' => 'Levi\'s Jeans',
            'deskripsi' => 'Classic denim jeans',
            'harga' => 79.99,
            'stok' => 80,
            'kategori_id' => 2,
        ]);

        Product::create([
            'nama' => 'The Great Gatsby',
            'deskripsi' => 'Classic American novel',
            'harga' => 12.99,
            'stok' => 150,
            'kategori_id' => 3,
        ]);

        Product::create([
            'nama' => 'To Kill a Mockingbird',
            'deskripsi' => 'Award-winning novel by Harper Lee',
            'harga' => 14.99,
            'stok' => 120,
            'kategori_id' => 3,
        ]);

        Product::create([
            'nama' => 'Garden Hose',
            'deskripsi' => 'Durable garden watering hose',
            'harga' => 24.99,
            'stok' => 60,
            'kategori_id' => 4,
        ]);

        Product::create([
            'nama' => 'Basketball',
            'deskripsi' => 'Official size basketball',
            'harga' => 39.99,
            'stok' => 70,
            'kategori_id' => 5,
        ]);

        Product::create([
            'nama' => 'Tennis Racket',
            'deskripsi' => 'Professional tennis racket',
            'harga' => 149.99,
            'stok' => 30,
            'kategori_id' => 5,
        ]);
    }
}
