<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <title>@yield('titol') - Web Corporativa</title> 
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body style=" background: linear-gradient(90deg, #74f8ffff, #00cde0fd); ">
    <header>
        @include('partials.nav')
    </header>

    <x-alert type="success" title="Operació correcta">
        El registre s'ha guardat correctament
    </x-alert>
    <main style="padding: 60px"> @yield('contingut') </main>
    @include('partials.footer')
</body>

</html>
