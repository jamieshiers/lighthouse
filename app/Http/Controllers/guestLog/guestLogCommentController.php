<?php

namespace App\Http\Controllers\guestLog;

use App\Enums\GuestLogStatus;
use App\Fleet;
use App\GuestLog;
use App\GuestLogComment;
use App\Http\Requests\CreateGuestLogStoreRequest;
use App\Http\Requests\GuestLogResponseStoreRequest;
use Illuminate\Support\Facades\Auth;

class guestLogCommentController
{
    public function edit(string $log_number)
    {
        return view('guestLog.view', [
            'details' => GuestLog::GetFullGuestLog($log_number)->get(),
        ]);
    }

    public function create(CreateGuestLogStoreRequest $request)
    {
        $ship_code = Fleet::find(Auth::user()->ship_id)->ship_code;
        $log_number = $ship_code . time();

        $guestLog = GuestLog::create([
            'log_number' => $log_number,
            'user_id' => $request->user_id,
            'booking_reference' => $request->booking_reference,
            'short_description' => $request->short_description,
            'status' => GuestLogStatus::OPEN,
            'guest_emotion' => $request->guest_emotion,
            'opened_by' => Auth::user()->id
        ]);

        $guestLogComment = GuestLogComment::create([
            'guest_log_id' => $log_number,
            'comment_text' => $request->comment_text,
            'user_id' => Auth::user()->id
        ]);
    }

    public function update(string $log_number, GuestLogResponseStoreRequest $request)
    {
        $log = GuestLog::find($log_number);
        $log->touch();

        $comment = GuestLogComment::create([
            'guest_log_id' => $log_number,
            'comment_text' => $request->response,
            'user_id' => Auth::user()->id
        ]);

        return redirect()->route('guestLog.view', $log_number);
    }
}