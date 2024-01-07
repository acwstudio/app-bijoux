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
        Schema::create('jewellery_precious_metal', function (Blueprint $table) {
            $table->unsignedBigInteger('jewellery_id');
            $table->unsignedBigInteger('precious_metal_id');
            $table->unsignedBigInteger('colour_id');
            $table->unsignedBigInteger('metal_purity_id');
            $table->string('coverage');
            $table->float('weight');
            $table->timestamps();

            $table->foreign('jewellery_id')->references('id')->on('jewelleries')->cascadeOnDelete();
            $table->foreign('precious_metal_id')->references('id')->on('precious_metals')->cascadeOnDelete();
            $table->foreign('colour_id')->references('id')->on('colours')->cascadeOnDelete();
            $table->foreign('metal_purity_id')->references('id')->on('metal_purities')->cascadeOnDelete();

            $table->primary(['jewellery_id','precious_metal_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jewellery_precious_metal');
    }
};
