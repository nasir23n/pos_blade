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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained();
            $table->bigInteger('created_by');
            $table->double('total_price');
            // $table->double('transport_cost');
            $table->double('other_charge');
            $table->double('discount_amount')->nullable();
            $table->double('discount_all')->nullable();
            $table->enum('discount_type', ['Fixed', 'Per'])->comment('Per=Percentage');
            $table->date('date');
            // $table->foreignId('payment_id')->constrained();
            $table->double('paid_amount');
            $table->double('due_amount');
            $table->enum('sales_status', ['Pending', 'Received', 'Complete']);
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
        Schema::dropIfExists('sales');
    }
};
