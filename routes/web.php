<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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
Route::redirect('/', '/student');// redireciona a rota raiz para a rota que eu quero

Route::resource('/student', StudentController::class);
//Route::resource():É uma função fornecida pelo Laravel que cria rotas para operações CRUD comuns em um controlador.
