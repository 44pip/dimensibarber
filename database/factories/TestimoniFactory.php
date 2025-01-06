<?php

namespace Database\Factories;

use App\Models\Testimoni;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimoni>
 */
class TestimoniFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Testimoni::class;

    public function definition()
    {
        return [
            'nama' => $this->faker->name,
            'komentar' => $this->faker->paragraph,
            'waktu_dan_tanggal' => now(),
        ];
    }
}
