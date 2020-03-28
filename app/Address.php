<?php

namespace App;
//MongoDB Eloquent Model
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Address extends Eloquent
{
    protected $primaryKey = '_id';
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
