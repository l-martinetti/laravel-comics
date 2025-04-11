<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body>
    @include('partials.header')

    @yield('content')

    @include('partials.footer')
</body>

</html>
