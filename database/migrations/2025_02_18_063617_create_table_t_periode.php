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
        Schema::create('t_periode', function (Blueprint $table) {
            $table->id();
            $table->integer('Periode')->nullable;
            $table->date('Tanggal_Mulai')->nullable;
            $table->date('Tanggal_Selesai')->nullable;
            $table->string('Keterangan')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_periode');
    }
};
