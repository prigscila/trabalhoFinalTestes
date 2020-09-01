<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;
use App\Nota;
use App\ValidadorCpf;
use App\CalculadorMedia;

class NotasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $notas = Nota::all();
        return view('notas.index', compact('notas'));
    }

    public function create()
    {
        $alunos = Aluno::all();

        return view('notas.create', compact('alunos'));
    }

    public function store(Request $request)
    {
        $nota = new Nota();
        $nota->disciplina = $request->input('disciplina');
        $nota->descricao = $request->input('descricao');
        $nota->nota = $request->input('nota');
        $nota->aluno_id = $request->input('aluno');
        $nota->save();        

        return redirect('/notas');
    }

    public function edit($id)
    {
        $nota = Nota::find($id);
        $alunos = Aluno::all();

        if (isset($nota)) {            
            return view('notas.edit', compact('nota', 'alunos'));
        }

        return redirect('/notas');
    }
    
    public function update(Request $request, $id)
    {
        $nota = Nota::find($id);

        if (isset($aluno)) {
            $nota->disciplina = $request->input('disciplina');
            $nota->descricao = $request->input('descricao');
            $nota->nota = $request->input('nota');
            $nota->aluno_id = $request->input('aluno');
            $nota->save();
        }

        return redirect('/notas');
    }

    public function destroy($id)
    {
        $nota = Nota::find($id);
        $nota->delete();

        return redirect('/notas');
    }
}
