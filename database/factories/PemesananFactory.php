<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Layanan;
use App\Models\Pemesanan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pemesanan>
 */
class PemesananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Pemesanan::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'layanan_id' => Layanan::factory(),
            'nama' => $this->faker->name,
            'no_hp' => $this->faker->phoneNumber,
            'tanggal' => $this->faker->date,
            'waktu' => $this->faker->time,
            'catatan' => $this->faker->sentence,
            'status' => $this->faker->randomElement(['Done', 'Belum']),
        ];
    }
}
