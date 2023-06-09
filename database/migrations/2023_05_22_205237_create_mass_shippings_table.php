<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMassShippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mass_shippings', function (Blueprint $table) {
            $table->id();
            $table->string('shipper')->nullable();
            $table->string('consignee')->nullable();
            $table->string('notify_party')->nullable();
            $table->string('notify_party_2')->nullable();
            $table->string('delivery_agent')->nullable();
            $table->string('vessel')->nullable();
            $table->string('place_of_recpt')->nullable();
            $table->string('port_of_loading')->nullable();
            $table->string('B_L_no')->nullable();
            $table->string('port_of_discharge')->nullable();
            $table->string('place_of_delivery')->nullable();
            $table->string('numbers')->nullable();
            $table->string('number_of_pkg')->nullable();
            $table->string('desc_of_good')->nullable();
            $table->string('gross_weight')->nullable();
            $table->string('measurments')->nullable();
            $table->string('total_container_or_pkg')->nullable();
            $table->string('temp_cont_isnt')->nullable();
            $table->string('shipped_board_date')->nullable();
            $table->string('no_of_orignal_B_L')->nullable();
            $table->string('payment_term')->nullable();
            $table->string('date_of_issue')->nullable();
            $table->string('place_of_issue')->nullable();
            $table->string('total_amount')->nullable();
            $table->string('signed_carrier')->nullable();
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
        Schema::dropIfExists('mass_shippings');
    }
}
