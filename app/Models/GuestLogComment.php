<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $guest_log_id
 * @property string $comment_text
 * @property string $user_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class GuestLogComment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'guest_log_id',
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function guestLog(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\GuestLog::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(\App\Models\User::class);
    }
}
