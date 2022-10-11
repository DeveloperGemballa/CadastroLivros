@extends('layout.layout')
@section('title','{{$livros->TituloLivro}}')
@section('content')
    <div class="alert shadow">
        <h1 class="display-3" align="center">Livro - <mark>{{$livros->TituloLivro}}</mark></h1>
        <br>
        <ul>
            <li><mark>ID:</mark> {{$livros->IDLivro}}</li><hr style="width:200px;">
            <li><mark>Título:</mark> {{$livros->TituloLivro}}</li>
            <li><mark>Descrição:</mark> {{$livros->DescricaoLivro}}</li>
            <li><mark>Autor:</mark> {{$livros->AutorLivro}}</li><hr style="width:250px;">
            <li><mark>Editora:</mark> {{$livros->EditoraLivro}}</li>
            <li><mark>Ano de lançamento:</mark> {{$livros->AnoLancamentoLivro}}</li><br>
        </ul>
        <a href="{{url('livro/'.$livros->IDLivro.'/edit')}}" class="btn btn-warning shadow">Alterar</a> |
        <a href="{{url('livros')}}" class="btn btn-info shadow">Voltar</a>
    </div>
@endsection