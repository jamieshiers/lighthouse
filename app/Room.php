<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    /**
     * The fields that are mass assignable
     *
     * @var array
     */

    protected $fillable = [
        'uuid', 'name', 'short_name', 'Capacity'
    ];

    /**
     * Setting the non-default primary key
     *
     * @var string
     */

    protected $primaryKey = 'uuid';
}
