<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Agent;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\AgentController
 */
class AgentControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $agents = factory(Agent::class, 3)->create();

        $response = $this->get(route('agent.index'));

        $response->assertOk();
        $response->assertViewIs('agent.index');
        $response->assertViewHas('agent');
    }
}
