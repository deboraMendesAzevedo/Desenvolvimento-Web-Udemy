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
                 'cnpj' => '00.000.000/000-00'],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S'],
            2 => [
                'nome' => 'Fornecedor 3',
                    'status' => 'N', 
                    'cnpj' => ''] // para mostrar a posição vazia
        ];

        //$msg =  isset($fornecedores[0]['cnpj']) ? 'CNPF informado': 'CNPJ não informado'; // para inprimir na tela o array
        //echo $msg;

        return view('app.fornecedor.index', compact('fornecedores')); // dois parametros  o primeiro com a view e o segundo com a variavel sem o $
    }
}
