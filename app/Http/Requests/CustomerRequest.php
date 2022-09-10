<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id_to_ignore =  $this->route('id');

        return [
            'name' => 'required|max:255',
            'rg' => 'required|max:50',
            'cellphone' => 'required|max:11',
            'photo' => 'string',
            'email' => "required|unique:customers,email,$id_to_ignore|max:255|email",
            'uf' => 'required|min:2|max:2',
            'city' => 'max:255',
            'place' => 'max:255',
        ];
    }
}
