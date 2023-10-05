<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;





Route::get('/request', function(){ // teste para começar novamente
    return 'x';
});

Route::get('/',[\App\Http\Controllers\PrincipalController::class,'principal'])->name('site.index');

Route::get('/contato',[\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');

Route::get('/sobre-nos',[\App\Http\Controllers\SobreNosController::class,'sobreNos'])->name('site.sobrenos');

Route::get('/login', function(){
    return 'Login';
})->name('site.login');

Route::prefix('/app')->group(function(){

    //para fazer grupos 
Route::get('/clientes', function(){
    return 'Clientes';
})->name('app.clientes');

Route::get('/fornecedores', function(){
    return 'Fornecedores';
})->name('app.fornecedores');

Route::get('/produtos', function(){
    return 'Produtos';
})->name('app.produtos');

});

// para ver como uma rota substitui a outra
Route::get('/rota1', function(){
    echo 'Rota 1';
})->name('site.rota1');

Route::get('/rota2', function(){
    return redirect()->route('site.rota1');
})->name('site.rota2');

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');


// para direcionar a pagina para a pagina principal quando a página não existe 
Route::fallback(function(){
    echo"a página não existe <a href=".route('site.index').">clique aqui </a>" ;
});



/*
Route::redirect('/rota2',"/rota1" ); // para fazer o redirecionamento  de rotas
*/



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


