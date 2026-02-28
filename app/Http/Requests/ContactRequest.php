<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'nume' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'telefon' => ['nullable', 'string', 'max:50'],
            'servicii' => ['nullable', 'string', 'max:255'],
            'mesaj' => ['required', 'string'],
        ];
    }
}
