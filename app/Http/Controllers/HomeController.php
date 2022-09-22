<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Professor;
use App\Models\Turma;
use App\Models\Disciplina;
use App\Models\Curso;
use App\Models\Modulo;
use App\Models\Horario;

class HomeController extends Controller
{

    public function index(){
        $total = [
            'alunos'=> Aluno::count(),
            'professores' => Professor::count(),
            'turmas' => Turma::count(),
            'disciplinas' => Disciplina::count(),
            'cursos' => Curso::count(),
            'modulos' => Modulo::count(),
            'horarios' => Horario::count()
        ];
        $totalAlunos = Aluno::count();
        $totalProfessores = Professor::count();
        return view('home',[
            'totalAlunos' => $totalAlunos,
            'totalProfessores' => $totalProfessores,
            'total' =>$total
        ]);
    }
}
