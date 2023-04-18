<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastro',[CadastroController::class,"index"])->name("cadastro.index");
Route::get('/cadastro/criar',[CadastroController::class,"create"])->name("cadastro.create");
Route::post('/cadastro/criar',[CadastroController::class,"store"])->name("cadastro.store");
Route::get('/cadastro/editar/{id}',[CadastroController::class,"edit"])->name("cadastro.edit");
Route::put('/cadastro/update',[CadastroController::class,"update"])->name("cadastro.update");
Route::delete('/cadastro/delete/{id}',[CadastroController::class,"delete"])->name("cadastro.delete");

