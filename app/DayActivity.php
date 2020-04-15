<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DayActivity extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'promotion_id',
        'venue_id',
        'start',
        'finish',
        'show_end_time',
        'bandsheet',
        'horizon',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'promotion_id' => 'integer',
        'venue_id' => 'integer',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'start',
        'finish',
    ];


    public function promotion()
    {
        return $this->belongsTo(\App\Promotion::class);
    }

    public function venue()
    {
        return $this->belongsTo(\App\Room::class);
    }
}
