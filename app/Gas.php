<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Gas extends Eloquent
{
    protected $fillable = [
        'name',
        'status',
        'time',
        'address_id',
    ];
}
