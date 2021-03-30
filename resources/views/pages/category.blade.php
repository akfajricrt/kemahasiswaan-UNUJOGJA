@extends('layouts.blog')

@section('title', 'Blog Kategori')
    
@section('content')
    <!-- category 2 -->
  <section class="categori-2 mb-3 ">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-4">
          <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
          <li class="breadcrumb-item breadcrumb-item-bold text-dark text-bold active" aria-current="page">Blog
          </li>
        </ol>
      </nav>


      <div class="row">
        <div class="col mb-3 text-header-category">
          <h3>Berita Kegiatan ORMAWA UNU Yogyakarta
          </h3>
          <p>Dapatkan informasi yang lebih akurat</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-5">
          <figure class="figure">
            <img src="{{ url('frontend/img/blog/3.jpg')}}" class="figure-img img-fluid rounded" alt="...">
            <figcaption class="figure-caption">A caption for the above image.</figcaption>
          </figure>
        </div>
        <div class="col-lg-7 col-sm-2 text-blog">
          <a href="{{ route('blog')}}">
            <h5 class=" text-title-category">UKM dan HMP UNU Yogyakarta Resmi Dilantik</h5>
          </a>
          <p>Wakil Rektor III Kemahasiswaan dan Kerjasama, DR.
            Senawi, MP melantik 29 Unit Kegiatan Mahasiswa (UKM) dan Himpunan Mahasiswa Program Studi (HMP) di Aula
            Utama Universitas Nahdlatul Ulama Yogyakarta pada Kamis, 27 Januari 2021. Masing-masing organisasi mahasiswa
            ini mengirimkan satu perwakilannya untuk menghadiri kegiatan ini secara luring dan diikuti oleh anggota yang
            lainnya secara daring melalui Zoom Meeting. di beritakan dari situs LPM UNU Yogyakarta</p>

          <a href="" class="btn btn-success">Selengkapnya</a>
        </div>
      </div>
    </div>

  </section>
  <!-- categori -->
  <section class="category mt-5">

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 ">
          <div class="card mt-4" style="width: 20rem;">
            <div class="inner">
              <a href="{{ route('blog')}}"><img src="{{ url('frontend/img/blog/6.jpg')}}" class="card-img-top" alt="..." style=" height: 230px;"></a>
            </div>

            <div class="card-body">
              <a href="#">
                <h5 class="card-title text-title-category">UKM dan HMP UNU Yogyakarta Resmi Dilantik</h5>
              </a>
              <p class="card-text category-text" style="color: #5F5F5F; font-size:12px;">Acara Pelatikan
                ORMAWA UNU Yogyakarta dilaksanakan pada hari Rabu Tanggal 27 Januari 2021 Di AULA UNU
                Yogyakarta bersama ....</p>

            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 ">
          <div class="card mt-4" style="width: 20rem;">
            <div class="inner">
              <a href="{{ route('blog')}}"><img src="{{ url('frontend/img/blog/4.jpg')}}" class="card-img-top" alt="..." style=" height: 230px;"></a>
            </div>

            <div class="card-body">
              <a href="#">
                <h5 class="card-title text-title-category">UKM dan HMP UNU Yogyakarta Resmi Dilantik</h5>
              </a>
              <p class="card-text category-text" style="color: #5F5F5F; font-size:12px;">Acara Pelatikan
                ORMAWA UNU Yogyakarta dilaksanakan pada hari Rabu Tanggal 27 Januari 2021 Di AULA UNU
                Yogyakarta bersama ....</p>

            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 ">
          <div class="card mt-4" style="width: 20rem;">
            <div class="inner">
              <a href="#"><img src="{{ url('frontend/img/blog/5.jpg')}}" class="card-img-top" alt="..." style=" height: 230px;"></a>
            </div>

            <div class="card-body">
              <a href="#">
                <h5 class="card-title text-title-category">UKM dan HMP UNU Yogyakarta Resmi Dilantik</h5>
              </a>
              <p class="card-text category-text" style="color: #5F5F5F; font-size:12px;">Acara Pelatikan
                ORMAWA UNU Yogyakarta dilaksanakan pada hari Rabu Tanggal 27 Januari 2021 Di AULA UNU
                Yogyakarta bersama ....</p>

            </div>
          </div>
        </div>

      </div>
    </div>

  </section>
  <!-- akhir category -->
    
@endsection