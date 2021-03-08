<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;

/**
 * @see \App\Http\Controllers\GuestController
 */
class GuestControllerTest extends TestCase
{
    /**
     * @test
     */
    public function index_displays_view(): void
    {
        $response = $this->get(route('guest.index'));

        $response->assertOk();
        $response->assertViewIs('guest.index');
    }
}
