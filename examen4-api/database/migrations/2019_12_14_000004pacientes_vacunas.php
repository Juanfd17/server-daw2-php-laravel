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
        Schema::create('pacientes_vacunas', function (Blueprint $table) {
            $table->unsignedBigInteger('paciente_id');
            $table->unsignedBigInteger('vacuna_id');
            $table->primary(['paciente_id', 'vacuna_id']);
            $table->timestamps();

            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->foreign('vacuna_id')->references('id')->on('vacunas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void{
        Schema::dropIfExists('pacientes_vacunas');
    }
};
