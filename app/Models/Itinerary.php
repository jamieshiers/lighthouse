<?php

namespace App\Models;

use App\Models\DressCode;
use App\Models\Port;
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
        'day_date',
    ];

    public function port()
    {
        return $this->belongsTo(Port::class);
    }

    public function dress()
    {
        return $this->belongsTo(Dresscode::class);
    }

    public function scopeCode($query, $cruise)
    {
        return $query->where('cruise_number', '=', $cruise)->with('dress', 'port');
    }
}
