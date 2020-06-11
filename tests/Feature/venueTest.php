<?php

namespace Tests\Feature;

use App\Room;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;
use Livewire\Livewire;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Faker\Generator as Faker;

class venueTest extends TestCase
{

    use WithFaker;

    public function setUp(): void
    {
        parent::setUp();

        $this->artisan('migrate');
        $this->artisan('db:seed');

        $this->app->make(\Spatie\Permission\PermissionRegistrar::class)->registerPermissions();
    }

    /** @test */
    function user_is_redirected_if_not_logged_in()
    {
        $this->get(route('venues.index'))
            ->assertRedirect('login');
    }

    /** @test */
    function  venues_page_contains_a_livewire_component()
    {
        $user = User::get('11');
        Auth::login($user);

        $this->get(route('venues.index'))
            ->assertSuccessful()
            ->assertSeeLivewire('venues-table');
    }

    /** @test */
    function user_without_create_venues_permission_cant_see_the_create_button()
    {
        auth()->login(factory(User::class)->create());

        $this->get(route('venues.index'))
            ->assertDontSee('Add Venue')
            ->assertSuccessful();
    }

    /** @test */
    function user_with_create_venues_permission_can_see_the_create_button()
    {
        auth()->login(factory(User::class)->create());

        Auth::user()->givePermissionTo('Create Venues');

        $this->get(route('venues.index'))
            ->assertSee('Add Venue')
            ->assertSuccessful();
    }

    /** @test */
    function user_without_edit_venues_permission_cant_see_the_edit_button()
    {
        auth()->login(factory(User::class)->create());

        Room::create([
            'user_id' => Auth::user()->id,
            'name' => $this->faker->name,
            'short_name' => $this->faker->name,
            'capacity' => $this->faker->numberBetween($min = 0, $max = 850),
            'category' => $this->faker->name,
            'ship_id' => $this->faker->numberBetween($min = 1, $max = 10),
        ]);

        $this->get(route('venues.index'))
            ->assertDontSee('Edit')
            ->assertSuccessful();
    }

    /** @test */
    function user_with_edit_venues_permission_can_see_the_edit_button()
    {
        auth()->login(factory(User::class)->create());

        Room::create([
            'user_id' => Auth::user()->id,
            'name' => $this->faker->name,
            'short_name' => $this->faker->name,
            'capacity' => $this->faker->numberBetween($min = 0, $max = 850),
            'category' => $this->faker->name,
            'ship_id' => Auth::user()->ship_id,
        ]);

        Auth::user()->givePermissionTo('Edit Venues');

        $this->get(route('venues.index'))
            ->assertSee('Edit')
            ->assertSuccessful();
    }

    /** @test */
    function ship_user_can_only_see_venues_on_there_ship()
    {
        auth()->login(factory(User::class)->create());

        Room::create([
            'user_id' => Auth::user()->id,
            'name' => 'Test Venue (Deck 6) Forward',
            'short_name' => $this->faker->name,
            'capacity' => $this->faker->numberBetween($min = 0, $max = 850),
            'category' => $this->faker->name,
            'ship_id' => Auth::user()->ship_id,
        ]);

        Room::create([
            'user_id' => Auth::user()->id,
            'name' => 'Test Venue (Deck 7) Forward',
            'short_name' => $this->faker->name,
            'capacity' => $this->faker->numberBetween($min = 0, $max = 850),
            'category' => $this->faker->name,
            'ship_id' => '22',
        ]);

        $this->get(route('venues.index'))
            ->assertSee('Test Venue (Deck 6) Forward')
            ->assertDontSee('Test Venue (Deck 7) Forward')
            ->assertSuccessful();
    }
}
