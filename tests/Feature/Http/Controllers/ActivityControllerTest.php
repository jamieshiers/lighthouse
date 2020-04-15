<?php

namespace Tests\Feature\Http\Controllers;

use App\Activity;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\HttpTestAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ActivityController
 */
class ActivityControllerTest extends TestCase
{
    use HttpTestAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $activities = factory(Activity::class, 3)->create();

        $response = $this->get(route('activity.index'));

        $response->assertOk();
        $response->assertViewIs('activity.index');
        $response->assertViewHas('activity');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('activity.create'));

        $response->assertOk();
        $response->assertViewIs('activity.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ActivityController::class,
            'store',
            \App\Http\Requests\ActivityStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $title = $this->faker->sentence(4);
        $subhead = $this->faker->word;
        $description = $this->faker->text;
        $image = $this->faker->word;
        $category = $this->faker->word;

        $response = $this->post(route('activity.store'), [
            'title' => $title,
            'subhead' => $subhead,
            'description' => $description,
            'image' => $image,
            'category' => $category,
        ]);

        $activities = Activity::query()
            ->where('title', $title)
            ->where('subhead', $subhead)
            ->where('description', $description)
            ->where('image', $image)
            ->where('category', $category)
            ->get();
        $this->assertCount(1, $activities);
        $activity = $activities->first();

        $response->assertRedirect(route('activity.index'));
        $response->assertSessionHas('activity.title', $activity->title);
    }
}
