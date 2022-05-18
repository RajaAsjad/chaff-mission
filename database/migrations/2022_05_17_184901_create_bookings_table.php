<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('customer_id');
            $table->bigInteger('booking_number');
            $table->string('product_slug');
            $table->date('trip_start_date')->nullable();
            $table->string('trip_start_time')->nullable();
            $table->date('trip_end_date')->nullable();
            $table->string('trip_end_time')->nullable();
            $table->float('per_day_price');
            $table->float('total_days');
            $table->float('total_payment');
            $table->string('payment_status')->default('unpaid');
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('bookings');
    }
}
