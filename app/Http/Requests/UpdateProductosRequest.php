<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductosRequest extends FormRequest
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
            'nombre_pro' => 'sometimes|string|max:255', // El nombre del producto es opcional, debe ser una cadena y no debe exceder los 255 caracteres
            'categoria' => 'sometimes|string|max:255', // La categoria es opcional, debe ser una cadena y no debe exceder los 255 caracteres
            'precio' => 'sometimes|numeric', // El precio es opcional y debe ser un número
            'cantidad' => 'sometimes|integer', // La cantidad es opcional y debe ser un entero
        ];
    }
}
