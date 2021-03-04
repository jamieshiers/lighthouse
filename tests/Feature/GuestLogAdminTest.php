<?php

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('can_view_the_guest_log_dashboard', function () {
    auth()->login(factory(User::class)->create());
    $this->get('/guestlog')->assertStatus(200);
});

it('can_view_specfic_guest_log', function () {
    // Log Our User In
    auth()->login(factory(User::class)->create());

    //Create a guest
    $guest = factory(\App\Guest::class)->create([
        'booking_reference' => 'WRF6654-1',
        'cabin' => 'A212',
        'berth' => '1',
    ]);

    //create the log
    $guestLog = factory(Guestlog::class)->create([
        'log_number' => 'VE20200525-001',
        'booking_reference' => 'WRF6654-1',
        'user_id' => Auth::user()->id,
    ]);

    //create some comments
    $comments = factory(\App\GuestLogComment::class, 3)->create([
        'guest_log_id' => 'VE20200525-001',
        'user_id' => Auth::user()->id,
    ]);
});
