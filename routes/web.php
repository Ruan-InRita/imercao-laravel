<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/produtos', [ProdutoController::class, 'index'] )->name('product');

Route::post('/produtos/store',[ProdutoController::class, 'store'] )->name('product/store');
Route::get('/produtos/todos',[ProdutoController::class, 'pageList'] )->name('product/list');