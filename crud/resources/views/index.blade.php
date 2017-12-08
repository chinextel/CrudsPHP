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
            <h1>CRUD</h1>
        </div>
        <div class = "row" >
            <div class = "col-md-12"></div>
            <h2>
                <a href="{{ route('create_post_path') }}"
                   class = "btn btn-info">Create</a>
            </h2>
        </div>
        <div class = "row" >
            <div class = "col-md-12"></div>

            @foreach($objetos as $item)
                <h3>
                    {{ $item->title }}
                    <small class="pull-right">
                        <a href="{{ route('edit_post_path', ['id' => $item->id]) }}"
                           class = "btn btn-info">Edit</a>
                        <form action="{{ route('delete_post_path', ['post' => $item->id]) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button type="submit" class='btn btn-danger'>Delete</button>
                        </form>
                    </small>
                </h3>

                <h4>{{ $item->description }}</h4>
            @endforeach

            {{ $objetos->render() }}

        </div>
    </div>
</body>
</html>