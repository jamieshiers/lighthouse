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

    public static function search($query)
    {
        return empty($query) ? static::query()
            : static::where('short_name', 'like', '%' . $query . '%')
                ->orWhere('fleets.ship_name', 'like', '%' . $query . '%');
    }

    public function owners()
    {
        return $this->belongsTo(\App\User::class, 'user_id', 'id');
    }

    public function ships()
    {
        return $this->belongsTo(\App\Fleet::class, 'ship_id', 'id');
    }
}
