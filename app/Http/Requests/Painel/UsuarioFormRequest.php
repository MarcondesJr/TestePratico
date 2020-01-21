<?php

namespace App\Http\Requests\Painel;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioFormRequest extends FormRequest
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
            'name'      => 'required|min:3|max:100',
            'last'      => 'required|min:3|max:100',
            'email'     => 'required|min:3|max:100',
            'password'  => 'required|min:6|max:32',
            'endereco'  => 'required|min:3|max:100',
            'telefone'  => 'required|max:20',
            'cidade'    => 'required|min:3|max:100',
            'estado'    => 'required',
            'categoria' => 'required',
            'imagem'    => 'max:200',
        ];
    }

    public function messages()
    {
        return  [
                'name.required' => ' O campo NOME é de preenchimento OBRIGATÓRIO.!',
                'name.min:3' => ' O campo NOME precisa no mínimo de 3 caracteres.!',
                'name.max:100' => ' O campo NOME permite no maxímo de 100 caracteres.!',
                'last.required' => ' O campo SOBRENOME é de preenchimento OBRIGATÓRIO.!',
                'last.min:3' => ' O campo SOBRENOME precisa no mínimo de 3 caracteres.!',
                'last.max:100' => ' O campo SOBRENOME permite no maxímo de 100 caracteres.!',
                'email.required' => ' O campo E-MAIL é de preenchimento OBRIGATÓRIO.!',
                'email.min:3' => ' O campo E-MAIL precisa no mínimo de 3 caracteres.!',
                'email.max:100' => ' O campo E-MAIL permite no maxímo de 100 caracteres.!',
                'password.required' => ' O campo SENHA é de preenchimento OBRIGATÓRIO.!',
                'password.min:6' => ' O campo SENHA precisa no mínimo de 6 caracteres.!',
                'password.max:32' => ' O campo SENHA permite no maxímo de 32 caracteres.!',
                'endereco.required' => ' O campo ENDEREÇO é de preenchimento OBRIGATÓRIO.!',
                'endereco.min:3' => ' O campo ENDEREÇO precisa no mínimo de 3 caracteres.!',
                'endereco.max:100' => ' O campo ENDEREÇO permite no maxímo de 100 caracteres.!',
                'telefone.required' => ' O campo TELEFONE é de preenchimento OBRIGATÓRIO.!',
                'telefone.numeric' => ' O campo TELEFONE precisa conter apenas números.!',
                'telefone.max:20' => ' O campo TELEFONE permite no maxímo de 20 caracteres.!',
                'cidade.required' => ' O campo CIDADE é de preenchimento OBRIGATÓRIO.!',
                'cidade.min:3' => ' O campo CIDADE precisa no mínimo de 3 caracteres.!',
                'cidade.max:100' => ' O campo CIDADE permite no maxímo de 100 caracteres.!',
                'estado.required' => ' O campo ESTADO é de preenchimento OBRIGATÓRIO.!',
                'categoria.required' => ' O campo CATEGORIA é de preenchimento OBRIGATÓRIO.!',
                'image.max:200' => ' O campo IMAGEM permite no maxímo de 200 caracteres.!',    
        ];
    }
}
