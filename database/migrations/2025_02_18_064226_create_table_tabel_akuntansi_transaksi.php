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
        Schema::create('tabel_akuntansi_transaksi', function (Blueprint $table) {
            $table->id();
            $table->integer('id_transaksi')->nullable;
            $table->string('kode_jurnal')->nullable;
            $table->integer('no_perkiraan')->nullable;
            $table->date('tanggal_transaksi')->nullable;
            $table->string('jenis_transaksi')->nullable;
            $table->string('keterangan_transaksi')->nullable;
            $table->integer('debet')->nullable;
            $table->integer('kredit')->nullable;
            $table->date('tanggal_posting')->nullable;
            $table->string('keterangan_posting')->nullable;
            $table->integer('id_user')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_akuntansi_transaksi');
    }
};
