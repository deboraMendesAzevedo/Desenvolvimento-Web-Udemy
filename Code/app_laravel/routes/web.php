<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\TesteController;
use App\Http\Middleware\LogAcessoMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;





Route::get('/request', function(){ // teste para começar novamente
    return 'x';
});

Route::get('/',[PrincipalController::class,'principal'])
    ->middleware('log.acesso')
    ->name('site.index');

Route::get('/contato',[ContatoController::class,'contato'])
    ->name('site.contato');

Route::post('/contato',[ContatoController::class,'salvar'])->name('contato.salvar');

Route::get('/sobre-nos',[SobreNosController::class,'sobreNos'])->name('site.sobrenos');


// teste de soma de dados
Route::get('/teste/{p1}/{p2}', [TesteController::class,'teste'])->name('teste');

Route::get('/login', function(){
    return 'Login';
})->name('site.login');

Route::middleware('autenticacao:padrao,visitante')
    ->prefix('/app')->group(function(){

            //para fazer grupos
        Route::get('/clientes', function(){
                return 'Clientes';
        })->name('app.clientes');

        Route::get('/fornecedores', [FornecedorController::class,'index'])->name('app.fornecedores');

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


