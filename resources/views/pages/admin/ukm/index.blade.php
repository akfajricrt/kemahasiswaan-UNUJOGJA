@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Daftar UKM</h1>
						<a href="{{ route('ukm.create')}}" class="btn btn-primary shadow-sm">
							<i class="fas fa-plus fa-sm text-white-50"></i>
							Tambah UKM
					</a>

            
        </div>

        
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0" >
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama UKM</th>
                                <th>Link Website UKM</th>
                                
                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->forUkm->nama_ormawa}}</td>
                                <td>{{ $item->url_ukm }}</td>
                                
                                
                               
                                
                
                                <th>
                                <a href="{{ route('ukm.edit', $item->id) }}" class="btn btn-info">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('ukm.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')

                                    <button class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                                </th>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="11" class="text-center">Data Kosong</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        


    </div>
    <!-- /.container-fluid -->
    
@endsection