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
        Schema::create('jewellery_metal', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jewellery_id');
            $table->unsignedBigInteger('metal_id');
            $table->unsignedBigInteger('colour_id');
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('metal_purity_id');
            $table->float('weight');

            $table->foreign('jewellery_id')->references('id')->on('jewelleries')->cascadeOnDelete();
            $table->foreign('metal_id')->references('id')->on('metals')->cascadeOnDelete();
            $table->foreign('colour_id')->references('id')->on('colours')->cascadeOnDelete();
            $table->foreign('employee_id')->references('id')->on('employees')->cascadeOnDelete();
            $table->foreign('metal_purity_id')->references('id')->on('metal_purities')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jewellery_metal');
    }
};
