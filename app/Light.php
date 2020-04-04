<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Light extends Eloquent
{
    protected $fillable = [
        'name',
        'status',
        'schelule_id',
    ];
}
