<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;


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
/*
Route::get('/','App\Http\Controllers\UsuariosController@index');
Route::get('/crear','App\Http\Controllers\UsuariosController@create');
Route::get('/editar','App\Http\Controllers\UsuariosController@edit');
*/

//Route::get('/', [UsuariosController::class, 'index']);
//Route::get('/crear', [UsuariosController::class, 'create']);
//Route::get('/editar', [UsuariosController::class, 'edit']);
Route::get('/',function(){
    return view ('welcome');
});  
Route::resource('usuarios', 'App\Http\Controllers\UsuariosController');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
