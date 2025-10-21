<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductosRequest extends FormRequest
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
            'nombre_pro' => 'required|string|max:255', // El nombre del producto es obligatorio, debe ser una cadena y no debe exceder los 255 caracteres
            'categoria' => 'required|string|max:255', // La categoria es obligatoria, debe ser una cadena y no debe exceder los 255 caracteres
            'precio' => 'required|numeric', // El precio es obligatorio y debe ser un número
            'cantidad' => 'required|integer', // La cantidad es obligatoria y debe ser un entero
        ];
    }
}
