<?php

namespace App;
//MongoDB Eloquent Model
use Jenssegers\Mongodb\Eloquent\Model as Model;

class Schedule extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'day',
        'start_time',
        'end_time',
        'address_id',
    ];

    /**
     * The relationship with Address model, one or many Schedules belongs to one Address
     *
     * @return void
     */
    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}
