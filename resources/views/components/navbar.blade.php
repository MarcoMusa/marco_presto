<nav class="navbar navbar-expand-lg bg-nav fixed-top shadow">
    <div class="container-fluid">
      <a class="navbar-brand ms-5 text-chromeyellow fw-bolder text-shadow ms-5" href="#"><i class="fas fa-shopping-bag"></i> PRESTO.it</a>

      {{-- SEZIONE BANDIERINE-MULTILINGUA --}}

        {{-- ITALIANO --}}
        <form method="POST" action="{{route('locale' , 'it')}}">
        @csrf
            <a href="" class="nav-link">
                <span class="flag-icon flag-icon-it rounded-circle"></span>
            </a>
        </form>

        {{-- INGLESE --}}
        <form method="POST" action="{{route('locale' , 'en')}}">
        @csrf
            <a href="" class="nav-link">
                <span class="flag-icon flag-icon-gb rounded-circle"></span>
            </a>
        </form>

        {{-- SPAGNOLO --}}
        <form method="POST" action="{{route('locale' , 'es')}}">
        @csrf
            <a href="" class="nav-link">
                <span class="flag-icon flag-icon-es rounded-circle"></span>
            </a>
         </form>

         @if (Auth::user()->is_revisor)

            <a href="{{route('revisor.home')}}" class="nav-item px-5">

                <i class="fas fa-laptop-house text-chromeyellow fs-4"></i>

                {{-- <span class="badge badge-pill badge-warning">{{

                \App\Announcement::TopBeRevisionedCount()

                }}</span> --}}

            </a>

         @endif



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
