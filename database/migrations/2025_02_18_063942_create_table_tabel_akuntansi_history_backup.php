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
        Schema::create('tabel_akuntansi_history_backup', function (Blueprint $table) {
            $table->id();
            $table->integer('Id_backup')->nullable;
            $table->string('Nama_file')->nullable;
            $table->date('Tanggal_backup')->nullable;
            $table->string('Id_User')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_akuntansi_history_backup');
    }
};
