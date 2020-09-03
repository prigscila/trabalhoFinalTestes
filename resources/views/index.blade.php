@extends('layout.app', ["current" => "home"])
@section('body')
    <div class="jumbotron">
        @guest
            <h1 class="display-4">Bem-vindo(a)!</h1>
            <p class="lead">O rastreador de notas é um sistema onde você consegue cadastrar seus alunos, suas notas e ter as médias facilmente calculadas!</p>
            <p>Clique <a href="/login">aqui</a> para começar a usar!</p>
        @else
            <h1 class="display-4">Bem-vindo(a), {{ Auth::user()->name }}!</h1>
            @if(Auth::user()->tipo == 1)
                <hr class="my-4">
                <div class="card-deck">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Cadastro de alunos</h5>
                                <p class="card-text">
                                Aqui você cadastra todos os seus alunos.
                                Posteriormente você consegue atribuir a eles suas notas para manter controle delas
                                </p>
                                <a href="/alunos" class="btn btn-primary">Cadastre seus alunos</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Cadastro de notas</h5>
                                <p class="card-text">
                                Cadastre as notas dos seus alunos
                                </p>
                                <a href="/notas" class="btn btn-primary">Cadastre as notas de seus alunos</a>
                            </div>
                        </div>
                </div>
            @endif
        @endguest
    </div>
@endsection