<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParagonLogisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paragon_logistics', function (Blueprint $table) {
            $table->id();
            $table->string('shipper')->nullable();
            $table->string('consignee')->nullable();
            $table->string('notify_party')->nullable();
            $table->string('notify_party_2')->nullable();
            $table->string('pre_carriage_by')->nullable();
            $table->string('place_of_recpt')->nullable();
            $table->string('vessel')->nullable();
            $table->string('voy_no')->nullable();
            $table->string('B_L_no')->nullable();
            $table->string('port_of_loading')->nullable();
            $table->string('port_of_discharge')->nullable();
            $table->string('place_of_delivery')->nullable();
            $table->string('final_destination')->nullable();
            $table->string('container_no')->nullable();
            $table->string('seal_no')->nullable();
            $table->string('marks')->nullable();
            $table->string('numbers')->nullable();
            $table->string('container_or_pkg')->nullable();
            $table->string('gross_weight')->nullable();
            $table->string('measurments')->nullable();
            $table->string('kind_of_pkg')->nullable();
            $table->string('desc_of_good')->nullable();
            $table->string('total_container_or_pkg')->nullable();
            $table->string('merchant_declared_value')->nullable();
            $table->string('freight_charges')->nullable();
            $table->string('revenue_tons')->nullable();
            $table->string('rate')->nullable();
            $table->string('per')->nullable();
            $table->string('prepaid')->nullable();
            $table->string('collect')->nullable();
            $table->string('exchange_rate')->nullable();
            $table->string('prepaid_2')->nullable();
            $table->string('payable_at')->nullable();
            $table->string('total_prepaid_local_currency')->nullable();
            $table->string('no_of_orignal_B_L')->nullable();
            $table->string('place_of_issue')->nullable();
            $table->string('date_of_issue')->nullable();
            $table->string('as_carrier')->nullable();
            $table->string('freight_prepaid')->nullable();
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
        Schema::dropIfExists('paragon_logistics');
    }
}
