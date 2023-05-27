<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GraduateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'full_name' => 'required|string',
            'date' => 'required|date',
            'speciality' => 'string',
            'address' => 'string',
            'phone' => 'string',
            'email' => 'required|email',
        ];
    }
}
