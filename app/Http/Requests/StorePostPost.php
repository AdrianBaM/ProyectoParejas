<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostPost extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'Nombre'=>'required|min:5|Max:500', 'Laboratorio'=>'required|min:5|Max:500', 'Formula'=>'required|min:5', 'Descripcion'=>'required|min:5', 'PrecioCosto'=>'required', 'PrecioVenta'=>'required', 'Existencias'=>'required',

        ];
    }
}