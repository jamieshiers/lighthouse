<?php

namespace App;

use App\Room;
use App\User;
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
        'ship_code',
    ];

    public function venues()
    {
        return $this->hasMany(Room::class);
    }

    public function users()
    {
        $this->hasmany(User::class);
    }
}
