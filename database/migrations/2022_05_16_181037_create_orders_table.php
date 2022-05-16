<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('customer_id');
            $table->bigInteger('order_number');
            $table->float('discount');
            $table->float('grand_total');
            $table->integer('payment_status')->default(0)->comment('0:pending, 1:confirmed,2:rejected');
            $table->integer('order_status')->default(0)->comment('0:pending, 1:process, 2:confirmed, 3:rejected: 4:completed');
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
        Schema::dropIfExists('orders');
    }
}
