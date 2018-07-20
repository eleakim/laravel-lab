<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>

<body class="theme-red">

    @include('admin.partials.loader')
    
    @include('admin.partials.search')    

    @include('admin.partials.topbar')

    @include('admin.partials.sidebar')

    @yield('content')

    <script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>
