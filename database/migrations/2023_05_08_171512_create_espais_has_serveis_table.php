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
        Schema::create('espais_has_serveis', function (Blueprint $table) {
            $table->unsignedBigInteger('espais_id');
            $table->unsignedBigInteger('serveis_id');
            $table->integer('quantitat')->nullable();
            $table->primary(['espais_id', 'serveis_id']);
            $table->foreign('espais_id')->references('id')->on('espais')->onDelete('cascade');
            $table->foreign('serveis_id')->references('id')->on('serveis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('espais_has_serveis');
    }
};
