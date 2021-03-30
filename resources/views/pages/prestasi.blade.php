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
                        <li class="breadcrumb-item breadcrumb-item-bold text-dark active" aria-current="page">Prestasi</li>
                    </ol>
                </nav>
            </div>
    
        </section>
        <!-- jumbotron breancrumb -->
    
        <!-- layanan -->
        <section class="layanan">
            <div class="container">
                <div class="card p-2 card-layanan" style="width: 100%;">
                    <div class="prestasi-header card-body">
                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <h4>DATA PRESTASI MAHASISWA</h4>
                            <p>Berikut data mahasiswa berprestasi UNU Yogyakarta</p>
                            </div>
                            @if (Auth::user() && Auth::user()->roles == 'USER')
                                <div class="col-md-6 text-md-right">
                                    <a href="{{route('prestasi.create')}}" class="btn btn-sm btn-info">Inputkan Prestasimu</a>
                                </div> 
                            @endif
                            
                            
                        </div>
                        
                        <div class="mt-3 table-responsive">

                            <table class="table" colspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Lengkap</th>
                                        <th>NIM</th>
                                        <th>Prodi</th>
                                        <th>Kategori Prestasi</th>
                                        <th>Ketegori Peringkat</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($prestasi as $prestasiku)
                                    <tr>
                                        <td>{{$prestasiku->id}}</td>
                                        <td>{{$prestasiku->nama_lengkap}}</td>
                                        <td>{{$prestasiku->nim}}</td>
                                        <td>{{$prestasiku->prodi}}</td>
                                        <td>{{$prestasiku->nama_acara}}</td>
                                        <td>{{$prestasiku->peringkat_perlombaan}}</td>
                                        
                                        
                                        
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Data Kosong</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                        </table>

                          
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir layanan -->
</main>
    
@endsection


