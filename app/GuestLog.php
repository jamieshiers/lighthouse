<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuestLog extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'booking_reference',
        'short_description',
        'status',
        'guest_emotion',
        'opened_by',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];


    public function guestLogComments()
    {
        return $this->hasMany(\App\GuestLogComments::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

    public function guest()
    {
        return $this->belongsTo(\App\Guest::class);
    }
}
