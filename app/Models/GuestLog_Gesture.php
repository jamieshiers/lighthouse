<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $guest_log_id
 * @property string $gesture_id
 * @property string $gesture_notes
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class GuestLogGesture extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'guest_log_id',
        'gesture_id',
        'gesture_notes',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function guestLog(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(\App\Models\GuestLog::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function gesture(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(\App\Models\Gesture::class);
    }
}
