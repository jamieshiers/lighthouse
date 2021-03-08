<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $gesture_name
 * @property float $gesture_cost
 * @property string $gesture_email
 * @property bool $booking_required
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class Gesture extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'gesture_name',
        'gesture_cost',
        'gesture_email',
        'booking_required',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'gesture_cost' => 'decimal:2',
        'booking_required' => 'boolean',
    ];
}
