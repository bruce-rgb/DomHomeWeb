<?php

namespace App;
//MongoDB Eloquent Model
use Jenssegers\Mongodb\Eloquent\Model as Model;

class Address extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'street',
        'number',
        'city',
        'state',
        'country',
        'PIN',
        'microcontrollers',
    ];
}
