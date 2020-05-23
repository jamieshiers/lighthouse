<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Enums\GuestLogStatus;
use phpDocumentor\Reflection\Types\Integer;
Use Carbon\Carbon;

class GuestLog extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'booking_reference',
        'short_description',
        'status',
        'guest_emotion',
        'opened_by',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];


    public function ScopeMyOpenGuestLogs(Builder $query): void
    {
        $id = Auth::user()->id;

        $query
            ->where('user_id', $id)
            ->where('status', GuestLogStatus::OPEN)
            ->with(['user', 'guest'])
            ->orderBy('created_at');
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
        return $this->hasMany(\App\GuestLogComments::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\User::class, 'user_id');
    }

    public function guest()
    {
        return $this->belongsTo(\App\Guest::class, 'booking_reference', 'booking_reference');
    }


}