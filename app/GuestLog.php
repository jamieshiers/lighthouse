<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Enums\GuestLogStatus;
use phpDocumentor\Reflection\Types\Integer;
use Carbon\Carbon;

class GuestLog extends Model
{
    public $incrementing = false;

    protected $primaryKey = 'log_number';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'log_number',
        'user_id',
        'booking_reference',
        'short_description',
        'status',
        'guest_emotion',
        'opened_by',
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    protected $dates = ['created_at', 'updated_at'];

    public function ScopeMyOpenGuestLogs(Builder $query): void
    {
        $id = Auth::user()->id;

        $query
            ->where('user_id', $id)
            ->where('status', GuestLogStatus::OPEN)
            ->with(['user', 'guest'])
            ->orderBy('created_at');
    }

    public function scopeGetFullGuestLog(
        Builder $query,
        string $log_number
    ): void {
        $query
            ->where('log_number', '=', $log_number)
            ->with([
                'guest',
                'user',
                'guestLogComments',
                'guestLogComments.user',
            ])
            ->orderBy('updated_at');
    }

    public function ScopeCountOpenLogs(builder $query): void
    {
        $query->where('status', GuestLogStatus::OPEN);
    }

    public function ScopeLastUpdateOver24Hours(builder $query): void
    {
        $query
            ->where('status', GuestLogStatus::OPEN)
            ->where('updated_at', '<', Carbon::now()->subHours(24))
            ->with('guest')
            ->with('user');
    }

    public function guestLogComments()
    {
        return $this->hasMany(
            \App\GuestLogComment::class,
            'guest_log_id',
            'log_number'
        );
    }

    public function user()
    {
        return $this->belongsTo(\App\User::class, 'user_id');
    }

    public function guest()
    {
        return $this->belongsTo(
            \App\Guest::class,
            'booking_reference',
            'booking_reference'
        );
    }
}
