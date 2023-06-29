<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutUpdateRequest extends FormRequest
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
            // 'name' => 'required',
            // 'profile' => 'required',
            // 'email' => 'required|email|unique:abouts',
            // 'phone' => 'required|numeric',
            // 'phone' => 'min:8|max:11',
            // 'description' => 'required|string',
            // 'image' => 'required|mimes:jpg,png',
        ];
    }
}
