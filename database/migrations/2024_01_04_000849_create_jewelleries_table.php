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
        Schema::create('jewelleries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('catalog_id');
            $table->unsignedBigInteger('employee_id');
            $table->string('vendor_code');
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description');
            $table->float('weight');
            $table->unsignedDouble('price');
            $table->boolean('active');
            $table->timestamps();

            $table->foreign('catalog_id')->references('id')->on('catalogs')->cascadeOnDelete();
            $table->foreign('employee_id')->references('id')->on('employees')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jewelleries');
    }
};
