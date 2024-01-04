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
        Schema::create('gemstone_jewellery', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jewellery_id');
            $table->unsignedBigInteger('gemstone_id');
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('colour_id');
            $table->unsignedBigInteger('facet_id');
            $table->string('dimensions')->nullable();
            $table->integer('quantity')->nullable();
            $table->float('weight')->nullable();

            $table->foreign('jewellery_id')->references('id')->on('jewelleries')->onDelete('cascade');
            $table->foreign('gemstone_id')->references('id')->on('gemstones')->onDelete('cascade');
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
            $table->foreign('colour_id')->references('id')->on('colours')->onDelete('cascade');
            $table->foreign('facet_id')->references('id')->on('facets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gemstone_jewellery');
    }
};
