<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Curso;
use App\Models\Modulo;
use App\Models\Aluno;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function index()
    {
        $classes = Classe::query()->orderBy('id')->get();
        $cursos = Curso::query()->orderBy('nome')->get();
        $modulos = Modulo::query()->orderBy('nome')->get();
        $alunos = Aluno::query()->orderBy('nome')->get();

        $series = array(
            'Selecione',
            'Ensino fundamental I',
            'Ensino fundamental II',
            'Ensino médio'
        );

        return view('classe.index')
            ->with('series', $series)
            ->with('classes', $classes)
            ->with('cursos', $cursos)
            ->with('modulos', $modulos)
            ->with('alunos', $alunos);
    }

    public function store(Request $request, Classe $classe)
    {

        $classe->nome = $request->nome;
        $classe->serie = $request->serie;
        $classe->save();

        return redirect('classes');
    }
}
