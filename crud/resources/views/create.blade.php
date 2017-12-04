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
    <form action="(( route('store_post_path') ))" method="POST">

        <div class="from-group">
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control" value="">
        </div>


        <div class="from-group">
            <label for="description">Description:</label>
            <textarea rows="5" name="description" class="form-control"></textarea>
        </div>

        <div class="from-group">
            <label for="url">Url:</label>
            <input type="text" name="url" class="form-control" value="">
        </div>

        <div class="from-group">
            <button type="submit" class="btn btn-primary">Create Post</button>
        </div>
    </form>

</div>
</body>
</html>