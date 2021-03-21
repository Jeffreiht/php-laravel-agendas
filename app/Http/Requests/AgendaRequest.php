<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgendaRequest extends FormRequest
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
            'name' => ['required'],
            'lastName' => ['required'],
            'sexo' => ['required'],
            'telefono' => ['required', 'regex:/(809|829|849)[-][0-9]{3}[-][0-9]{4}/', 'unique:agendas'],
            'email' => ['required', 'email', 'unique:agendas'],
            'estado_civil' => ['required'],
            'birthay' => ['required']
        ];
    }
}