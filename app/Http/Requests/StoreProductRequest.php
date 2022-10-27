<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => 'required|string',
            'description' => 'required|string',

            'category_id' => 'required',

            'photo' => 'required|image|mimes:png,jpg',

            'status' => 'required',

            'slug' => 'required|string|unique:products,slug'
        ];
    }

    public function messages()
    {
        return [
            'category_id.required' => 'The category field is required.'
        ];
    }
}
