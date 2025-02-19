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
    Schema::create('tabel_akuntansi_master', function (Blueprint $table) {
        $table->id();
        $table->string('id_perkiraan')->nullable();
        $table->unsignedInteger('no_perkiraan')->nullable();
        $table->string('nama_perkiraan')->nullable();
        $table->string('tipe')->nullable();
        $table->unsignedInteger('induk')->nullable();
        $table->unsignedInteger('level')->nullable();
        $table->string('kelompok')->nullable();
        $table->string('normal')->nullable();
        $table->decimal('awal_debet', 15, 2)->nullable();
        $table->decimal('awal_kredit', 15, 2)->nullable();
        $table->decimal('mut_debet', 15, 2)->nullable();
        $table->decimal('mut_kredit', 15, 2)->nullable();
        $table->decimal('sisa_debet', 15, 2)->nullable();
        $table->decimal('sisa_kredit', 15, 2)->nullable();
        $table->decimal('rl_debet', 15, 2)->nullable();
        $table->decimal('rl_kredit', 15, 2)->nullable();
        $table->decimal('nrc_debet', 15, 2)->nullable();
        $table->decimal('nrc_kredit', 15, 2)->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_akuntansi_master');
    }
};
