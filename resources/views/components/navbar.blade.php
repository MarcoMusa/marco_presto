<nav class="navbar navbar-expand-lg bg-nav fixed-top shadow">
    <div class="container-fluid">
      <a class="navbar-brand ms-5 text-chromeyellow fw-bolder text-shadow ms-5" href="#"><i class="fas fa-shopping-bag"></i> PRESTO.it</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto me-5 mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active text-chromeyellow text-shadow" aria-current="page" href="{{route('homepage')}}">Home</a>
              </li>
            @guest
            <li class="nav-item">
                <a class="nav-link text-chromeyellow text-shadow" href="{{route('login')}}">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-chromeyellow text-shadow" href="{{route('register')}}">Registrati</a>
              </li>
              @else
          <li class="nav-item">
            <a class="nav-link text-chromeyellow text-shadow" href="#">Annunci</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-chromeyellow fw-bold text-shadow" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Benvenuto, {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item bg-yellow m-0" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout').submit();">Logout</a></li>
              <form method="POST" action="{{route('logout')}}" id="logout">
                @csrf
              </form>
            </ul>
          </li>
          @endguest
        </ul>
       </div>
    </div>
  </nav>
