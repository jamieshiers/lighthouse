<?php

namespace App\Http\Controllers\guestLog;

use App\GuestLog;
use App\GuestLogComment;
use App\Http\Requests\GuestLogResponseStoreRequest;
use Illuminate\Support\Facades\Auth;

Class guestLogContentController
{
    public function edit(string $log_number)
    {
            return view('guestLog.view',[
                'details' => GuestLog::GetFullGuestLog($log_number)->get(),
            ]);
    }

    public function update(string $log_number, GuestLogResponseStoreRequest $request)
    {
        $comment = GuestLogComment::create([
            'guest_log_id' => $log_number,
            'comment_text' => $request->response,
            'user_id' => Auth::user()->id
        ]);

        return redirect()->route('guestLog.view', $log_number);
    }
}
