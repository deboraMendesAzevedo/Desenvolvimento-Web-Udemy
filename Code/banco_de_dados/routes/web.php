<?php

use App\Http\Controllers\site\SiteController;
use App\Http\Controllers\Admin\SupportController;
use App\Http\Controllers\Teste2\Teste2Controller;
use App\Http\Controllers\TesteController;
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
Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');

Route::get('/contato', [Teste2Controller::class, 'contact']);

Route::get('/contato', [SiteController::class, 'contact']);

Route::get('/teste',[TesteController::class,'teste']);

Route::get('teste2', [Teste2Controller::class, 'teste2'] );

Route::get('/', function () {
    return view('welcome');
});

