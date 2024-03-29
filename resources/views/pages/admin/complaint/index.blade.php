@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Keluhan</h1>
						

            
        </div>

        
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0" >
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Email</th>
                                <th>Nama Lengkap</th>
                                <th>NO HP</th>
                                <th>NIM</th>
                                <th>Prodi</th>
                                <th>Kategori Keluhan</th>
                                <th>Permasalahan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->nama_lengkap }}</td>
                                <td>{{ $item->no_hp }}</td>
                                <td>{{ $item->nim }}</td>
                                <td>{{ $item->prodi }}</td>
                                <td>{{ $item->kategori_keluhan }}</td>
                                <td>{{ $item->permasalahan }}</td>
                                <th>
                                <a href="{{ route('complaint.edit', $item->id) }}" class="btn btn-info">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('complaint.destroy', $item->id) }}" method="POST" class="d-inline">
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
                                <td colspan="9" class="text-center">Data Kosong</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        


    </div>
    <!-- /.container-fluid -->
    
@endsection