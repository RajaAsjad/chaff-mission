<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deals', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('created_by');
            $table->string('deal_name')->nullable();
            $table->string('category')->nullable();
            $table->string('deal_product')->nullable();
            $table->string('price')->nullable();
            $table->string('status')->default(1)->comment('0=inactive , 1=active');
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
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
        Schema::dropIfExists('deals');
    }
}
