<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Produk;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_produk' => $this->faker->word,
            'gambar' => $this->faker->imageUrl(),
            'deskripsi' => $this->faker->sentence,
            'harga' => $this->faker->numberBetween(10000, 100000),
        ];
    }
}
