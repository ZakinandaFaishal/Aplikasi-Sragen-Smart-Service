<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('aduans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete(); // Pelapor
            $table->foreignId('kategori_id')->constrained('kategoris')->cascadeOnDelete(); // Kategori aduan

            $table->string('judul');
            $table->text('deskripsi');
            $table->string('lokasi');
            $table->string('bukti'); // Path ke file foto/video

            $table->string('status')->default('Menunggu Verifikasi'); 
            $table->text('catatan_admin')->nullable(); // Catatan dari admin (misal: alasan ditolak) [cite: 257]

            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('aduans');
    }
};