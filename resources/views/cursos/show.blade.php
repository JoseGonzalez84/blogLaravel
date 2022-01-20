@extends('layouts.plantilla')

@section('title')

@section('content')
    <h1>Cursos: Show curso {{$curso->name}}</h1>
    <p><strong>Categoria</strong>: {{$curso->categoria}}</p>
    <p><strong>Descripcion</strong>: {{$curso->descripcion}}</p>
    <a href="{{route('cursos.index')}}">Volver atrás</a>
    <br>
    <a href="{{route('cursos.edit', $curso)}}">Editar curso</a>

    <form action="{{route('cursos.destroy', $curso)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection
