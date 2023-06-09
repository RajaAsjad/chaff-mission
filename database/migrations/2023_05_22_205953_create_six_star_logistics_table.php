<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSixStarLogisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('six_star_logistics', function (Blueprint $table) {
            $table->id();
            $table->string('shipper')->nullable();
            $table->string('consignee')->nullable();
            $table->string('notify_party')->nullable();
            $table->string('notify_party_2')->nullable();
            $table->string('delivery_agent')->nullable();
            $table->string('pre_carriage_by')->nullable();
            $table->string('place_of_recpt')->nullable();
            $table->string('freight')->nullable();
            $table->string('BL_status')->nullable();
            $table->string('num_of_BL')->nullable();
            $table->string('bill_of_landing_no')->nullable();
            $table->string('vessel')->nullable();
            $table->string('voyage')->nullable();
            $table->string('port_of_loading')->nullable();
            $table->string('port_of_discharge')->nullable();
            $table->string('place_of_delivery')->nullable();
            $table->string('place_of_issue')->nullable();
            $table->string('marks')->nullable();
            $table->string('kind_of_pkg')->nullable();
            $table->string('desc_of_good')->nullable();
            $table->string('gross_weight')->nullable();
            $table->string('measurments')->nullable();
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
        Schema::dropIfExists('six_star_logistics');
    }
}
