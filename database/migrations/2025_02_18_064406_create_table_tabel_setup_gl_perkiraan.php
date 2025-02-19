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
        Schema::create('tabel_setup_gl_perkiraan', function (Blueprint $table) {
            $table->id();
            $table->integer('id_setup')->nullable;
            $table->integer('aktiva_lancar')->nullable;
            $table->integer('hutang_lancar')->nullable;
            $table->integer('modal_sendiri')->nullable;
            $table->integer('kas')->nullable;
            $table->integer('shu')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_setup_gl_perkiraan');
    }
};
