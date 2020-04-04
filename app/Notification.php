<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Notification extends Eloquent
{
    protected $fillable = [
        'name',
        'description',
        'hour',
        'viewed',
        'address_id',
    ];
}
