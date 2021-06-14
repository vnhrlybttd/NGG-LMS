<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    protected $table = 'rooms';

    protected $fillable = ['room_name','id_link_property_listing'];

    public $timestamps = true;
}
