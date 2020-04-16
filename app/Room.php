<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    /**
     * The fields that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'name', 'short_name', 'capacity', 'category', 'ship_id',
    ];

    public function owners()
    {
        return $this->belongsTo(\App\User::class, 'user_id', 'id');
    }

    public function ships()
    {
        return $this->belongsTo(\App\Fleet::class, 'ship_id', 'id');
    }
}
