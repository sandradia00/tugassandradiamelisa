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
        Schema::create('tabel_setup_gl_periode', function (Blueprint $table) {
            $table->id();
            $table->integer('id_periode')->nullable;
            $table->date('periode_awal')->nullable;
            $table->date('periode_akhir')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_setup_gl_periode');
    }
};
