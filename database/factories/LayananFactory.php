<?php

namespace Database\Factories;

use App\Models\Layanan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Layanan>
 */
class LayananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Layanan::class;

    public function definition()
    {
        return [
            'jenis' => $this->faker->word,
            'deskripsi' => $this->faker->paragraph,
            'harga' => $this->faker->randomFloat(2, 10000, 500000),
        ];
    }
}
