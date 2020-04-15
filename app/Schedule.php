<?php

namespace App;
//MongoDB Eloquent Model
use Jenssegers\Mongodb\Eloquent\Model as Model;

class Schedule extends Model
{
    protected $primaryKey = '_id';
    protected $fillable = [
        'name',
        'schedule_settings',
        'address_id',
    ];
}
