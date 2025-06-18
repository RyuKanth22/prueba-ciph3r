<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductoRequest extends FormRequest
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
        'description' => 'required|string',
        'price' => 'required|numeric',
        'tax_cost' => 'required|numeric',
        'manufacturing_cost' => 'required|numeric',
        'divisa_id' => 'required|numeric|exists:divisas,id',
    ];
}

public function messages(): array
{
    return [
        'name.required' => 'El campo nombre es obligatorio.',
        'name.string' => 'El campo nombre debe ser una cadena de texto.',
        
        'description.required' => 'El campo descripción es obligatoria.',
        'description.string' => 'El campo descripción debe ser una cadena de texto.',
        
        'price.required' => 'El campo precio es obligatorio.',
        'price.numeric' => 'El campo precio debe ser un número.',
        
        'tax_cost.required' => 'El campo impuesto es obligatorio.',
        'tax_cost.numeric' => 'El campo impuesto debe ser un número.',
        
        'manufacturing_cost.required' => 'El campo costo de fabricación es obligatorio.',
        'manufacturing_cost.numeric' => 'El campo costo de fabricación debe ser un número.',
        
        'divisa_id.required' => 'El campo divisa es obligatoria.',
        'divisa_id.numeric' => 'El campo divisa debe ser un número.',
        'divisa_id.exists' => 'La divisa seleccionada no existe en el sistema.',
    ];
}

}
