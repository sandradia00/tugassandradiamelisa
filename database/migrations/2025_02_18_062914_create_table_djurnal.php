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
        Schema::create('djurnal', function (Blueprint $table) {
            $table->id();
            $table->string('TransaksiId')->nullable;
            $table->integer('JurnalKode')->nullable;
            $table->integer('NomorPerkiraan')->nullable;
            $table->date('TanggalTransaksi')->nullable;
            $table->string('JenisTransaksi')->nullable;
            $table->string('Keterangan')->nullable;
            $table->integer('Debet')->nullable;
            $table->integer('Kredit')->nullable;
            $table->date('tanggal_posting')->nullable;
            $table->string('keterangan_posting')->nullable;
            $table->integer('sIdUser')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('djurnal');
    }
};
