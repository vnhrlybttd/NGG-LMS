<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientInformation extends Model
{
    protected $table = 'client_information';

    protected $fillable = ['name','detail'];

    public $timestamps = true;
}
