<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RentalInfo extends Model
{
    protected $table = 'rental_infos';
    protected $fillable = [
        //---------Rental's Info----------

        'id_link_rooms',
        //Occupants
        'occupants_name',
        'occupants_contact_number',
        'occupants_email',
        'date_moved_in',
        'date_moved_out',
        'years_of_contract',
        'copy_of_contract',

        //Brokers
        'brokers_name',
        'brokers_contact',
        'brokers_email',
        'brokers_address',
        'brokers_commission',


         //Advance Cash
         'advance_cash_amount',
         'advance_cash_month',
         'advance_cash_date',
         'advance_cash_payable_to',
 
         //Advance Check
         'advance_check_bank_name',
         'advance_check_branch',
         'advance_check_account_number',
         'advance_check_month',
         'advance_check_date',
         'advance_check_payable_to',

          //Deposit Cash
        'deposit_cash_amount',
        'deposit_cash_month',
        'deposit_cash_date',
        'deposit_cash_payable_to',
        

        //Deposit Check
        'deposit_check_bank_name',
        'deposit_check_branch',
        'deposit_check_account_number',
        'deposit_check_month',
        'deposit_check_date',
        'deposit_check_payable_to',
        
        
       
    ];
    public $timestamps = true;
}
