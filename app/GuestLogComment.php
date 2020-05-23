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
        'GuestLog_id',
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


    public function guestLog()
    {
        return $this->belongsTo(\App\GuestLog::class);
    }
}
