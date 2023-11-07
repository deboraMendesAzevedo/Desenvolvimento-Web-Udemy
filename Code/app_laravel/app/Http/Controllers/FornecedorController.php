<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedorController extends Controller
{

    public function index() {
        return view('app.fornecedor.index');
    }


    public function listar(){
        return view('app.fornecedor.listar');
    }

    public function adicionar(Request $request){

        if($request->input('_token') != ''){
            // validação de dados

            $msg = '';

            $regras =[
                'nome' => 'required|min:3|max:40',
                'site'=> 'required',
                'uf' => 'required|min:2|max:2',
                'email'=> 'email'
            ];

            $feedback =[
                'nome' => 'O campo deve ser preenchido',
                'nome.min' => 'O campo nome  deve ter no mínimo 3 caracteres',
                'nome.max' => 'O campo nome deve ter no máximo 40 caracteres',
                'uf.min' => 'O campo uf deve ter no mínimo 2 caracteres',
                'uf.max' => 'O campo uf deve ter no máximo 2 caracteres',
                'email.email' => 'O campo e-mail não foi preenchido corretamente'
            ];

            $request->validate($regras, $feedback);

            $fornecedor = new Fornecedor();
            $fornecedor->create($request->all());

            $msg = 'Cadastro realizado com sucesso!';
        }
        return view('app.fornecedor.adicionar', ['msg' => $msg]);
    }
}
