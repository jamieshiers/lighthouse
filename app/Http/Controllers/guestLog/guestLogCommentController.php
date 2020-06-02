<?php

namespace App\Http\Controllers\guestLog;

use App\Enums\GuestLogStatus;
use App\Fleet;
use App\GuestLog;
use App\GuestLogComment;
use App\Http\Requests\CreateGuestLogStoreRequest;
use App\Http\Requests\GuestLogResponseStoreRequest;
use App\Mail\GuestLogCreated;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class guestLogCommentController
{
    public function view(string $log_number)
    {
        return view('guestLog.view', [
            'details' => GuestLog::GetFullGuestLog($log_number)->get(),
        ]);
    }

    public function create()
    {
        // Grab a list of all areas of responsibilty -> linked directly to users

        // Grad a list of all the guests -> Maybe that its best to use livewire here to incorporate search features

        return view('guestLog.create', []);
    }

    public function store(CreateGuestLogStoreRequest $request)
    {
        $ship_code = Fleet::find(Auth::user()->ship_id)->ship_code;
        $log_number = $ship_code . time();

        $user_email = User::find($request->user_id)->email;

        $guestLog = GuestLog::create([
            'log_number' => $log_number,
            'user_id' => $request->user_id,
            'booking_reference' => $request->booking_reference,
            'short_description' => $request->short_description,
            'status' => GuestLogStatus::OPEN,
            'guest_emotion' => $request->guest_emotion,
            'opened_by' => $request->user()->id,
        ]);

        $guestLogComment = GuestLogComment::create([
            'guest_log_id' => $log_number,
            'comment_text' => $request->comment_text,
            'user_id' => $request->user()->id,
        ]);

        mail::to($user_email)->send(new GuestLogCreated());

        flash()->success('Your Guest Log was created successfully');

        return redirect()->route('guestLog.view', $log_number);
    }

    public function closeLog(string $log_number)
    {
        $log = GuestLog::find($log_number);

        $log->status = GuestLogStatus::CLOSED;

        $log->save();

        return redirect()->route('guestLog.index');
    }

    public function update(
        string $log_number,
        GuestLogResponseStoreRequest $request
    ): RedirectResponse {
        $log = GuestLog::find($log_number);
        $log->touch();

        $comment = GuestLogComment::create([
            'guest_log_id' => $log_number,
            'comment_text' => $request->response,
            'user_id' => $request->user()->id,
        ]);

        return redirect()->route('guestLog.view', $log_number);
    }
}
