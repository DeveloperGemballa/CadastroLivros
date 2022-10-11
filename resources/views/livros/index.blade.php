@extends('layout.layout')
@section('title','Listagem')
@section('content')
    <ul>
        @foreach($livros as $livro)
            <li><a href="{{url('livros/'.$livro->IDLivro)}}" class="btn"><mark>{{$livro->TituloLivro}}</mark></a></li>
        @endforeach
    </ul>
@endsection