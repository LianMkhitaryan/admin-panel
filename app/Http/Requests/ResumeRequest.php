<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResumeRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'experience' => 'string',
            'skills' => 'string',
            'education' => 'string',
            'courses' => 'string',
            'graduate_id' => 'required|numeric',
        ];
    }
}
