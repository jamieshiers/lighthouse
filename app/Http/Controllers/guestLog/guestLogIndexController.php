<?php

namespace App\Http\Controllers\guestLog;


use App\GuestLog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class guestLogIndexController
{
 public function __invoke()
 {
    return view('guestLog.index', [
        'logs' => GuestLog::MyOpenGuestLogs()->get(),
    ]);
 }
}
