<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    protected $table = 'bills';
    protected $fillable = [
        'bills_date',
        'water_name',
        'water_upload_photo',
        'water_total_amount',
        'electricity_name',
        'electricity_upload_photo',
        'electricity_total_amount',
        'association_dues_date',
        'association_dues_total_amount',
        'housekeeping_dues_date',
        'housekeeping_dues_total_amount',
        'laundry_dues_date',
        'laundry_dues_total_amount',
        'others_description',
        'others_date',
        'others_total_amount',
    ];
    public $timestamps = true;
}
