<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void{
        Schema::create('gastos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('idGrupo');
            $table->foreign('idGrupo')->references('id')->on('grupos')->onDelete('cascade');

            $table->unsignedBigInteger('idUsuario');
            $table->foreign('idUsuario')->references('id')->on('usuarios')->onDelete('cascade');

            $table->string('nombre')->nullable();
            $table->string('descripcion');

            $table->float('cantidad');
            $table->string('categoria');
            $table->string('divisa');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void{
        Schema::dropIfExists('gastos');
    }
};
