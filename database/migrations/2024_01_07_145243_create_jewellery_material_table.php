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
        Schema::create('jewellery_material', function (Blueprint $table) {
//            $table->id();
            $table->unsignedBigInteger('jewellery_id');
            $table->unsignedBigInteger('material_id');
            $table->unsignedBigInteger('colour_id');
            $table->timestamps();

            $table->foreign('jewellery_id')->references('id')->on('jewelleries')->cascadeOnDelete();
            $table->foreign('material_id')->references('id')->on('materials')->cascadeOnDelete();
            $table->foreign('colour_id')->references('id')->on('colours')->cascadeOnDelete();

            $table->primary(['jewellery_id','material_id']);
//            $table->index(['jewellery_id','material_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jewellery_material');
    }
};
