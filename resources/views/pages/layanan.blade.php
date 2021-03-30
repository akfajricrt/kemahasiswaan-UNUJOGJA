@extends('layouts.app')

@section('title','Layanan UNU')
    
@section('content')
<main>
    <!-- jumbotron breancrumb -->
  <section class="jumbotron">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mt-5">
          <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
          <li class="breadcrumb-item breadcrumb-item-bold text-dark active" aria-current="page">Layanan</li>
        </ol>
      </nav>
    </div>

  </section>
  <!-- jumbotron breancrumb -->

  <!-- layanan -->
  <section class="layanan">
    <div class="container">
      <div class="card p-2 card-layanan" style="width: 100%;">
        <div class="header-layanan card-body">
          <h4>FORMULIR KELUHAN</h4>
          <p>silahkan sampaikan kendala masing-masing untuk diselesaikan</p>
          @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
          @endif
          <div class="mt-5">
            <form action="{{ url('/tembus')}}" method="post">
              @csrf
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" placeholder="Input Alamat Email Anda" value="{{ old('email')}}">
                <!-- <small id="emailHelp" class="form-text text-muted">Well never share your email with anyone else.</small> -->
              </div>
              <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama_lengkap" 
                  placeholder="Nama Lengkap" value="{{ old('nama_lengkap')}}">
              </div>
              <div class="form-group">
                <label for="no_hp">Nomor HP (Whatsapp)</label>
                <input type="number" class="form-control" name="no_hp"
                  placeholder="Nomor HP / Whatsapp" value="{{ old('no_hp')}}">
              </div>
              <div class="form-group">
                <label for="nim">NIM</label>
                <input type="number" class="form-control" name="nim" placeholder="NIM" value="{{ old('nim')}}">
              </div>

              <div class="text-select form-group">
                <label for="prodi">PRODI</label>
                <select class="custom-select mr-sm-2" name="prodi" value="{{ old('prodi')}}">
                  <option selected class="select-prodi"> -- Pilih --</option>
                  <option value="Studi Islam Interdisipliner">Studi Islam Interdisipliner</option>
                  <option value="Pendidikan guru sekolah dasar">Pendidikan guru sekolah dasar</option>
                  <option value="Pendidikan Bahasa Inggris">Pendidikan Bahasa Inggris</option>
                  <option value="Informatika">Informatika</option>
                  <option value="Teknik elektro">Teknik elektro </option>
                  <option value="eknik Komputer">Teknik Komputer</option>
                  <option value="Farmasi">Farmasi</option>
                  <option value="Teknologi Hasil Pertanian">Teknologi Hasil Pertanian</option>
                  <option value="Agribisnis">Agribisnis</option>
                  <option value="Managemen">Managemen</option>
                  <option value="Akutansi">Akutansi</option>
                </select>
              </div>
              <div class="form-group">
                <label for="kategori_keluhan">Kategori Keluhan</label>
                <select class="custom-select mr-sm-2" name="kategori_keluhan" value="{{ old('kategori_keluhan')}}">
                  <option selected>-- Pilih --</option>
                  <option value="Kemahasiswaan">Kemahasiswaan</option>
                  <option value="Perkuliahan">Perkuliahan</option>
                  <option value="Beasiswa">Beasiswa</option>
                  <option value="Dosen">Dosen</option>
                  <option value="Sarana Prasaran">Saran dan Prasarana</option>
                  <option value="email">Email</option>
                  <option value="Sistem Informasi Akademik (APP)">Sistem Informasi Akademik (APP)</option>
                </select>

              </div>
              <div class="form-group">
                <label for="permasalahan">Permasalahan</label>
                <textarea class="form-control" name="permasalahan" rows="4"
                  placeholder="Permasalahan" value="{{ old('permasalahan')}}"></textarea>
              </div>
              <button class="btn btn-primary mt-4 px-4 py-2" type="submit">Kirim Keluhan</button>
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir layanan -->
 </main>   
@endsection