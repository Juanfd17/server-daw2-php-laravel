<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animales', function (Blueprint $table) {
            $table->id();
            $table->string('especie')->unique();
            $table->string('slug')->unique();
            $table->decimal('peso', 6,1);
            $table->decimal('altura', 6, 1);
            $table->date('fechaNacimiento');
            $table->string('imagen')->nullable();
            $table->string('alimentacion')->nullable();
            $table->longText('descripcion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animales');
    }
};
