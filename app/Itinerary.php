<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itinerary extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cruise_number',
        'day_number',
        'port_id',
        'dress_id',
        'arrival',
        'departure',
        'offset',
        'sunrise',
        'sunset',
        'weather',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'port_id' => 'integer',
        'dress_id' => 'integer',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'arrival',
        'departure',
        'sunrise',
        'sunset',
    ];


    public function port()
    {
        return $this->belongsTo(\App\Port::class);
    }

    public function dress()
    {
        return $this->belongsTo(\App\Dresscode::class);
    }
}
