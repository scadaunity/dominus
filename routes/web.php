<?php

use App\Http\Controllers\AlunosController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\ProfessoresController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\ModulosController;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\HomeController;
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
Route::get('home', [HomeController::class, 'index']);
Route::post('autenticate', [LoginController::class, 'autenticate']);
//Route::get('/turmas','TurmaController@index');

// Resources
Route::resource('professores',ProfessoresController::class)->names('professor')->parameters(['professores'=>'professor']);
Route::resource('alunos',AlunosController::class)->names('aluno')->parameters(['alunos'=>'aluno']);
Route::resource('cursos',CursosController::class)->names('curso')->parameters(['cursos'=>'curso']);
Route::resource('modulos',ModulosController::class)->names('modulo')->parameters(['modulos'=>'modulo']);
Route::resource('classes',ClassesController::class)->names('classe')->parameters(['classes'=>'classe']);
Route::resource('disciplinas',DisciplinaController::class)->names('disciplina')->parameters(['disciplinas'=>'disciplina']);

Route::resource('turmas',TurmaController::class)->names('turma')->parameters(['turmas'=>'turma']);
