<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->string('product_slug')->comment('Product Slug');
            $table->string('type')->nullable()->comment('e.g: automatic, manual');
            $table->string('color')->nullable();
            $table->integer('seats')->nullable();
            $table->integer('doors')->nullable();
            $table->integer('mpg')->nullable();
            $table->string('fuel')->nullable();
            $table->integer('rooms')->nullable();
            $table->integer('beds')->nullable();
            $table->integer('bathrooms')->nullable();
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
        Schema::dropIfExists('product_details');
    }
}
