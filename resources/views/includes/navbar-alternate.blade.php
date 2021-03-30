
  <!-- navbar -->
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
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('home')}}">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('category')}}">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('agenda')}}">Agenda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>


      </div>
    </div>
  </nav>
  <!-- akhir navbar -->