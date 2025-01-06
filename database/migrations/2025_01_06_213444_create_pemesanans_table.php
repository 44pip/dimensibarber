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
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->unsignedBigInteger('user_id'); // Foreign Key untuk tabel users
            $table->unsignedBigInteger('layanan_id'); // Foreign Key untuk tabel layanans
            $table->string('nama'); // Nama pemesan
            $table->string('no_hp'); // Nomor telepon pemesan
            $table->date('tanggal'); // Tanggal pemesanan
            $table->time('waktu'); // Waktu pemesanan
            $table->text('catatan')->nullable(); // Catatan tambahan, opsional
            $table->enum('status', ['Done', 'Belum'])->default('Belum'); // Status pemesanan
            $table->timestamps(); // Kolom created_at dan updated_at

            // Definisi Foreign Key
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('layanan_id')->references('id')->on('layanans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanans');
    }
};
