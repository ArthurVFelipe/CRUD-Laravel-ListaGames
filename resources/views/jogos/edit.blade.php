@extends('layouts.app')

@section('title', 'Edição')

@section('content')
<div class="container mt-5">
    <h1>Editar Jogo</h1>
    <hr>
    <form action="{{ route('jogos.update', ['id' => $jogos->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" value="{{ $jogos->nome }}" name="nome" id="nome">
            </div>
            <br>
            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <input type="text" class="form-control" value="{{ $jogos->categoria }}" name="categoria" id="categoria">
            </div>
            <br>
            <div class="form-group">
                <label for="ano-criacao">Ano de Criação:</label>
                <input type="number" class="form-control" value="{{ $jogos->ano_criacao }}" name="ano_criacao" id="ano-criacao">
            </div>
            <br>
            <div class="form-group">
                <label for="valor">Valor:</label>
                <input type="number" class="form-control" value="{{ $jogos->valor }}" name="valor" id="valor">
            </div>
            <br>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Atualizar">
            </div>
        </div>
    </form>
</div>
@endsection