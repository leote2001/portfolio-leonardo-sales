<header class="d-flex justify-content-between">
  <button class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    {{__("Idioma")}}
  </button>
  <ul class="dropdown-menu">    
    @foreach($supportedLocales as $locale_name => $available_locale)
    @if($available_locale === $currentLocale)
<li>
  <span class="dropdown-item"><b>{{__("$locale_name")}}</b></span>
</li>
    @else
    <li>
      <a href="{{route("set-locale", $available_locale)}}" class="dropdown-item">{{__("$locale_name")}}</a>
    </li>
    @endif
    @endforeach    
  </ul>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route("home")}}">Portfolio - Leonardo Sales</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#sobremi">{{__("Sobre mí")}}</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{__("Proyectos")}}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item nav-link" href="#proyecto1">Sodati (Front)</a></li>
              <li><a class="dropdown-item nav-link" href="#proyecto2">Sodati (Back)</a></li>
              <li><a class="dropdown-item nav-link" href="#proyecto3">Perritos</a></li>
              <li><a class="dropdown-item nav-link" href="#proyecto4">Ahorcado</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contacto">{{__("Contacto")}}</a>
          </li>
          </ul>
      </div>
    </div>
  </nav>
  <h1>{{__("Bienvenido!")}}</h1>
</header>