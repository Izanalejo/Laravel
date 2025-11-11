<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <title>@yield('titol') - Web Corporativa</title> 
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <header>
        <h1>Web Corporativa Laravel</h1>
        <nav>
            <a href="{{ url('/') }}">Inici</a> | <a href="{{ url('/serveis') }}">Serveis</a> | <a
                href="{{ url('/about') }}">Sobre nosaltres</a> | <a href="{{ url('/contacte') }}">Contacte</a>
        </nav>
    </header>
    <main> @yield('contingut') </main>
    <footer>
        <p>{{ date('Y') }} - La meva empresa</p>
    </footer>
</body>

</html>
