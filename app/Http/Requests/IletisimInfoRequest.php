<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IletisimInfoRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'map_code' => ['required'],
            'address' => ['required'],
            'phone_number' => ['required'],
            'mail' => ['required'],
        ];
    }
}
