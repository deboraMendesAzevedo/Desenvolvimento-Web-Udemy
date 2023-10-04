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

Route::get('/request', function(){
    return 'x';
});


Route::prefix('usuarios')->group(function(){
    Route::get('', function() {
        return 'usuário';
    })->name('usuarios');
    Route::get('/{id}', function(){
        return('Mostrar');
    })->name('usuarios.show');
    Route::get('/{id}/tags', function(){
        return 'Tags';
    })->name('usuarios.tags');
});


Route::get('/a-empresa/{string?}', function ($string = null) { // quando coloca a ? significa que é opcional, mas tem que atribuir um valor mesmo sendo null
    return $string;
    /*
    return[
        'nome' => 'Debora',
    ];*/
});


Route::get('/users/{paramA}/{paramB}', function ($paramA, $paramB) {
    return $paramA. ' - '. $paramB;
    /*
    return[
        'nome' => 'Debora',
    ];*/
});
