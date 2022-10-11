@extends('layout.layout')
@section('title','Listagem')
@section('content') 
    @foreach($livros as $livro)
        <li><a href="{{url('livros/'.$livros->id)}}" class="btn"><mark>{{$livros->TituloLivro}}</mark></a></li>
    @endforeach
@endsection