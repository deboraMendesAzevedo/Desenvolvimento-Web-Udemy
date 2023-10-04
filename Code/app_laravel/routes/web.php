<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;





Route::get('/request', function(){ // teste para começar novamente
    return 'x';
});

Route::get('/',[\App\Http\Controllers\PrincipalController::class,'principal']);

Route::get('/contato',[\App\Http\Controllers\ContatoController::class,'contato']);

Route::get('/sobre-nos',[\App\Http\Controllers\SobreNosController::class,'sobreNos']);

Route::get('/login', function(){
    return 'Login';
});

Route::get('/clientes', function(){
    return 'Clientes';
});

Route::get('/fornecedores', function(){
    return 'Fornecedores';
});

Route::get('/produtos', function(){
    return 'Produtos';
});

/*
Para fazer com que  só seja aceito letras e números
Route::get('/contato/{nome}/{categoria_id}', function(
    string $nome = 'Desconhecido', 
    int $categoria_id = 1 
    ){
    echo 'Estamos aqui '.$nome.' - '.$categoria_id;
})->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');

*/

/*
// nome, categoria, assunto, mensagem
Route::get('/contato/{nome?}/{yyy?}/{assunto?}/{mensagem?}', function(
    string $xxx = 'Desconhecido', 
    string $yyy = 'idade não informada', 
    string $assunto = 'não informado', 
    string $mensagem = 'não informada'){
    echo 'Estamos aqui '.$xxx.' - '.$yyy.' - '.$assunto.' - '.$mensagem;
});
*/


