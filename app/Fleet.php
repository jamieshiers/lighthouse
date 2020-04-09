<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fleet extends Model
{
    /**
     * The fields that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fleet',
        'ship_name',
        'ship_code'
    ];

    public function venues()
    {
        return $this->hasMany(App\Room::class);
    }
}
