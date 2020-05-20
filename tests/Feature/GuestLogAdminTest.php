<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GuestLogAdminTest extends TestCase
{
    /** @test */
    function can_view_the_guest_log_dashboard()
    {
        $this->get('/guestlog')->assertStatus('200');
    }

    /** @test */
    function can_view_indivigual_guest_log()
    {
        $this->get('/guestlog/1')->assertStatus('200');
    }
}
