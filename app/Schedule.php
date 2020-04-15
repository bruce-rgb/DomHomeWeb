<?php

namespace App;
//MongoDB Eloquent Model
use Jenssegers\Mongodb\Eloquent\Model as Model;

class Schedule extends Model
{
    //protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'day',
        'start_time',
        'end_time',
        'address_id',
    ];
}
