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
            'author_id' => 'required',

            'title' => 'required|string',
            'subtitle' => 'nullable|string',
            'content' => 'nullable|string',

            'cover' => 'nullable|image|mimes:png,jpg',

            'status' => 'required',

            'slug' => 'required|string',
            'focus_keyword' => 'nullable|string',
            'meta_description' => 'nullable|string'
        ];
    }
}
