<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Model;

class Light extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'status',
        'address_id',
    ];

    /**
     * The relationship with Address model, one or many Lights belongs to one Address
     *
     * @return void
     */
    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}
