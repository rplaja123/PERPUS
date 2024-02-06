<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Bumida') }}</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <style>
        .d-flex {
            display: flex !important;
        }
        .mr-3{
            margin-right: 10rem !important;
        }
        .col-md-4 {
            flex: 0 0 33.3333333333%;
            max-width: 33.3333333333%;
        }
        .col-md-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }
    </style>
</head>

<body>
    <div id="app">
        <div class="content">
            @yield('content')
        </div>
    </div>

</body>

</html>