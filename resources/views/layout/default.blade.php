<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>@yield('page_title')</title>
</head>
<body>
    <header>
        <a href="{{ route('comics.index') }}">Vai a tutti i tuoi fumetti</a> <br>
        <a href="{{ route('comics.create') }}">Aggiungi un nuovo fumetto</a>
    </header>

    <main>
        @yield('content') 
    </main>
    
</body>
</html>