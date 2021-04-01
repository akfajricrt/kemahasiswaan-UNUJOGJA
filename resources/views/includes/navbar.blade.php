<nav class="navbar navbar-expand-lg bg-light navbar-light fixed-top shadow ">
    <div class="container">
      <a class="navbar-brand js-scroll" href="{{ route('home')}}">
        <img src="{{ url('frontend/img/logo.png')}}" alt="" style="width: 50px;">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav text-uppercase mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('ormawa')}}">Organisasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('agenda')}}">Agenda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('layanan')}}">Layanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>

        <a href="{{ route('category')}}" class="blog nav-link btn text-white"><i class="fas fa-sign"></i>
          Blog</a>

        {{--  @guest
            <!-- Mobile button -->
            <form class="form-inline d-sm-block d-md-none">
              @csrf
              <button class="btn btn-login my-2 my-sm-0 text-info" type="button" onclick="event.preventDefault(); location.href='{{ url('login')}}'">
                Masuk
              </button>
            </form>
            <!-- Desktop Button -->
            <form class="form-inline my-2 my-lg-0 d-none d-md-block">
              <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4 text-info" type="button" onclick="event.preventDefault(); location.href='{{ url('login')}}'">
                Masuk
              </button>
            </form>
        @endguest  --}}

            <!-- Tombol keluar-->
          @auth
            
            <!-- Mobile button -->
            <form class="form-inline d-sm-block d-md-none" action="{{ url('logout')}}" method="POST">
              @csrf
              <button class="btn btn-login my-2 my-sm-0">
                Keluar
              </button>
            </form>
            <!-- Desktop Button -->
            <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout')}}" method="POST">
              @csrf
              <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
                Keluar
              </button>
            </form>
          @endauth
      
          
      </div>
    </div>
  </nav>