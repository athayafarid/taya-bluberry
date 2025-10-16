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
        Schema::table('pelanggan', function (Blueprint $table) {
            // Memodifikasi kolom 'gender' dengan daftar nilai enum yang baru
            $table->enum('gender', ['Male', 'Female', 'Other', 'Prefer Not to Say'])->change();

            // Catatan: Pastikan nilai-nilai yang sudah ada ('Male', 'Female', 'Other')
            // tetap termasuk dalam daftar enum yang baru, jika tidak, Anda mungkin
            // perlu menangani data yang sudah ada terlebih dahulu.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pelanggan', function (Blueprint $table) {
            // Mengembalikan kolom 'gender' ke daftar nilai enum sebelumnya
            $table->enum('gender', ['Male', 'Female', 'Other'])->change();
        });
    }
};
