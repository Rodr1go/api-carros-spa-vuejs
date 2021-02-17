<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarroRequest extends FormRequest
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
            'marca'  => 'required|',
            'modelo' => 'required',
            'ano' => 'required|digits:4|integer|min:1900|max:'.(date('Y')+1),
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'marca.required' => 'A marca é requerida.',
            'modelo.required' => 'O modelo é requerido.',
            'ano.required' => 'O ano é requerido.',
            'ano.digits' => 'O ano deve ser formado por 4 dígitos.',
            'ano.integer' => 'O ano deve ser inserido como valor numérico.',
            'ano.min' => 'O ano mínimo aceitável é 1900.',
            'ano.max' => 'O ano máximo deve ser o ano atual.'
        ];
    }
}
