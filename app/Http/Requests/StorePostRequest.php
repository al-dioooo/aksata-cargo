<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string',
            'subtitle' => 'required|string',
            'content' => 'required|string',

            'category_id' => 'required',

            'cover' => 'required|image|mimes:png,jpg',

            'status' => 'required',

            'slug' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'category_id.required' => 'The category field is required.'
        ];
    }
}
