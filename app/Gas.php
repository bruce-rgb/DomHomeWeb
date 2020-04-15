<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Model;

class Gas extends Model
{
    //protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'status',
        'time',
        'address_id',
    ];
}
