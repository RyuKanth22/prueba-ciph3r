<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDivisaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'symbol' => 'required|string',
            'exchange_rate' => 'required|numeric'
        ];
    }

    public function messages(): array
{
    return [
        'name.required' => 'El nombre de la divisa es obligatorio.',
        'symbol.required' => 'El símbolo es obligatorio.',
        'exchange_rate.required' => 'La tasa de cambio es obligatoria.',
        'exchange_rate.numeric' => 'La tasa de cambio debe ser un valor numérico.',
    ];
}
}
