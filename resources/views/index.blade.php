@extends('layout.app', ["current" => "home"])
@section('body')
    <div class="jumbotron bg-light border border-secondary">
        <div class="row">
            <div class="card-deck">
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de alunos</h5>
                        <p class="card=text">
                        Aqui você cadastra todos os seus alunos.
                        Posteriormente você consegue atribuir a eles suas notas para manter controle delas
                        </p>
                        <a href="/alunos" class="btn btn-primary">Cadastre seus alunos</a>
                    </div>
                </div>
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de notas</h5>
                        <p class="card=text">
                        Cadastre as notas dos seus alunos
                        </p>
                        <a href="/notas" class="btn btn-primary">Cadastre as notas de seus alunos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection