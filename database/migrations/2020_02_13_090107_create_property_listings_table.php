<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_listings', function (Blueprint $table) {
            $table->bigIncrements('id');
            //lessor
            $table->string('ld_full_name');
            $table->string('ld_address');
            $table->string('ld_email');
            $table->string('ld_website');
            $table->string('ld_phone_number');
            $table->string('ld_company_name');
            $table->string('ld_tin_number');
            //leesee
            $table->string('le_full_name');
            $table->string('le_address');
            $table->string('le_email');
            $table->string('le_website');
            $table->string('le_phone_number');
            $table->string('le_company_name');
            $table->string('le_tin_number');
            //Representative
            $table->string('ra_full_name');
            $table->string('ra_address');
            $table->string('ra_email');
            $table->string('ra_phone_number');
            $table->string('building_name');
            $table->string('property_type');
            $table->string('building_address');
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
        Schema::dropIfExists('property_listings');
    }
}
