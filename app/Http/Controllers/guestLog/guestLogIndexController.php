<?php

namespace App\Http\Controllers\guestLog;

use App\GuestLog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class guestLogIndexController
{
    public function __invoke()
    {
        $logs = GuestLog::MyOpenGuestLogs()->get();

        return view('guestLog.index', [
            'logs' => $logs,
            'openLogs' => $logs->count(),
        ]);
    }
}
