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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->string('supplier_id');
            $table->bigInteger('created_by');
            $table->double('total_price');
            // $table->double('transport_cost');
            $table->double('other_charge');
            $table->dateTime('date');
            // $table->foreignId('payment_id')->constrained();
            $table->double('paid_amount');
            $table->double('due_amount');
            $table->enum('purchase_status', ['Pending', 'Received', 'Complete']);
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
        Schema::dropIfExists('purchases');
    }
};
