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
        Schema::create('exposiciones_cuadros', function (Blueprint $table) {
            $table->unsignedBigInteger('cuadro_id');
            $table->unsignedBigInteger('exposicion_id');
            $table->primary(['cuadro_id', 'exposicion_id']);
            $table->timestamps();

            $table->foreign('cuadro_id')->references('id')->on('cuadros');
            $table->foreign('exposicion_id')->references('id')->on('exposiciones');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exposiciones_cuadros');
    }
};
