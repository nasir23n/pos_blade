<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('alert_qty');
            $table->bigInteger('opening_qty')->nullable();
            $table->string('referrance_no')->nullable();
            $table->integer('warranty_days')->nullable();
            $table->integer('guarantee_days')->nullable();
            $table->bigInteger('discount')->nullable();
            $table->enum('discount_type', ['Fixed', 'Percentage'])->nullable();
            $table->string('sku')->nullable();
            $table->string('image')->nullable();
            $table->foreignId('category_id')->nullable()->constrained();
            $table->foreignId('brand_id')->nullable()->constrained();
            $table->bigInteger('created_by');
            $table->foreignId('unit_id')->nullable()->constrained();
            // $table->bigInteger('variation_id');
            // $table->string('colors');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
