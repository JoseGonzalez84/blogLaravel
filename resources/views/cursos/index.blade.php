@extends('layouts.plantilla')

@section('title', 'Vista de Curso')

@section('content')
    <h1>Cursos: Vista curso</h1>
    <a href="{{route('cursos.create')}}">Crear curso</a>

    <ul>
        @foreach ($cursos as $curso)
            <li>
                <a href="{{route('cursos.show', $curso->id)}}">{{$curso->name}}</a>

            </li>
        @endforeach
    </ul>

    {{$cursos->links()}}

@endsection
