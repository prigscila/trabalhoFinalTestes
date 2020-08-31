<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;
use App\Nota;
use App\ValidadorCpf;
use App\CalculadorMedia;

class AlunosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $alunos = Aluno::all();
        return view('alunos.index', compact('alunos'));
    }

    public function create()
    {
        return view('alunos.create');
    }

    public function store(Request $request)
    {
        $cpf = $request->input('cpf');
        $validador = new ValidadorCpf();
        
        if (!$validador->ehValido($cpf)) {
            $errors = [];
            $errors['cpf'] = 'O CPF não é válido!';

            return redirect('/alunos/novo')->withErrors($errors);
        } 
        
        $cpfSomenteNumeros = preg_replace('/[^0-9]/', '', $cpf);
        $aluno = new Aluno();
        $aluno->nome = $request->input('nome');
        $aluno->cpf = $cpfSomenteNumeros;
        $aluno->save();        

        return redirect('/alunos');
    }

    public function edit($id)
    {
        $aluno = Aluno::find($id);

        if (isset($aluno)) {            
            return view('alunos.edit', compact('aluno'));
        }

        return redirect('/alunos');
    }
    
    public function show($id)
    {
        $aluno = Aluno::find($id);
        $notas = Nota::where('aluno_id', $id)->get();        
        $calculador = new CalculadorMedia();
        $media = $calculador->calcular($notas);

        return view('alunos.view', compact('aluno', 'notas', 'media'));
    }

    public function update(Request $request, $id)
    {
        $cpf = $request->input('cpf');
        $validador = new ValidadorCpf();
        
        if (!$validador->ehValido($cpf)) {
            $errors = [];
            $errors['cpf'] = 'O CPF não é válido!';
            
            return redirect('/alunos/editar/'.$id)->withErrors($errors);
        } 
        
        $aluno = Aluno::find($id);
        if (isset($aluno)) {
            $aluno->nome = $request->input('nome');
            $aluno->cpf = $request->input('cpf');
            $aluno->save();
        }

        return redirect('/alunos');
    }

    public function destroy($id)
    {
        $aluno = Aluno::find($id);
        
        if (isset($aluno)) {
            $quantidadeNotas = Nota::where('aluno_id', $id)->count();

            if ($quantidadeNotas > 0) {
                $errors = [];
                $errors['notas'] = 'Não é possível remover esse aluno pois ele tem notas cadastradas!';
                
                return redirect('/alunos')->withErrors($errors);
            } 
            
            $aluno->delete();
        }

        return redirect('/alunos');
    }
}
