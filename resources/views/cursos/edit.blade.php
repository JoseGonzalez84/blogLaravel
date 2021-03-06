@extends('layouts.plantilla')

@section('title', 'Editar un curso')

@section('content')
    <h1>Cursos: Editar curso</h1>

    <form action="{{route('cursos.update', $curso)}}" method="POST">
        <!-- Token -->
        @csrf
        <!-- Metodo put, recomendado para actualizar registros -->
        @method('put')

        <br>
        <label>
            Nombre:
            <input type="text" name="name" value="{{ old('name', $curso->name) }}">
        </label>

        @error('name')
            <br>
            <small>* {{$message}}</small>
        @enderror

        <br>
        <label>
            Descripcion:
            <textarea name="descripcion" rows="5">{{ old('descripcion', $curso->descripcion) }}</textarea>
        </label>

        @error('descripcion')
            <br>
            <small>* {{$message}}</small>
        @enderror

        <br>
        <label>
            Categoria:
            <input type="text" name="categoria" value="{{ old('categoria', $curso->categoria) }}">
        </label>

        @error('categoria')
            <br>
            <small>* {{$message}}</small>
        @enderror

        <br>
        <button type="submit">Actualizar</button>
    </form>
@endsection
