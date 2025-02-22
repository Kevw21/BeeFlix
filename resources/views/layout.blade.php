<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beeflix</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="icon" href="{{ asset('storage/images/favicon.ico') }}" type="image/x-icon">
</head>
<body>
    <div class="container">
        <div class="row">
            @include('navbar')
        </div>
        <div class="row">
            <div class="col">@yield('content')</div>
        </div>
    </div>
</body>
<script src={{ asset('js/bootstrap.bundle.min.js') }}></script>
</html>
