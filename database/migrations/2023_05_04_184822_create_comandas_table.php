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
        Schema::create('comandas', function (Blueprint $table) {
            $table->id();
            $table->string('lletra_espai')->nullable();
            $table->string('Nom')->nullable();
            $table->string('cognom')->nullable();
            $table->string('email')->nullable();
            $table->integer('telèfon')->nullable();
            $table->integer('num_atendents')->nullable();
            $table->unsignedBigInteger('Espais_idEspais');
            $table->date('data_entrada')->nullable();
            $table->date('data_sortida')->nullable();
            $table->string('estat')->nullable();
            $table->foreign('Espais_idEspais')->references('id')->on('Espais')->onDelete('no action')->onUpdate('no action');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comandas');
    }
};
