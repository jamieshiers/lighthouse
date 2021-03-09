<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\GuestLog;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\GuestLogController
 */
class GuestLogControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view(): void
    {
        $guestLogs = GuestLog::factory()->count(3)->create();

        $response = $this->get(route('guest-log.index'));

        $response->assertOk();
        $response->assertViewIs('guestlog.index');
    }

    /**
     * @test
     */
    public function create_displays_view(): void
    {
        $response = $this->get(route('guest-log.create'));

        $response->assertOk();
        $response->assertViewIs('guestlog.create');
    }

    /**
     * @test
     */
    public function save_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\GuestLogController::class,
            'save',
            \App\Http\Requests\GuestLogSaveRequest::class
        );
    }

    /**
     * @test
     */
    public function save_saves_and_redirects(): void
    {
        $log_number = $this->faker->word;
        $user_id = $this->faker->numberBetween(-10000, 10000);
        $booking_reference = $this->faker->word;
        $short_description = $this->faker->text;
        $status = $this->faker->randomElement(/** enum_attributes **/);
        $guest_emotion = $this->faker->numberBetween(-10000, 10000);
        $opened_by = $this->faker->numberBetween(-10000, 10000);

        $response = $this->get(route('guest-log.save'), [
            'log_number' => $log_number,
            'user_id' => $user_id,
            'booking_reference' => $booking_reference,
            'short_description' => $short_description,
            'status' => $status,
            'guest_emotion' => $guest_emotion,
            'opened_by' => $opened_by,
        ]);

        $guestLogs = Guestlog::query()
            ->where('log_number', $log_number)
            ->where('user_id', $user_id)
            ->where('booking_reference', $booking_reference)
            ->where('short_description', $short_description)
            ->where('status', $status)
            ->where('guest_emotion', $guest_emotion)
            ->where('opened_by', $opened_by)
            ->get();
        $this->assertCount(1, $guestLogs);
        $guestLog = $guestLogs->first();

        $response->assertRedirect(route('guestlog.index'));
    }
}
