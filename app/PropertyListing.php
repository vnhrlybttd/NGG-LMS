<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyListing extends Model
{
    protected $table = 'property_listings';
    protected $fillable = [
        //Lessor's Data
        'ld_full_name',
        'ld_address',
        'ld_email',
        'ld_website',
        'ld_phone_number',
        'ld_company_name',
        'ld_tin_number',
        //Lessee
        'le_full_name',
        'le_address',
        'le_email',
        'le_website',
        'le_phone_number',
        'le_company_name',
        'le_tin_number',
        //Agent
        'ra_full_name',
        'ra_address',
        'ra_email',
        'ra_phone_number',
        //Property 
        'building_name',
        'property_type',
        'building_address'
    ];
    public $timestamps = true;
}
