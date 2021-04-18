@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Daftar Prestasi Mahasiswa</h1>
						<a href="{{ route('prestation.create')}}" class="btn btn-primary shadow-sm">
							<i class="fas fa-plus fa-sm text-white-50"></i>
							Tambah Prestasi Mahasiswa
					</a>

            
        </div>

        
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered"
                    cellspacing="0" >
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Lengkap</th>
                                <th>NIM</th>
                                <th>Prodi</th>
                                <th>NO HP</th>
                                <th>Nama Acara</th>
                                <th>Institusi Pelaksana Acara</th>
                                <th>Tanggal Pelaksanaan</th>
                                <th>Sertifikat</th>
                                <th>dokumentasi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nama_lengkap }}</td>
                                <td>{{ $item->nim }}</td>
                                <td>{{ $item->prodi }}</td>
                                <td>{{ $item->no_hp }}</td>
                                <td>{{ $item->nama_acara }}</td>
                                <td>{{ $item->institusi_pembuat_acara }}</td>
                                <td>{{ $item->tanggal_pelaksanaan }}</td>
                                <td><a href="{{ Storage::url($item->sertifikat)}}" class="btn btn-success">
                                    <i class="fas fa-eye"></i>
                                </a></td>
                                <td><a href="{{ Storage::url($item->dokumentasi_acara)}}" class="btn btn-success">
                                    <i class="fas fa-eye"></i>
                                </a></td>
                                
                
                                <th>
                                <a href="{{ route('prestation.edit', $item->id) }}" class="btn btn-info">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('prestation.destroy', $item->id) }}" method="POST" class="d-inline">
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