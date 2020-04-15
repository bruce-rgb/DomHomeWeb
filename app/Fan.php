<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Model;

class Fan extends Model
{
    protected $fillable = [
        'name',
        'mode',
        'status',
        'temperature',
        'address_id',
    ];
}
