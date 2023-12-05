<?php

use App\Mail\MensagemTesteMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;


/*
|senha mmvb cjyz imcn lgqn
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

/*
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
->middleware('verified')
->name('home');
*/
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
->middleware('verified')
->name('home');

Route::resource('tarefa', 'App\Http\Controllers\TarefaController');

Route::get('mensagem-teste', function(){
    return new MensagemTesteMail();
    //Mail::to('deboramendesdeazevedo@gmail.com')->send(new MensagemTesteMail());
    //return 'E-mail enviado com sucesso!';
});
