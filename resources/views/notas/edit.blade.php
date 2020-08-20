@extends('layout.app', ["current" => "alunos"])

@section('body')
<div class="card border">
    <div class="card-body">
        <form action="/notas/{{$nota->id}}" method="POST">
            @csrf
            <div class="form-group">
                <h4>Adicionar notas</h4>
                <hr>
                @foreach( $errors->all() as $message )
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                @endforeach
                <div class="form-row">
                    <div class="col-md-12 mb-12">
                        <label for="categoria">Aluno</label>
                        <select class="form-control mb-4" id="aluno" name="aluno" value="{{$nota->aluno_id}}" required>
                            @foreach($alunos as $aluno)
                                <option value="{{$aluno->id}}">{{$aluno->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-8 mb-4">
                        <label for="disciplina">Disciplina</label>
                        <input type="text" class="form-control" id="disciplina" name="disciplina" placeholder="Disciplina" value="{{$nota->disciplina}}" required>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="nota">Nota</label>
                        <input type="number" class="form-control" id="nota" name="nota" placeholder="Nota" value="{{$nota->nota}}" required>
                    </div>
                    <div class="col-md-12 mb-12">
                        <label for="descricao">Descrição</label>
                        <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição" value="{{$nota->descricao}}" required>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="col-md-5 mb-3 mt-4 mb-0">
                        <button class="btn btn-block btn-outline-primary" type="submit">Atualizar</button>
                    </div>    
                </div>
            </div>
        </form>
    </div>
</div>

@endsection