<?php

use App\Http\Controllers\AlunosController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\ProfessoresController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;
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
    return redirect('login');
});

//Login
Route::get('login', [LoginController::class, 'index']);
Route::post('autenticate', [LoginController::class, 'autenticate']);
//Route::get('login', [AuthController::class, 'index']);

//Alunos
Route::get('alunos', [AlunosController::class, 'index']);
Route::get('alunos/create',[AlunosController::class, 'create']);
Route::post('alunos/save', [AlunosController::class, 'store']);

//Professores
Route::get('professores',[ProfessoresController::class, 'index'])->name('professores');
Route::get('professores/create', [ProfessoresController::class, 'create']);
Route::post('professores/save', [ProfessoresController::class, 'store']);
Route::get('professores/edit/{id}', [ProfessoresController::class, 'edit']);

//Classe
Route::get('classes', [ClassesController::class, 'index']);
Route::post('classes/save', [ClassesController::class, 'store']);

//Disciplina
Route::get('disciplinas', [DisciplinaController::class, 'index']);
Route::post('disciplinas/save', [DisciplinaController::class, 'store']);
