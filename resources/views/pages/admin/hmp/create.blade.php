@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah HMP</h1>

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
						<form action="{{ route('hmp.store')}}" method="post">
							@csrf
							<div class="form-group">
								<label for="organization_id">URL Website hmp</label>
								<select name="organization_id" required class="form-control">
									<option value="">Pilih HMP</option>
									@foreach ($organizations as $organization)
										<option value="{{ $organization->id}}">
											{{$organization->nama_ormawa}}
										</option>
											
									@endforeach


								</select>
								
							</div>
							<div class="form-group">
								<label for="url_hmp">URL Website hmp</label>
								<input type="text" class="form-control" name="url_hmp" placeholder="URL Website HMP" value="{{ old('url_hmp')}}">
							</div>
							<button type="submit" class="btn btn-primary btn-block">Simpan</button>
						</form>
					</div>
			</div>


    </div>
    <!-- /.container-fluid -->
    
@endsection