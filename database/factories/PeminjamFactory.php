<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Peminjam>
 */
class PeminjamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name, 
            'KTP' => $this->faker->unique()->numerify('##########'), 
            'alamat' => $this->faker->address, 
            'umur' => $this->faker->numberBetween(18, 65), 
            'WA' => $this->faker->phoneNumber, 
        ];
    }
}
