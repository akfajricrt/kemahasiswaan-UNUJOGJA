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
              @foreach ($items as $item)
              <a href="{{ $item->url_ukm }}" class="list-group-item list-group-item-action" target="_blank">
                {{$item->forUkm->nama_ormawa}}
              </a>
              @endforeach
              <a href="#" class="list-group-item list-group-item-action"></a>
            </div>
          </div>

        </div>
        <div class="col-lg-6">
          <div>
            <h5 class="pl-3">Himpunan Mahasiswa Prodi</h5>
            <div class="list-group list-group-flush">
              <div class="list-group list-group-flush">
                @foreach ($organizations as $organization)
                <a href="{{ $organization->url_hmp }}" class="list-group-item list-group-item-action" target="_blank">
                  {{$organization->forHmp->nama_ormawa}}</a>
                @endforeach
                <a href="#" class="list-group-item list-group-item-action"></a>
              </div>
              <a href="#" class="list-group-item list-group-item-action"></a>


            </div>

          </div>

        </div>
      </div>

    </div>
  </section>
 </main>   
@endsection