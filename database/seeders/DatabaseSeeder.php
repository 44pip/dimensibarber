<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Layanan;
use App\Models\Pemesanan;
use App\Models\Testimoni;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat satu pengguna default
        $defaultUser = User::create([
            'name' => 'Afif Musyaffa',
            'email' => 'musyaffa23ti@mahasiswa.pcr.ac.id',
            'password' => bcrypt('password123'), // Password default
        ]);

        // Buat 5 layanan
        $layanans = Layanan::factory()->count(5)->create();

        // Hubungkan pengguna default dengan 3 pemesanan layanan (1 to Many)
        Pemesanan::factory()->count(3)->create([
            'user_id' => $defaultUser->id,
            'layanan_id' => $layanans->random()->id,
        ]);

        // Buat 4 pengguna tambahan dengan beberapa pemesanan
        User::factory()->count(4)->create()->each(function ($user) use ($layanans) {
            // Setiap user memesan 2-4 layanan secara random
            Pemesanan::factory()->count(rand(2, 4))->create([
                'user_id' => $user->id,
                'layanan_id' => $layanans->random()->id,
            ]);
        });

        // Buat 10 testimoni
        Testimoni::factory()->count(10)->create();
    }
}
