<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Model;

class Fan extends Model
{
    //protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'mode',
        'status',
        'temperature',
        'address_id',
    ];
}
