<?php

use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Teste\TesteController;
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



//Route::get('/contato', [SiteController::class, 'contact']);

//Route::get('/contato', [SiteController::class, 'contact']);

Route::get('/contato', [SiteController::class, 'contact']);

Route::get('/teste', [TesteController::class, 'teste']);

/*
Route::get('/contato', function () {
    return view('site.contact');
});
*/

Route::get('/', function () {
    return view('welcome');
});

