<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_link_rooms');

            $table->date('bills_date');
            //Water Bill
            $table->string('water_name');
            $table->string('water_upload_photo');
            $table->string('water_total_amount');
            //Electricity Bill
            $table->string('electricity_name');
            $table->string('electricity_upload_photo');
            $table->string('electricity_total_amount');
            //Association Dues
            $table->string('association_dues_date');
            $table->string('association_dues_total_amount');
            //Housekeeping
            $table->string('housekeeping_dues_date');
            $table->string('housekeeping_dues_total_amount');
            //Laundry
            $table->string('laundry_dues_date');
            $table->string('laundry_dues_total_amount');
            //Others
            $table->string('others_description');
            $table->string('others_date');
            $table->string('others_total_amount');

            //Others
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
        Schema::dropIfExists('bills');
    }
}
