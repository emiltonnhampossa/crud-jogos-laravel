@extends('layouts.app')
@section('title', 'Criacao')

@section('content' )

<div class="container mt-5">
    <h1>Crie um novo jogo</h1>
    <hr>
    <form action="{{route('jogos-store')}}" method="POST">
        @csrf
        <div class="form-group">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Digite um nome...">
            </div>
            <br>
            <div class="form-group">
                <label for="nome">Categoria</label>
                <input type="text" class="form-control" name="categoria" placeholder="Digite uma Categoria para o jogo...">
            </div>
            <br>
            <div class="form-group">
                <label for="nome">Ano de Criacao</label>
                <input type="number" class="form-control" name="ano_criacao" placeholder="Digite um Ano de Criacao...">
            </div>
            <br>
            <div class="form-group">
                <label for="nome">valor</label>
                <input type="number" class="form-control" name="valor" placeholder="Digite um valor para o jogo...">
            </div>
            <br>
            <div class="form-group">
                <input type="submit"  name="enviar" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>
@endsection
