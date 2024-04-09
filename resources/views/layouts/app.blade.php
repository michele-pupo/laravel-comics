<!DOCTYPE html>
<html lang="it-IT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>

    @vite('resources/js/app.js')
</head>
<body>
    
    @include('partials/nav')

    @include('partials/jumbotron')

    @include('partials/main')

    @include('partials/blueBundles')

    @include('partials/footerLinks')

    @yield('content')

</body>
</html>