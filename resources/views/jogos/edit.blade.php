@extends('layouts.app')
@section('title', 'Edicao')

@section('content' )

<div class="container mt-5">
    <h1>Editar Jogo</h1>
    <hr>
    <form action="{{ route('jogos-update',['id'=>$jogos->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" value="{{$jogos->nome}}" placeholder="Digite um nome...">
            </div>
            <br>
            <div class="form-group">
                <label for="nome">Categoria</label>
                <input type="text" class="form-control" name="categoria" value="{{$jogos->categoria}}" placeholder="Digite uma Categoria para o jogo...">
            </div>
            <br>
            <div class="form-group">
                <label for="nome">Ano de Criacao</label>
                <input type="number" class="form-control" name="ano_criacao" value="{{$jogos->ano_criacao}}" placeholder="Digite um Ano de Criacao...">
            </div>
            <br>
            <div class="form-group">
                <label for="nome">valor</label>
                <input type="number" class="form-control" name="valor" value="{{$jogos->valor}}" placeholder="Digite um valor para o jogo...">
            </div>
            <br>
            <div class="form-group">
                <input type="submit"  name="enviar" class="btn btn-success" value="Atualizar">
            </div>
        </div>
    </form>
</div>
@endsection
