<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePickDropLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pick_drop_locations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('booking_id');
            $table->string('pickup_address');
            $table->string('pickup_state');
            $table->string('pickup_country_name');
            $table->string('drop_address');
            $table->string('drop_state');
            $table->string('drop_country_name');
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
        Schema::dropIfExists('pick_drop_locations');
    }
}
