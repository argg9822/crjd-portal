<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactStoreRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
            'phone' => 'nullable|numeric|digits_between:7,10',
            'service_type' => 'nullable|string|max:255',
        ];
    }

    public function messages(): array
    {
        $messages = [
            'name.required' => "Por favor diligencia tu nombre",
            'last_name.required' => "Por favor diligencia tu apellido",
            'email.required' => "Por favor diligencia un correo electrónico",
            'email.email' => "El campo correo electrónico debe ser una dirección de correo válida.",
            'message.required' => "Cuéntanos el motivo por el que nos contactas",
            'message.max' => "El mensaje no puede superar los 1000 caracteres",
            'phone.max' => "El campo teléfono no debe exceder los 10 caracteres.",
            'phone.numeric' => "Ingresa un número de teléfono válido",
            'service_type.max' => "El campo tipo de servicio no debe exceder los 255 caracteres.",
            'service_type.string' => "El tipo de servicio debe ser una cadena de texto.",
        ];

        return $messages;
    }
}
