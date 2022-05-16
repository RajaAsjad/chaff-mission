<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('created_by');
            $table->string('slug')->nullable();
            $table->string('heading')->nullable();
            $table->string('image')->nullable();
            $table->string('description')->nullable();
            $table->string('room')->nullable();
            $table->string('bed')->nullable();
            $table->string('bathroom')->nullable();
            $table->string('price')->nullable();
            $table->bigInteger('rating')->nullable();
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
        Schema::dropIfExists('properties');
    }
}
