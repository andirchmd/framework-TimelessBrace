<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produk;
use App\Models\Customers;
use App\Models\Keranjang;
use App\Models\KeranjangItem;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Customers::factory(10)->create();
        Produk::factory(10)->create();
        Keranjang::factory(10)->create();
        KeranjangItem::factory(10)->create();
    }
}
