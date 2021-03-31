@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ubah Data Ormawa {{ $item->nama_ormawa}}</h1>

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
						<form action="{{ route('organization.update',$item->id)}}" method="post" enctype="multipart/form-data">
							@method('PUT')
							@csrf
							<div class="form-group">
								<label for="nama_ketua">Nama Ketua</label>
								<input type="text" class="form-control" name="nama_ketua" placeholder="Nama Ketua" value="{{$item->nama_ketua}}">
							</div>
							<div class="form-group">
								<label for="nama_ormawa">Nama Ormawa</label>
								<input type="text" class="form-control" name="nama_ormawa" placeholder="Nama Ormawa" value="{{$item->nama_ormawa}}">
							</div>
							<div class="form-group">
								<label for="tahun_sk">Tahun SK</label>
								<input type="number" class="form-control" name="tahun_sk" placeholder="Tahun SK" value="{{$item->tahun_sk}}">
							</div>
						
							<button type="submit" class="btn btn-primary btn-block">Simpan</button>
						</form>
					</div>
			</div>


    </div>
    <!-- /.container-fluid -->
    
@endsection