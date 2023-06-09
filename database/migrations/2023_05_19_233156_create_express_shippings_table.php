<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpressShippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('express_shippings', function (Blueprint $table) {
            $table->id();
            $table->string('shipper')->nullable();
            $table->string('consignee')->nullable();
            $table->string('notify_party')->nullable();
            $table->string('notify_party_2')->nullable();
            $table->string('place_of_recpt')->nullable();
            $table->string('port_of_loading')->nullable();
            $table->string('vessel')->nullable();
            $table->string('voy_no')->nullable();
            $table->string('place_of_delivery')->nullable();
            $table->string('item_no')->nullable();
            $table->string('container_no')->nullable();
            $table->string('seal_no')->nullable();
            $table->string('marks')->nullable();
            $table->string('numbers')->nullable();
            $table->string('number_of_pkg')->nullable();
            $table->string('desc_of_good')->nullable();
            $table->string('gross_weight')->nullable();
            $table->string('measurments')->nullable();
            $table->string('total_no_of_pkg')->nullable();
            $table->date('shipped_board_date')->nullable();
            $table->string('place_of_issue')->nullable();
            $table->date('date_of_issue')->nullable();
            $table->string('B_L_no')->nullable();
            $table->string('freight_prepaid')->nullable();
            $table->string('place_of_recpt_2')->nullable();
            $table->string('carrier')->nullable();
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
        Schema::dropIfExists('express_shippings');
    }
}
