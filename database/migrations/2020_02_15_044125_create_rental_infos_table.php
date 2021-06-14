<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentalInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rental_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_link_rooms');
            //Occupants
            $table->string('occupants_name')->nullable();
            $table->string('occupants_contact_number')->nullable();
            $table->string('occupants_email')->nullable();
            $table->date('date_moved_in')->nullable();
            $table->date('date_moved_out')->nullable();
            $table->string('years_of_contract')->nullable();
            $table->string('copy_of_contract')->nullable();
            
            //Brokers
            $table->string('brokers_name')->nullable();
            $table->string('brokers_contact')->nullable();
            $table->string('brokers_email')->nullable();
            $table->string('brokers_address')->nullable();
            $table->string('brokers_commission')->nullable();

            //Advance Cash
             $table->string('advance_cash_amount')->nullable();
             $table->string('advance_cash_month')->nullable();
             $table->date('advance_cash_date')->nullable();
             $table->string('advance_cash_payable_to')->nullable();

            //Advance Check

            $table->string('advance_check_bank_name')->nullable();
            $table->string('advance_check_branch')->nullable();
            $table->string('advance_check_account_number')->nullable();
            $table->string('advance_check_month')->nullable();
            $table->date('advance_check_date')->nullable();
            $table->string('advance_check_payable_to')->nullable();

            //Deposit Cash

            $table->string('deposit_cash_amount')->nullable();
            $table->string('deposit_cash_month')->nullable();
            $table->date('deposit_cash_date')->nullable();
            $table->string('deposit_cash_payable_to')->nullable();

            //Deposit Check

            $table->string('deposit_check_bank_name')->nullable();
            $table->string('deposit_check_branch')->nullable();
            $table->string('deposit_check_account_number')->nullable();
            $table->string('deposit_check_month')->nullable();
            $table->date('deposit_check_date')->nullable();
            $table->string('deposit_check_payable_to')->nullable();
            
            


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
        Schema::dropIfExists('rental_infos');
    }
}
