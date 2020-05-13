<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class cruisePlannerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_is_redirected_if_not_logged_in()
    {
        $this->get('/planning/N012')
            ->assertRedirect('login');
    }

    /** @test */
    public function planner_page_contains_a_livewire_component()
    {
        Auth()->login(factory(User::class)->create());

        $this->get('/planning/n012')
            ->assertSuccessful()
            ->assertSeeLivewire('planning.planner');
    }
}
