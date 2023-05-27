<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VacancyRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'string',
            'description' => 'string',
            'requirements' => 'string',
            'salary' => 'numeric|min:0|max:999999.99',
            'contact_info' => 'string',
            'employer_id' => 'required|numeric',
        ];
    }
}
