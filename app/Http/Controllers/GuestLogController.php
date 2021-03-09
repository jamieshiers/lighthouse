<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuestLogSaveRequest;
use App\Models\GuestLog;
use Illuminate\Http\Request;

class GuestLogController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request): \Illuminate\Http\Response
    {
        $guestLogs = GuestLog::all();

        return view('guestlog.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request): \Illuminate\Http\Response
    {
        return view('guestlog.create');
    }

    /**
     * @param \App\Http\Requests\GuestLogSaveRequest $request
     * @return \Illuminate\Http\Response
     */
    public function save(GuestLogSaveRequest $request): \Illuminate\Http\Response
    {
        $guestlog->save();

        return redirect()->route('guestlog.index');
    }
}
