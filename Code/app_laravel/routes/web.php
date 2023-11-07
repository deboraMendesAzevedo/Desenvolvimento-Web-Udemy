<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use App\Http\Middleware\LogAcessoMiddleware;
use App\Http\Controllers\LoginController;
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

Route::get('/login', [LoginController::class, 'index'])
    //->middleware('log.acesso')
    ->name('site.login');
Route::post('/login/{erro?}', [LoginController::class, 'autenticar'])
//->middleware('log.acesso')
->name('site.login');

// teste de soma de dados
Route::get('/teste/{p1}/{p2}', [TesteController::class,'teste'])->name('teste');

Route::middleware('autenticacao:padrao,visitante')
    ->prefix('/app')->group(function(){

            //para fazer grupos
        Route::get('/cliente', [ClienteController::class, 'index'])->name('app.cliente');
        Route::get('/home', [HomeController::class, 'index'])->name('app.home');
        Route::get('/sair', [LoginController::class, 'sair'])->name('app.sair');
        Route::get('/fornecedor', [FornecedorController::class,'index'])->name('app.fornecedor');
        Route::post('/fornecedor/listar', [FornecedorController::class,'listar'])->name('app.fornecedor.listar');
        Route::get('/fornecedor/listar', [FornecedorController::class,'listar'])->name('app.fornecedor.listar');
        Route::get('/fornecedor/adicionar', [FornecedorController::class,'adicionar'])->name('app.fornecedor.adicionar');
        Route::post('/fornecedor/adicionar', [FornecedorController::class,'adicionar'])->name('app.fornecedor.adicionar');
        Route::get('/fornecedor/editar/{id}/{msg?}', [FornecedorController::class, 'editar'])->name('app.fornecedor.editar');
        Route::get('/fornecedor/excluir', [FornecedorController::class, 'excluir'])->name('app.fornecedor.excluir');
        Route::get('/produto', [ProdutoController::class,'index'])->name('app.produto');

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


