<?php

namespace App\Http\Controllers;

use App\Models\Turma;
use App\Models\Curso;
use App\Models\Modulo;
use App\Models\Aluno;
use App\Models\Professor;
use Illuminate\Http\Request;

class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turmas = Turma::query()->orderBy('id')->get();
        $cursos = Curso::query()->orderBy('nome')->get();
        $modulos = Modulo::query()->orderBy('nome')->get();
        $alunos = Aluno::query()->orderBy('nome')->get();
        $professores = Professor::query()->orderBy('nome')->get();
        return view('turmas.index',[
            'turmas' => $turmas,
            'cursos' => $cursos,
            'modulos' => $modulos,
            'alunos' => $alunos,
            'professores' => $professores
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos = Curso::query()->orderBy('nome')->get();
        $modulos = Modulo::query()->orderBy('nome')->get();
        return view('turmas.create',[
            'cursos' => $cursos,
            'modulos' => $modulos,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Turma $turma)
    {
        $turma->nome = $request->nome;
        $turma->curso = $request->curso_id;
        $turma->modulo = $request->modulo_id;
        $turma->save();

        return redirect('turmas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function show(Turma $turma)
    {
        $cursos = $turma->cursos()->get();
        return view('turmas.view',[
            'turma' => $turma,
            'cursos' => $cursos
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function edit(Turma $turma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Turma $turma)
    {
        $turma->nome = $request->nome;
        $turma->curso = $request->curso_id;
        $turma->modulo = $request->modulo_id;
        $turma->save();

        return redirect('turmas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Turma $turma)
    {
        $turma->delete();
        return redirect('turmas');
    }
}
