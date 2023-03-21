@extends('layouts.app')

@section('title', 'Listagem')

@section('content')
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-10">
      <h1>Listagem de Jogos</h1>
    </div>
    <div class="col-sm-2">
      <a href="{{ route('jogos.create') }}" class="btn btn-success">Novo Jogo</a>
    </div>
  </div>
  <table class="table">
    <hr>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Categoria</th>
        <th scope="col">Ano de Criação</th>
        <th scope="col">Valor</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach($jogos as $jogo)
      <tr>
        <th>{{ $jogo->id }}</th>
        <th>{{ $jogo->nome }}</th>
        <th>{{ $jogo->categoria }}</th>
        <th>{{ $jogo->ano_criacao }}</th>
        <th>{{ $jogo->valor }}</th>
        <th class="d-flex">
          <a href="{{ route('jogos.edit', ['id' => $jogo->id]) }}" class="btn btn-primary me-2"><i class="fa-solid fa-pen-to-square"></i></a>
          <form action="{{ route('jogos.destroy', ['id' => $jogo->id]) }}" method="POST">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
          </form>
        </th>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection