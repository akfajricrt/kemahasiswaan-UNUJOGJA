@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data Prestasi Mahasiswa</h1>

        </div>

        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
				
        @endif
				<div class="card shadow">
					<div class="card-body">
						<form action="{{ route('prestation.store')}}" method="post" enctype="multipart/form-data">
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
								<label for="prodi">Prodi</label>
								<input type="text" class="form-control" name="prodi" placeholder="Prodi/Jurusan" value="{{ old('prodi')}}">
							</div>
							<div class="form-group">
								<label for="no_hp">No HP</label>
								<input type="number" class="form-control" name="no_hp" placeholder="No. HP" value="{{ old('no_hp')}}">
							</div>
							<div class="form-group">
								<label for="nama_acara">Nama Acara/Kegiatan</label>
								<input type="text" class="form-control" name="nama_acara" placeholder="Nama Acara/ Kegiatan" value="{{ old('nama_acara')}}">
							</div>
							<div class="form-group">
								<label for="institusi_pembuat_acara">Penyelenggara Acara</label>
								<input type="text" class="form-control" name="Penyelenggara Acara" placeholder="Institusi Pembuat Acara" value="{{ old('institusi_pembuat_acara')}}">
							</div>
							<div class="form-group">
								<label for="peringkat_perlombaan">Peringkat Kejuaraan</label>
								<input type="text" class="form-control" name="peringkat_perlombaan" placeholder="Peringkat Kejuaraan" value="{{ old('peringkat_perlombaan')}}">
							</div>
							<div class="form-group">
								<label for="departure_date">Tanggal Pelaksanaan</label>
								<input type="date" class="form-control" name="tanggal_pelaksanaan" placeholder="Tanggal Pelaksanaan" value="{{ old('tanggal_pelaksanaan')}}">
							</div>
							
							<div class="form-group">
								<label for="sertifikat">Sertifikat/Surat Tugas/Surat Rekomandasi</label>
								<input type="file" class="form-control" name="sertifikat" placeholder="Tanggal Pelaksanaan" value="{{ old('sertifikat')}}">
							</div>
							<div class="form-group">
								<label for="dokumentasi_acara">Dokumentasi Acara</label>
								<input type="file" class="form-control" name="dokumentasi_acara" placeholder="Tanggal Pelaksanaan" value="{{ old('dokumentasi_acara')}}">
							</div>
							<button type="submit" class="btn btn-primary btn-block">Simpan</button>
						</form>
					</div>
			</div>


    </div>
    <!-- /.container-fluid -->
    
@endsection