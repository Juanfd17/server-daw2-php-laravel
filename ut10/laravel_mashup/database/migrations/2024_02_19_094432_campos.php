<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void{
        Schema::create('campos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->string('equipo');
            $table->string('ciudad');
            $table->double('latitud');
            $table->double('longitud');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void{
        Schema::dropIfExists('campos');

    }
};
