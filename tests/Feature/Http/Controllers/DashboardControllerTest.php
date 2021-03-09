<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;

/**
 * @see \App\Http\Controllers\DashboardController
 */
class DashboardControllerTest extends TestCase
{
    /**
     * @test
     */
    public function index_displays_view(): void
    {
        $response = $this->get(route('dashboard.index'));

        $response->assertOk();
        $response->assertViewIs('dashboard.index');
    }
}
