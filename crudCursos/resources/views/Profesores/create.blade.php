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

<body>
<div class="container">



    <div class = "row" >
        <div class = "col-md-12"></div>
        <table>
            <tr>
                <td>
                    <h2>
                        <a href="{{ route('store_profesores_path' ) }}" class = "btn btn-info">Regresar</a>
                    </h2>
                </td>
                <td>
                    <h1>Crear Profesores</h1>
                </td>
            </tr>
        </table>



    </div>


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('store_profesores_path') }}" method="POST">

        {{ csrf_field() }}

        <div class="from-group">
            <label for="codigo">Codigo:</label>
            <input type="text" name="codigo" class="form-control" value="{{ old('codigo') }}">
        </div>


        <div class="from-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}">
        </div>

        <div class="from-group">
            <label for="carrera">Nota de Encuesta:</label>
            <input type="text" name="notaEncuesta" class="form-control" value="{{ old('notaEncuesta') }}">
        </div>

        <div class="from-group">
            <button type="submit" class="btn btn-primary">Crear Profesor</button>
        </div>
    </form>

</div>
</body>
</html>