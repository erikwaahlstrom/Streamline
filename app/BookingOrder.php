<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingOrder extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'booking_id', 'order_id'
    ];

    public $timestamps = false;
}
