@extends('layout.app', ["current" => "notas"])
@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadastro de notas</h5>
            @if(count($notas) > 0)
                <table class="table table-ordered table-hover">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Disciplina</th>
                            <th>Descrição</th>
                            <th>Nota</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($notas as $nota)
                            <tr>
                                <td>{{$nota->id}}</td>
                                <td>{{$nota->disciplina}}</td>
                                <td>{{$nota->descricao}}</td>
                                <td>{{$nota->nota}}</td>
                                <td>
                                    <a href="/notas/editar/{{$nota->id}}" class="btn btn-sm btn-outline-success">Editar</a>
                                    <a href="/notas/apagar/{{$nota->id}}" class="btn btn-sm btn-outline-danger">Apagar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
            </div>
        <div class="card-footer">
            <a href="/notas/novo" class="btn btn-sm btn-primary" role="button">Nova nota</a>
        </div>
    </div>
@endsection