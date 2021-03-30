@extends('layouts.app')

@section('title','Agenda Kegiatan')
    
@section('content')
<main>
     <!-- jumbotron breancrumb -->
  <section class="jumbotron">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mt-5">
          <li class="breadcrumb-item"><a href="home.html">Home</a></li>
          <li class="breadcrumb-item breadcrumb-item-bold text-dark active" aria-current="page">Agenda</li>
        </ol>
      </nav>
    </div>

  </section>
  <!-- jumbotron breancrumb -->

  <!-- Agenda -->
  <section class="agenda">
    <div class="container">
      <div class="card p-2 card-agenda" style="width: 100%;">
        <div class="text-agenda card-body">
          <h4>AGENDA KEGIATAN</h4>
          <p>Ayo Ikuti Setiap kegiatan di UNU Yogyakarta</p>
          <div class="fitur-agenda row mt-5">
            <div class="col-lg-6">
              <figure class="figure">
                <img src="frontend/img/blog/5.jpg" class="figure-img img-fluid rounded" alt="...">
                <figcaption class="figure-caption">A caption for the above image.</figcaption>
              </figure>
            </div>
            <div class="col-lg-6 col-sm-2">
              <h5>Regenerasi Kepengurusan UKM/Komunitas UNU Yogyakarta
              </h5>

              <p>Diselenggarakan Kemahasiswaan UNU Yogyakarta </p>
              <p>Kamis, 3 Des 2020 | Zoom Meeting </p>
              <a href="" class="btn btn-success">Selengkapnya</a>
            </div>
          </div>

          <div class="row fitur-agenda mt-5">
            <div class="col-lg-6">
              <figure class="figure">
                <img src="frontend/img/blog/6.jpg" class="figure-img img-fluid rounded" alt="...">
                <figcaption class="figure-caption">A caption for the above image.</figcaption>
              </figure>
            </div>
            <div class="col-lg-6 col-sm-2">
              <h5>Pengarahan Penerima PIP dan Bidikmisi
              </h5>

              <p>Diselenggarakan Kemahasiswaan UNU Yogyakarta </p>
              <p>Kamis, 7 Des 2020 | Zoom Meeting </p>
              <a href="" class="btn btn-success">Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- Akhir Agenda -->
 </main>   
@endsection