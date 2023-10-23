<?php

use App\Http\Controllers\site\SiteController;

use App\Http\Controllers\Admin\{SuporteController};
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

Route::get('/suporte', [SupoteController::class, 'index'])->name('suportes.index');

Route::get('/contato', [SiteController::class, 'contato']);

Route::get('/', function () {
    return view('welcome');
});