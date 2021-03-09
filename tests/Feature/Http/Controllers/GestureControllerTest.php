<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Gesture;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\GestureController
 */
class GestureControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function index_displays_view(): void
    {
        $gestures = Gesture::factory()->count(3)->create();

        $response = $this->get(route('gesture.index'));

        $response->assertOk();
        $response->assertViewIs('gesture.index');
        $response->assertViewHas('gestures');
    }


    /**
     * @test
     */
    public function import_displays_view(): void
    {
        $response = $this->get(route('gesture.import'));

        $response->assertOk();
        $response->assertViewIs('gesture.import');
    }
}
