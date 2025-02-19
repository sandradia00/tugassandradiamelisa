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
        Schema::create('tabel_akuntansi_jurnal_keluar', function (Blueprint $table) {
            $table->id();
            $table->integer('nomor_jurnal')->nullable;
            $table->string('kode_junral')->nullable;
            $table->date('Tanggal_selesai')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_akuntansi_jurnal_keluar');
    }
};
