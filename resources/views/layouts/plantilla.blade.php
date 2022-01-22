<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{{ asset('favicon.ico') }}}">
    <!--<script src="https://cdn.tailwindcss.com"></script>-->
    <title>@yield('title')</title>
    <style>
        .active{
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <h1>Coders free</h1>
        <nav>
            <ul>
                <li><a href="{{route('home')}}" class={{request()->routeIs('home') ? 'active' : ''}}>Inicio</a>
                    @dump(request()->routeIs('home'))
                </li>
                <li><a href="{{route('cursos.index')}}">Cursos</a>
                    @dump(request()->routeIs('cursos.index'))
                </li>
                <li><a href="{{route('nosotros')}}">Nosotros</a>
                    @dump(request()->routeIs('nosotros'))
                </li>
            </ul>
        </nav>
    </header>
    <h1>@yield('content')</h1>
</body>
</html>
