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

/* Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastrar', function(){
    return view('paginas/cadastrar');
});
 */

 Route::get('/',[\App\Http\Controllers\loginUsuario::class,'index']); 
 Route::get('/cadastrar', [\App\Http\Controllers\cadastrarUsuario::class, 'cadastrar']);
 Route::get('/consultar', [\App\Http\Controllers\criarTarefas::class, 'consultar']);


 Route::post('/home',[\App\Http\Controllers\criarTarefas::class, 'home']);
 Route::post('/cadastrar/salvar', [\App\Http\Controllers\cadastrarUsuario::class, 'store']);
 Route::post('/home/criar', [App\Http\Controllers\criarTarefas::class, 'store']);
