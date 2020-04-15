<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Model;

class Notification extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'description',
        'hour',
        'viewed',
        'address_id',
    ];
}
