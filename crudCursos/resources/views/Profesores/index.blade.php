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
            <h1>CRUD de Profesores</h1>
        </div>
        <div class = "row" >
            <div class = "col-md-12"></div>
            <h2>
                <a href="{{ route('index_path') }}"
                class = "btn btn-info">Regresar</a>
            </h2>
        </div>
        <div class = "row" >
            <div class = "col-md-12"></div>
            <h2>
            <a href="{{ route('create_profesores_path') }}"
               class = "btn btn-info">Crear</a>
            </h2>
        </div>
        <div class = "row" >
            <div class = "col-md-12"></div>
             <h3>
            <table border=2 cellspacing=0 cellpadding=10 bordercolor="666633" class="tabla">
                <tr>
                    <td> Codigo</td>
                    <td> Nombre</td>
                    <td> Nota de Encuesta</td>
                </tr>
                @foreach($objetos as $objeto)
                    <tr>
                        <td>{{ $objeto->codigo }}

                        </td>
                        <td>{{ $objeto->nombre }}</td>
                        <td>{{ $objeto->notaEncuesta }}</td>
                        <td><a href="{{ route('edit_profesores_path', ['id' => $objeto->id] ) }}"
                               class = "btn btn-info">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('delete_profesores_path', ['id' => $objeto->id]) }}"
                                  method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger">Eliminar </button>
                            </form>
                        </td>
                    </tr>

                @endforeach
            </table>
            </h3>
            {{ $objetos->render() }}

    </div>
</div>
</body>
</html>