<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required|string',
            'email' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'Nombre es requerido!',
            'email.required' => 'Email es requerido!',
        ];
    }
}
