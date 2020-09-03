@extends('layout.app', ["current" => "alunos"])
@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadastro de alunos</h5>
            @foreach( $errors->all() as $message )
                <div class="alert alert-danger" role="alert">{{ $message }}</div>
            @endforeach
            @if(count($alunos) > 0)
                <table class="table table-ordered table-hover">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($alunos as $aluno)
                            <tr>
                                <td>{{$aluno->id}}</td>
                                <td>{{$aluno->nome}}</td>
                                <td>{{preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "\$1.\$2.\$3-\$4", $aluno->cpf)}}</td>
                                <td>
                                    @if(Auth::user()->tipo == 1 || Auth::user()->cpf == $aluno->cpf)
                                        <a href="/alunos/ver/{{$aluno->id}}" class="btn btn-sm btn-outline-info">Visualizar</a>
                                        <a href="/alunos/editar/{{$aluno->id}}" class="btn btn-sm btn-outline-success">Editar</a>
                                        <a href="/alunos/apagar/{{$aluno->id}}" class="btn btn-sm btn-outline-danger">Apagar</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
            </div>
        @if(Auth::user()->tipo == 1)
            <div class="card-footer">
                <a href="/alunos/novo" class="btn btn-sm btn-primary" role="button">Novo aluno</a>
            </div>
        @endif
    </div>
@endsection