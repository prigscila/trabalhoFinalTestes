@extends('layout.app', ["current" => "alunos"])

@section('body')
<div class="card border">
    <div class="card-body">
        <form action="/alunos/{{$aluno->id}}" method="POST">
            @csrf
            <div class="form-group">
                <h4>Atualizar aluno</h4>
                <hr>
                @foreach( $errors->all() as $message )
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                @endforeach
                <div class="form-row">
                    <div class="col-md-12 mb-12">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do aluno" value="{{$aluno->nome}}" required>
                    </div>
                    <div class="col-md-12 mb-12 mt-4">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF do aluno" value="{{$aluno->cpf}}" required>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="col-md-3 mb-6 mt-4 mb-0">
                        <button class="btn btn-block btn-outline-primary" type="submit">Salvar</button>
                    </div>
                    <div class="col-md-3 mb-6 mt-4 mb-0">
                        <button class="btn btn-block btn-outline-danger" type="cancel">Cancelar</button>
                    </div>    
                </div>
            </div>
        </form>
    </div>
</div>

@endsection