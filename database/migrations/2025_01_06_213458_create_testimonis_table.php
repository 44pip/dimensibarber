<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('testimonis', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('nama'); // Nama pemberi testimoni
            $table->text('komentar'); // Komentar atau isi testimoni
            $table->timestamp('waktu_dan_tanggal')->useCurrent(); // default mengambil waktu saat ini untuk testimoni
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonis');
    }
};
