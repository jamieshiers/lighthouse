<?php

namespace App\Http\Controllers\guestLog;

use App\GuestLog;

class guestLogIndexController
{
    public function __invoke()
    {
        return view('guestLog.index', [
            'logs' => GuestLog::MyOpenGuestLogs()->get(),
            'counts' => GuestLog::DashboardCounts(),
        ]);
    }
}
