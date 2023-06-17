<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomestoreRequest extends FormRequest
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
            'name'=> 'required|unique:homes|max:225',
             'title' => 'required',
             'subtitle' => 'required',
              'image' => 'required|mimes:jpg,png',
              'resume'=> 'required|mimes:doc,docx,pdf'
        ];
    }
}
