<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Guest;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\GuestController
 */
class GuestControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function index_displays_view(): void
    {
        $guests = Guest::factory()->count(3)->create();

        $response = $this->get(route('guest.index'));

        $response->assertOk();
        $response->assertViewIs('guest.index');
    }


    /**
     * @test
     */
    public function import_displays_view(): void
    {
        $response = $this->get(route('guest.import'));

        $response->assertOk();
        $response->assertViewIs('guest.import');
    }
}
