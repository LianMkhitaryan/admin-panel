<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UniversityRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'abbreviation' => 'string',
            'address' => 'string',
            'phone' => 'string',
            'email' => 'required|email',
            'website' => 'string',
            'faculties' => 'required|array',
            'specialities' => 'required|array',
        ];
    }
}
