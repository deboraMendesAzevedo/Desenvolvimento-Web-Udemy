<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\Models\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request){
       //dd($request);
       // var_dump($_POST);
       /*
       echo '<pres>';
       print_r($request->all());
       echo '</pres>';
       */

       /*
        $contato = neW SiteContato();
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato->input('motivo_contato');
        $contato->mensagem->input('mensagem');

        print_r($contato->getAtributes());
        */

        //$contato = new SiteContato();
        //$contato->create($request->all()); // não precisa do save()

        //$contato->fill($request->all()); // para usar esse metodo a variavel fiillable precisa estar ativa no SiteContato
        //$contato->save();
       // print_r($contato->getAttributes());

        return view('site.contato', ['titulo' => 'Contato Consoller']);
    }

    public function salvar(Request $request) {
    //    dd($request->all());
        //realizar a validação dos dados do formulário recebidos no request
        $request->validate([
            'nome' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required|max:2000'
        ]);
         SiteContato::create($request->all());
    }

}



