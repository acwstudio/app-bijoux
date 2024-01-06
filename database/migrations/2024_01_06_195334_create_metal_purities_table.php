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
        Schema::create('metal_purities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('precious_metal_id');
            $table->string('value');
            $table->string('slug')->unique();
            $table->boolean('active')->default(true);
            $table->timestamps();

            $table->foreign('precious_metal_id')->references('id')->on('precious_metals')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metal_purities');
    }
};
