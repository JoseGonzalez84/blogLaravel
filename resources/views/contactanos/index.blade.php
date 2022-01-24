@extends('layouts.plantilla')

@section('title', 'Formulario de contacto')

@section('content')
    <h1>Déjanos un mensaje</h1>

    <form action="{{route('contactanos.store')}}" method="POST">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        @error('name')
            <p><strong>*{{$message}}</strong></p>
        @enderror
        <br>
        <label>
            Correo:
            <br>
            <input type="text" name="correo">
        </label>
        @error('correo')
            <p><strong>*{{$message}}</strong></p>
        @enderror
        <br>
        <label>
            Mensaje:
            <br>
            <textarea name="mensaje" cols="20" rows="4"></textarea>
        </label>
        @error('mensaje')
        <p><strong>*{{$message}}</strong></p>
        @enderror
        <button type="submit">Enviar</button>
    </form>

    @if (session('info'))
        <script>
            alert('Mensaje enviado');
        </script>
    @endif
@endsection
