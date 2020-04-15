<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Model;

class Light extends Model
{
    protected $fillable = [
        'name',
        'status',
        'schelule_id',
    ];
}
