<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PromotionStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:100',
            'subhead' => 'required|string|max:120',
            'content' => 'required|string',
            'image' => 'required|string|max:400',
            'category' => 'required|string|max:400',
        ];
    }
}
