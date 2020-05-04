<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;


class loginTest extends TestCase
{

    use RefreshDatabase;

    /** @test */
    public function can_view_login_page()
    {
        $this->get(route('login'))
        ->assertSuccessful();
    }

    /** @test */
    public function redirected_if_logged_in()
    {
        auth()->login(factory(User::class)->create());

        $this->get(route('login'))->assertRedirect(route('home'));
    }

    /** @test */
    public function can_login()
    {
        $user = factory(User::class)->create();

        
    }

}