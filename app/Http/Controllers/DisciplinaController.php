<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    public function index()
    {
        $disciplinas = Disciplina::query()->orderBy('id')->get();

        $cores = array('Selecione', 'vermelho', 'verde', 'azul', 'rosa', 'amarelo', 'vinho');
        return view('disciplinas.index')
            ->with('cores', $cores)
            ->with('disciplinas', $disciplinas);
    }

    public function store(Request $request)
    {

        $disciplina = new Disciplina();

        $disciplina->nome = $request->nome;
        $disciplina->sigla = $request->sigla;
        $disciplina->cor = $request->cor;
        $disciplina->save();
        redirect('disciplinas');
    }
}
