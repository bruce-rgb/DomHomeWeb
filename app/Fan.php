<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Fan extends Eloquent
{
    protected $fillable = [
        'name',
        'mode',
        'status',
        'temperature',
        'address_id',
    ];
}
