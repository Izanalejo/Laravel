<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Ritmo y Movimiento</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Inici</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/serveis') }}">Serveis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/about') }}">Sobre nosaltres</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contacte.pagina') }}">Contacte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/management/estadistiques') }}">Estadístiques</a>
        </li>
      </ul>
      <a class="navbar-brand mx-auto" style="color: white">WEB CORPORATIVA DE LARAVEL</a>
    </div>
  </div>
</nav>