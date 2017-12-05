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
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('update_post_path'), ['post' => $post->id] }}" method="POST">

        {{ csrf_field() }}

        {{ method_field('PUT') }}

        <div class="from-group">
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control" value="{{ $post->title }}">
        </div>


        <div class="from-group">
            <label for="description">Description:</label>
            <textarea rows="5" name="description" class="form-control">{{ $post->description }}</textarea>
        </div>

        <div class="from-group">
            <label for="url">Url:</label>
            <input type="text" name="url" class="form-control" value="{{ $post->url }}">
        </div>

        <div class="from-group">
            <button type="submit" class="btn btn-primary">Edit Post</button>
        </div>
    </form>


</div>
</body>
</html>