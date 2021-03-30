@extends('layouts.app')

@section('title','Organisasi Mahasiswa')
    
@section('content')
<main>
     <!-- list ormawa -->
  <section class="ormawa">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-ormawa bg-transparent  mb-5">
          <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
          <li class="breadcrumb-item breadcrumb-item-bold text-dark text-bold active" aria-current="page">
            Organisasi
          </li>
        </ol>
      </nav>

      <div class="row">
        <div class="col-lg-6">
          <div>
            <h5 class="pl-3">Unit Kegiatan Mahasiswa</h5>

            <div class="list-group list-group-flush">
              <a href="#" class="list-group-item list-group-item-action">UKM Penelitian UNU Yogyakarta</a>
              <a href="#" class="list-group-item list-group-item-action">UKM JQH IAC UNU Yogyakarta</a>
              <a href="#" class="list-group-item list-group-item-action">UKM Koperasi Mahasiswa Yogyakarta</a>
              <a href="#" class="list-group-item list-group-item-action">UKM Seni Musik UNU Yogyakarta</a>
              <a href="#" class="list-group-item list-group-item-action">UKM LPM UNU Yogyakarta</a>
              <a href="#" class="list-group-item list-group-item-action">UKM Korp Sukarela PMI UNU Yogyakarta</a>
              <a href="#" class="list-group-item list-group-item-action">UKM Tenis Meja UNU Yogyakarta</a>
              <a href="#" class="list-group-item list-group-item-action">UKM KOMPESAT UNU Yogyakarta</a>
              <a href="#" class="list-group-item list-group-item-action">UKM Fatayat UNU Yogyakarta</a>
              <a href="#" class="list-group-item list-group-item-action">UKM Kitab Kuning UNU Yogyakarta</a>
              <a href="#" class="list-group-item list-group-item-action">UKM Pramuka UNU Yogyakarta</a>
              <a href="#" class="list-group-item list-group-item-action">UKM Badminton UNU Yogyakarta</a>
              <a href="#" class="list-group-item list-group-item-action"></a>
            </div>
          </div>

        </div>
        <div class="col-lg-6">
          <div>
            <h5 class="pl-3">Himpunan Mahasiswa Prodi</h5>
            <div class="list-group list-group-flush">
              <a href="#" class="list-group-item list-group-item-action">HMP Agribisnis UNU Yogyakarta</a>
              <a href="#" class="list-group-item list-group-item-action">HMP Akutansi UNU Yogyakarta</a>
              <a href="#" class="list-group-item list-group-item-action">HMP Studi Islam Interdisipliner UNU
                Yogyakarta</a>
              <a href="#" class="list-group-item list-group-item-action">HMP Teknologi Hasil Pertanian UNU
                Yogyakarta</a>
              <a href="#" class="list-group-item list-group-item-action">HMP Teknik Elektro UNU Yogyakarta</a>
              <a href="#" class="list-group-item list-group-item-action">HMP Informatika UNU Yogyakarta</a>
              <a href="#" class="list-group-item list-group-item-action"></a>


            </div>

          </div>

        </div>
      </div>

    </div>
  </section>
 </main>   
@endsection