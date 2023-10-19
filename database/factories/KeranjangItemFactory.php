<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\KeranjangItem;
use App\Models\Produk;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class KeranjangItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'keranjang_id' => \App\Models\Keranjang::factory(),
            'produk_id' => \App\Models\Produk::factory(),
            'jumlah' => $this->faker->numberBetween(1, 5),
        ];
    }
}
