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
        Schema::create('perkiraan', function (Blueprint $table) {
            $table->id();
            $table->integer('PerkiraanID')->nullable;
            $table->integer('NomorPerkiraan')->nullable;
            $table->string('NamaPerkiraan')->nullable;
            $table->string('Tipe')->nullable;
            $table->integer('Induk')->nullable;
            $table->integer('Level')->nullable;
            $table->string('Kelompok')->nullable;
            $table->string('Normal')->nullable;
            $table->integer('awaldebet')->nullable;
            $table->integer('awalkredit')->nullable;
            $table->integer('mutdebet')->nullable;
            $table->integer('mutkredit')->nullable;
            $table->integer('sisadebet')->nullable;
            $table->integer('sisakredit')->nullable;
            $table->integer('rldebet')->nullable;
            $table->integer('rlkredit')->nullable;
            $table->integer('nrcdebet')->nullable;
            $table->integer('nrckredit')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perkiraan');
    }
};
