<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => ['required','string','max:255'],
            'slug' => ['required','string','max:255','unique:posts,slug'],
            'category' => ['required','string','max:255'],
            'content' => ['required','string'],
        ];
    }

    public function messages() : array
    {
        return [
            'title.required' => 'El campo :attribute es requerido',
            'slug.required' => 'El campo :attribute es requerido',
            'category.required' => 'El campo :attribute es requerido',
            'content.required' => 'El campo :attribute es requerido',
        ];
    }

    public function attributes() : array
    {
        return [
            'title' => 'Título',
           'slug' => 'Slug',
            'category' => 'Categoría',
            'content' => 'Contenido',
        ];
    }
}
