<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'title' => 'required|unique:projects,title',
            'description' => 'required',
            'thumb' => 'nullable|image',
            'year' => 'required|date_format:Y',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Campo obbligatorio.',
            'title.unique' => 'Il titolo del progetto deve essere unico.',
            'thumb.image' => 'Formato file non valido.',
            'year.date_format' => 'Formato non valido. (YYYY)',
        ];
    }
}
