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
        'berth',
        'arrival',
        'departure',
        'offset',
        'clock_change_time',
        'sunrise',
        'sunset',
        'weather_description',
        'weather_temperature',
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
        'weather_temperature' => 'float',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'arrival',
        'departure',
        'clock_change_time',
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
