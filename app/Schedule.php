<?php

namespace App;
//MongoDB Eloquent Model
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Schedule extends Eloquent
{
    protected $primaryKey = '_id';
    protected $fillable = [
        'name',
        'schedule_settings',
        'address_id',
    ];
}
