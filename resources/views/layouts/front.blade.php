<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name', 'Tartifly') }}</title>
    
    <link href="{{ asset('css/milligram/dist/milligram.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">
</head>
<body>

@include('layouts.nav')

<header>
    <div class="overlay"></div>
    <h1>Find the <strong><em>best prices</em></strong> to enjoy wonderful destinations.</h1>
</header>

<div class='container'>
    @yield('content')
</div>

</body>
</html>