<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobUpdateRequest extends FormRequest
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
            'titre' => 'required|string|max:255',
            'category' => 'required|string',
            'location' => 'required|string',
            'salary_min' => 'required|numeric',
            'salary_max' => 'required|numeric',
            'contrat' => 'required|string',
            'date_limit' => 'required|date',
            'description' => 'required|string',
            'responsability' => 'nullable|string',
            'qualification' => 'nullable|string',
            'detail_entreprise' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ];
    }
}
