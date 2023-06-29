<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class portfolioUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required',
            'sub_title' => 'required',
            'category' => 'required',
            'client' => 'required',
            'description' => 'required',
            'small_image' => 'required|mimes:jpg,png',
            'big_image' => 'required|mimes:jpg,png',
        ];
    }
}
