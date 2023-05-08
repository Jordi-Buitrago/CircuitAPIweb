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
        Schema::create('espais', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable();
            $table->longText('descripció')->nullable();
            $table->float('capacitat')->nullable();
            $table->float('preu')->nullable();
            $table->unsignedBigInteger('Serveis_idServeis');
            $table->foreign('Serveis_idServeis')->references('id')->on('Serveis')->onDelete('no action')->onUpdate('no action');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('espais');
    }
};
