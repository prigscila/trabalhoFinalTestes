@extends('layout.app', ["current" => "alunos"])
@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title mb-5">Notas do aluno(a)</h5>
            <h2>{{$aluno->nome}}</h2>
            <h3 class="mb-2">Média: {{$media}}</h3>
            @if(count($notas) > 0)
                <table class="table table-ordered table-hover">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Disciplina</th>
                            <th>Descrição</th>
                            <th>Nota</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($notas as $nota)
                            <tr>
                                <td>{{$nota->id}}</td>
                                <td>{{$nota->disciplina}}</td>
                                <td>{{$nota->descricao}}</td>
                                <td>{{$nota->nota}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection