<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void{
        Schema::create('paquetes', function (Blueprint $table) {
            $table->id();
            $table->string('direccionEntrega');
            $table->boolean('entregado');
            $table->string('imagen');
            $table->unsignedBigInteger('transportista_id');
            $table->timestamps();

            $table->foreign('transportista_id')->references('id')->on('transportista');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
