<?php

namespace Tests\Feature\Http\Controllers;

use App\Promotion;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\PromotionsController
 */
class PromotionsControllerTest extends TestCase
{
    /**
     * @test
     */
    public function index_displays_view()
    {
        $promotions = factory(Promotions::class, 3)->create();

        $response = $this->get(route('promotion.index'));

        $response->assertOk();
        $response->assertViewIs('promtion.index');
        $response->assertViewHas('promotions');
    }

    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\PromotionsController::class,
            'store',
            \App\Http\Requests\PromotionsStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $title = $this->faker->sentence(4);
        $subhead = $this->faker->word;
        $content = $this->faker->paragraphs(3, true);
        $image = $this->faker->word;
        $category = $this->faker->word;

        $response = $this->post(route('promotion.store'), [
            'title' => $title,
            'subhead' => $subhead,
            'content' => $content,
            'image' => $image,
            'category' => $category,
        ]);

        $promotions = Promotion::query()
            ->where('title', $title)
            ->where('subhead', $subhead)
            ->where('content', $content)
            ->where('image', $image)
            ->where('category', $category)
            ->get();
        $this->assertCount(1, $promotions);
        $promotion = $promotions->first();

        $response->assertRedirect(route('promotion.index'));
    }
}
