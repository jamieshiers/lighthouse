<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuestLogSaveRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'log_number' => ['required', 'string', 'max:100'],
            'user_id' => ['required', 'integer'],
            'booking_reference' => ['required', 'string', 'max:8'],
            'short_description' => ['required', 'string'],
            'status' => ['required', 'in:open,closed'],
            'guest_emotion' => ['required', 'integer'],
            'opened_by' => ['required', 'integer'],
        ];
    }
}
