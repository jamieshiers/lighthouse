<?php

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('can_view_the_guest_log_dashboard', function () {
    auth()->login(factory(User::class)->create());
    $this->get('/guestlog')->assertStatus(200);
});

it('can_view_specfic_guest_log', function () {
    auth()->login(factory(User::class)->create());

    $guestLog = factory(Guestlog::class)->create();
});

