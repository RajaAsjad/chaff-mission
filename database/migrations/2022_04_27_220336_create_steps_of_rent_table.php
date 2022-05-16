<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStepsOfRentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_rents', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('created_by');
            $table->string('slug')->nullable();
            $table->string('heading')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->string('status')->default(1)->comment('0=inactive , 1=active');
            $table->string('deleted_at')->nullable();
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
        Schema::dropIfExists('car_rents');
    }
}
