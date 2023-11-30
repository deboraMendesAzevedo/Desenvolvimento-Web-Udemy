<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TarefaController extends Controller
{
    public function __construct(){
         $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = Auth::user()->id;
        $nome = Auth::user()->name;
        $email = Auth::user()->email;

        return "ID $id | nome $nome | email $email";

        /*if(Auth::check()){
            $id = Auth::user()->id;
            $nome = Auth::user()->name;
            $email = Auth::user()->email;

            return "ID $id nome $nome email $email";
        }else{
        return 'NÃO ESTÁ LOGADO';
        }
        */
        /*  if(auth()->check()){
            $id = auth()->user()->id;
            $nome = auth()->user()->name;
            $email = auth()->user()->email;

            return "ID $id nome $nome email $email";
        }else{
        return 'NÃO ESTÁ LOGADO';
        }*/

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tarefa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tarefa $tarefa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tarefa $tarefa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tarefa $tarefa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tarefa $tarefa)
    {
        //
    }
}
