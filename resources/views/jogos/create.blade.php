@extends('layouts.app')

@section('title', 'Crie um Jogo')

@section('content')
<div class="container mt-5">
    <h1>Crie um novo Jogo</h1>
    <hr>
    <form action="{{ route('jogos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>
            <br>
            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <input type="text" class="form-control" name="categoria" id="categoria">
            </div>
            <br>
            <div class="form-group">
                <label for="ano-criacao">Ano de Criação:</label>
                <input type="number" class="form-control" name="ano_criacao" id="ano-criacao">
            </div>
            <br>
            <div class="form-group">
                <label for="valor">Valor:</label>
                <input type="number" class="form-control" name="valor" id="valor">
            </div>
            <br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>
@endsection