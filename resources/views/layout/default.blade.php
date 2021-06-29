<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>@yield('page_title')</title>
</head>
<body>

    <div class="container">
        <header>
            <div class="d-flex">
                <a href="{{ route('comics.index') }}" class="btn btn-outline-primary m-3">Vai a tutti i tuoi fumetti</a> <br>
                <a href="{{ route('comics.create') }}" class="btn btn-outline-primary m-3">Aggiungi un nuovo fumetto</a>
            </div>
        </header>

        <main>
            @yield('content') 
        </main>
    </div>
    
</body>
</html>