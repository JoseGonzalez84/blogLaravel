@extends('layouts.plantilla')

@section('title', 'Crear un curso')

@section('content')
    <h1>Cursos: Crear curso</h1>

    <form action="{{route('cursos.store')}}" method="POST">

        @csrf

        <br>
        <label>
            Nombre:
            <input type="text" name="name" value={{old('name')}}>
        </label>

        @error('name')
            <br>
            <small>* {{ $message }}</small>
        @enderror

        <br>
        <label>
            Descripcion:
            <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
        </label>

        @error('descripcion')
            <br>
            <small>* {{ $message }}</small>
        @enderror

        <br>
        <label>
            Categoria:
            <input type="text" name="categoria" value={{old('categoria')}}>
        </label>

        @error('categoria')
            <br>
            <small>* {{ $message }}</small>
        @enderror

        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection
