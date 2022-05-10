<?php

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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class,'index']);
Route::get('/usuarios/criar', [EventController::class,'criarUsuario']);
Route::get('/usuarios', [EventController::class,'listarUsuario']);
Route::get('/usuario/{id}', [EventController::class,'show']);
Route::post('/add_usuario', [EventController::class,'store']);
Route::get('/editar_usuario/{id}', [EventController::class,'edit']);
Route::delete('/deletar_usuario/{id}', [EventController::class,'destroy']);
Route::put('/update_usuario/{id}', [EventController::class,'update']);



Route::get('cliente/{id}', function ($id) {
    
    return view('cliente', ['id' => $id]);
});