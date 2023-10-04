<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*

Route::get('/', function () {
    return 'Conseguiu, UFA';
});
*/
Route::get('/',[\App\Http\Controllers\PrincipalController::class,'principal'])->name('site.index');

Route::get('/sobreNos', [\App\Http\Controllers\SobreNosController::class,'sobreNos'])->name('site.sobrenos');

Route::get('/contato', [\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');

Route::get('/teste', [\App\Http\Controllers\TesteController::class,'teste'])->name('site.teste');

Route::get('/login', function(){
    return 'Login';
})->name('site.login');


Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){return 'Clientes';})->name('app.clientes');
    Route::get('/produtos', function(){return 'produtos';})->name('app.produtos');
    Route::get('/fornecedores','FornecedorController@index')->name('app.fornecedores');
});

/*
Route::prefix('/app')->group(function(){
    
    Route::get('/clientes', function(){
        return 'Clientes';
    })->name('app.clientes');

    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');

    Route::get('/produtos', function() {
        return 'Produtos';
    })->name('app.produtos');
});
*/

Route::get('/teste', 'TesteController@teste')->name('teste');

Route::fallback(function(){
    echo 'A rota não foi encontrada <a href="'.route('site.index').'">clique aqui </a>'; // para direcionar para a pagina principal, quando a pagina não existe 
});


/*
Route::get('/route1', function(){
    echo'Rota 1';
})->name('site.rota1');

// Route::redirect('/rota2','/rota1'); para direcionar quando a pagina está fora de ar

Route::get('/route2', function(){
    return redirect()->route('site.rota1'); // faz o direcionamento para a rota1
})->name('site.route2');

Route::get(
    '/contato/{nome}/{categoria_id}',
    function (
        string $nome = 'nome não informado ',
        int $categoria_id = 1
    ){
         echo "Estamos aqui: $nome - $categoria_id ";
    }
)->where('categoria_id','[0-9]+')// fazendo que só aceite números entre 0 e 9
->where('nome', '[A-Za-z]+'); // fazer que só aceite letras 
*/

/*
Route::get(
    '/contato/{nome?}/{categoria?}/{assunto?}/{mensagem?}',
    function (
        string $nome = 'nome não informado ',
        string $categoria = 'Informação não informado',
        string $assunto = 'Contato contato não informado', 
        string $mensagem = 'mensagem não informada'){
        echo "Estamos aqui: $nome - $categoria - $assunto - $mensagem";
    }
);

*/