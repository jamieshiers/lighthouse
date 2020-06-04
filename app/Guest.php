<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $primaryKey = 'booking_reference';

    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'booking_reference',
        'cabin',
        'berth',
        'first_name',
        'last_name',
        'birthday',
    ];
}
