<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Altere para false se você tiver regras de autorização específicas
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'modelo' => 'required|string|max:255',
            'marca' => 'required|string|max:255',
            'ano' => 'required|integer',
            'data_ingresso' => 'required|date',
            'orcamento' => 'required|numeric|min:0',
            'nome_mecanico' => 'required|string|max:255',
            'metodo_pagamento' => 'required|string|in:Pix,Dinheiro,Débito,Crédito',
        ];
    }
}
