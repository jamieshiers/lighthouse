<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Livewire\Livewire;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class venueTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        $this->artisan('db:seed');

        $this->app->make(\Spatie\Permission\PermissionRegistrar::class)->registerPermissions();
    }

    /** @test */
    public function user_is_redirected_if_not_logged_in()
    {
        $this->get(route('venues.index'))
            ->assertRedirect('login');
    }

    /** @test */
    public function venues_page_contains_a_livewire_component()
    {
        auth()->login(factory(User::class)->create());

        $this->get(route('venues.index'))
            ->assertSuccessful()
            ->assertSeeLivewire('venues-table');
    }

    /** @test */
    public function user_cant_see_the_create_button()
    {
        auth()->login(factory(User::class)->create());

        $this->get(route('venues.index'))
            ->assertDontSee('Add Venue')
            ->assertSuccessful();
    }
}
