@extends('templates.template')

@section('content')

<h1 class ="text-center">Visualizar</h1><hr>
@php
$user=$book->find($book->id)->relUsers;
@endphp

<div class="col-8 m-auto">
Título:{{$book->title}}<br>
Páginas: {{$book->pages}}<br>
Preço: R${{$book->price}}<br>
Autor: {{$user->name}}<br>
Email do autor: {{$user->email}}<br>



</div>

@endsection 
