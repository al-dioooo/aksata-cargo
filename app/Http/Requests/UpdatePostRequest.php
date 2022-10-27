<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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

            'cover' => 'nullable|image|mimes:png,jpg',

            'status' => 'required',

            'slug' => "required|string|unique:posts,slug,{$this->post->id}"
        ];
    }

    public function messages()
    {
        return [
            'category_id.required' => 'The category field is required.'
        ];
    }
}
