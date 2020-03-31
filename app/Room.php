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
        'name', 'short_name', 'Capacity', 'Category', 'Ship',
    ];

    /**
     * Setting the non-default primary key.
     *
     * @var string
     */
    protected $primaryKey = 'uuid';

    public function owners()
    {
        return $this->belongsTo(\App\User::class, 'user_id', 'id');
    }
}
