<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customers;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CustomersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_depan' => $this->faker->firstName,
            'nama_belakang' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'nomor_hp' => $this->faker->numerify('08##########'),
            'alamat' => $this->faker->address,
        ];
    }
}
