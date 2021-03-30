@extends('layouts.app')

@section('title','Prestasi Mahasiswa')

@section('content')
<main>
        <!-- jumbotron breancrumb -->
        <section class="jumbotron">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mt-5">
                        <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="{{ route('prestasi')}}">prestasi</a></li>
                        <li class="breadcrumb-item breadcrumb-item-bold text-dark active" aria-current="page">Input Prestasi</li>
                    </ol>
                </nav>
            </div>
    
        </section>
        <!-- jumbotron breancrumb -->
    
        <!-- Create prestasi -->
        <section class="layanan">
            <div class="container">
                <div class="card p-2 card-layanan" style="width: 100%;">
                    <div class="prestasi-header card-body">
                        <h4>PENDAFTARAN PRESTASI</h4>
                        <p>Silahkan isikan data prestasi anda yang pernah anda ikuti</p>
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
                            <form action="{{ url('/success') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                  <label for="nama_lengkap">Nama Lengkap</label>
                                  <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" value="{{ old('nama_lengkap')}}">
                                </div>
                                <div class="form-group">
                                  <label for="nim">NIM</label>
                                  <input type="number" class="form-control" name="nim" placeholder="NIM" value="{{ old('nim')}}">
                                </div>
                                <div class="form-group">
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
                                  <label for="no_hp">Nomor HP (Whatsapp)</label>
                                  <input type="number" class="form-control" name="no_hp" placeholder="No. HP" value="{{ old('no_hp')}}">
                                </div>
                                <div class="form-group">
                                  <label for="nama_acara">Nama Acara/Kegiatan</label>
                                  <input type="text" class="form-control" name="nama_acara" placeholder="Nama Acara/ Kegiatan" value="{{ old('nama_acara')}}">
                                </div>
                                <div class="form-group">
                                  <label for="institusi_pembuat_acara">Penyelenggara Acara</label>
                                  <input type="text" class="form-control" name="institusi_pembuat_acara" placeholder="Penyelenggara Acara" value="{{ old('institusi_pembuat_acara')}}">
                                </div>
                                <div class="form-group">
                                  <label for="peringkat_perlombaan">Peringkat Kejuaraan</label>
                                  <input type="text" class="form-control" name="peringkat_perlombaan" placeholder="Peringkat Kejuaraan" value="{{ old('peringkat_perlombaan')}}">
                                </div>
                                <div class="form-group">
                                  <label for="tanggal_pelaksanaan">Tanggal Pelaksanaan</label>
                                  <input type="date" class="form-control" name="tanggal_pelaksanaan" placeholder="Tanggal Pelaksanaan" value="{{ old('tanggal_pelaksanaan')}}">
                                </div>
                                <div>
                                  <label for="sertifikat" class="form-label">Sertifikat/Surat Tugas/Surat
                                      Rekomandasi</label>
  
                                  <input type="file" class="form-control" name="sertifikat" value="{{ old('sertifikat')}}">
  
  
                              </div>
                              <div>
                                  <label for="dokumentasi_acara" class="form-label">Dokumentasi Acara</label>
                                  <input type="file" class="form-control"  name="dokumentasi_acara" value="{{ old('dokumentasi_acara')}}" >
                              </div>
                              <button class="btn btn-primary mt-5 px-4 py-2" type="submit">Kirim</button>
                        </form>

                          
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir Create Prestasi -->
</main>
    
@endsection


{{-- @push('addon-style')
<link rel="stylesheet" href="frontend/css/gijgo.min.css">
@endpush

@push('addon-script')
<script src="frontend/js/gijgo.min.js"></script>
<script>
    $(document).ready(function () {
        $('.datepicker').datepicker({
            uilibrary: 'bootstrap4',
            icons: {
                rightIcon: '<img src="{{ url('frontend/img/ic_doe.png')}}"/>'

            }
        })

    });
</script>
@endpush --}}
