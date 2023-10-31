<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function __construct(){
        $this->middleware('log.acesso');

    }
    public function index(){
        return view('site.login', ['titulo' => 'Login']);
    }
    public function autenticar(Request $request) {
        //return view('site.login', ['titulo' => 'Login']);
        //return 'estou aqui ';

        //regra de validação
        $regras =[
            'usuario' => 'email',
            'senha' => 'required'
        ];
        // mensaguem de feedback de validação
        $feedback = [
            'usuario.email' => 'O campo usuário (e-mail) é obrigatório  ',
            'senha.required' => 'O campo é obrigatório'
        ];

        $request ->validate($regras, $feedback);

        print_r($request->all());

    }
}
