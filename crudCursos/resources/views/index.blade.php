<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>

<div class="container">

    <div class = "row" >
        <div class = "col-md-12">
        <h1>CRUDS</h1>
        </div>
    </div>

    <div class = "row" >
        <div class = "col-md-12">
        <h2>
            <a href="{{ route('index_alumnos_path') }}" class = "btn btn-info">Alumnos</a>
            <a href="{{ route('index_profesores_path') }}" class = "btn btn-info">Profesores</a>
            <a class = "btn btn-info">Cursos</a>
        </h2>

    </div>


</div>
</body>
</html>