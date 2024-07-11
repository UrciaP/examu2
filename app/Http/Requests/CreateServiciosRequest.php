<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateServiciosRequest extends FormRequest
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
    public function rules(){
        return [
            'nombre' =>'required',
            'curso' =>'required',
            'nota1' =>'required',
            'nota2' =>'required',
            'promedio' =>'required',
            'condicion' =>'required',
            'fechareg' =>'required',
        ];
    }
    public function messages(){
        return [
            'nombre.required' =>'Se necesita un título',
            'curso.required' =>'Ingresa una descripción',
            'nota1.required' =>'Ingresa la Nota 1',
            'nota2.required' =>'Ingresa la Nota 2',
            'promedio.required' =>'Ingresa la Nota 2',
            'condicion.required' =>'Ingresa la Nota 2',
            'fechareg.required' =>'Fechad e registro faltante',
        ];
    }
}
