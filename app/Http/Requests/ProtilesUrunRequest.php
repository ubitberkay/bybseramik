<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProtilesUrunRequest extends FormRequest
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
            'boyuts' => 'required|array',
            'boyuts.*' => 'exists:boyuts,id', // Validate that each size exists
            'name' => ['required'],
            'slug' => ['required'],
            'description' => ['required'],
            'types' => 'required|array',
            'types.*' => 'exists:types,id',
            'color' => ['required'],
        ];
    }
}
