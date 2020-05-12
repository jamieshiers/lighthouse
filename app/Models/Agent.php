<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'port_id',
        'name',
        'business_name',
        'primary_contact_number',
        'secondary_contact_number',
        'email',
        'address',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'port_id' => 'integer',
    ];

    public function port()
    {
        return $this->belongsTo(\App\Models\Port::class);
    }
}
