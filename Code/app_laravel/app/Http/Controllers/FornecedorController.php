<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                 'status' => 'N', 
                 'cnpj' => '00.000.000/000-00',
                 'ddd' => '11', // São Paulo
                 'telefone' => '0000-0000'
                ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '85', // Fortaleza (CE)
                'telefone' => '0000-0000'],
            2 => [
                'nome' => 'Fornecedor 3',
                'status' => 'N', 
                'cnpj' => '',
                'ddd' => '32', // Juiz de Fora (MG)
                'telefone' => '0000-0000'] // para mostrar a posição vazia
        ];

        //$msg =  isset($fornecedores[0]['cnpj']) ? 'CNPF informado': 'CNPJ não informado'; // para inprimir na tela o array
        //echo $msg;

        return view('app.fornecedor.index', compact('fornecedores')); // dois parametros  o primeiro com a view e o segundo com a variavel sem o $
    }
}
