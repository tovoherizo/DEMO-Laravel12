<?php

namespace App\Http\Requests;
use App\Models\Job;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'salary_min' => 'nullable|numeric|min:0',
            'salary_max' => 'nullable|numeric|min:0',
            'contrat' => 'nullable|string|max:255',
            'date_limit' => 'nullable|date',
            'description' => 'nullable|string',
            'responsability' => 'nullable|string',
            'qualification' => 'nullable|string',
            'detail_entreprise' => 'nullable|string',
            
        ];
    }
}
