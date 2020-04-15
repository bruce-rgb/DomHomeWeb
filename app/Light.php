<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Model;

class Light extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'status',
        'schelule_id',
    ];
}
