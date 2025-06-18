<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductosDivisaRequest extends FormRequest
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
            'divisa_id' => 'required|numeric|exists:divisas,id',
            'price' => 'required|numeric',
        ];
    }
    public function messages(): array
    {
        return [
            
            'divisa_id.required' => 'El campo divisa es obligatorio.',
            'divisa_id.numeric' => 'El campo divisa debe ser un valor numérico.',
            'divisa_id.exists' => 'La divisa seleccionada no existe en el sistema.',

            'price.required' => 'El campo precio es obligatorio.',
            'price.numeric' => 'El campo precio debe ser un valor numérico.',
        ];
    }

}
