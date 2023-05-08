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
        Schema::create('Comanda_has_Serveis', function (Blueprint $table) {
            $table->unsignedBigInteger('idComanda');
            $table->unsignedBigInteger('idEspais');
            $table->unsignedBigInteger('idServeis');
            $table->integer('quantitat')->nullable();
            $table->primary(['idComanda', 'idEspais', 'idServeis']);
            $table->foreign('idServeis')->references('id')->on('Serveis')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idEspais')->references('id')->on('Espais')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idComanda')->references('id')->on('comandas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comanda_has_serveis');
    }
};
