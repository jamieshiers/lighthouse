<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class GuestLogComment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'guest_log_id',
        'comment_text',
        'user_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    //protected $touches = ['guestLog'];



    public function guestLog()
    {
        return $this->belongsTo(\App\GuestLog::class, 'log_number', 'guest_log_id');
    }

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
}
