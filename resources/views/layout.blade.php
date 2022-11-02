<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Laravel | DC Comics</title>
</head>

<body>
    <header>
        @include('partials.header')
    </header>
    <main>
        <div class="cards-container">
            @yield('main-content')
        </div>
    </main>
    <footer>
        @include('partials.footer')
    </footer>
</body>

</html>
