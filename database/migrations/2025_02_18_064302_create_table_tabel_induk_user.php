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
        Schema::create('tabel_induk_user', function (Blueprint $table) {
            $table->id();
            $table->string('id_user');
            $table->string('username');
            $table->integer('password');
            $table->string('nama_lengkap');
            $table->string('asal_kantor');
            $table->string('kode_cu');
            $table->string('email');
            $table->string('level_user');
            $table->string('divisi');
            $table->string('publish');
            $table->date('tanggal_daftar');
            $table->date('tanggal_login');
            $table->string('statuslogin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_induk_user');
    }
};
