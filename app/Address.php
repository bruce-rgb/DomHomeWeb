<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Model;   //MongoDB Eloquent Model
class Address extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'street',
        'number',
        'city',
        'state',
        'country',
        'PIN',
        'microcontrollers',
    ];

    /**
     * The relationship with User model, each Addres has many users
     *
     * @return void
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function fans()
    {
        return $this->hasMany(Fan::class);
    }

    public function gases()
    {
        return $this->hasMany(Gas::class);
    }

    public function lights()
    {
        return $this->hasMany(Light::class);
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    public function Schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}
