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
        Schema::create('brand_jewellery', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jewellery_id');
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('employee_id');

            $table->foreign('jewellery_id')->references('id')->on('jewelleries')->cascadeOnDelete();
            $table->foreign('brand_id')->references('id')->on('brands')->cascadeOnDelete();
            $table->foreign('employee_id')->references('id')->on('employees')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brand_jewellery');
    }
};
