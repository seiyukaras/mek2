<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservaStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'     => 'required',
            'email'    => 'required|email',
            'phone'    => 'required',
            'dia'      => 'required',
            'hora'     => 'required',
            'personas' => 'required'
        ];
    }


    public function messages()
    {
        return [
          'name.required'     => 'Se requiere el nombre.',
          'email.required'    => 'Se requiere el correo.',
          'email.email'       => 'Se requiere un correo valido.',
          'phone'             => 'Se requiere el telefono.',
          'dia'               => 'Se requiere el día.',
          'hora'              => 'Se requiere la hora.',
          'personas'          => 'Se requiere la cantidad de personas.',
        ];
    }
}
