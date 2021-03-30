@extends('layouts.success')

@section('content')
<div class="main-empty-3-7" style="font-family: 'Poppins', sans-serif;">    
    <div class="mx-auto d-flex align-items-center justify-content-center flex-column">
        <img class="img-empty-3-7" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Empty%20State/EmptyState3/Empty-3-9.png" alt="">                       
        <div class="text-center w-100">
            <h1 class="title-text-empty-3-7">Data sudah terkirim !!!</h1>
            <p class="d-none d-lg-block caption-text-empty-3-7">Terimakasih<br>
                Untuk Info selanjutnya nanti akan di infokan</p>
            <p class="d-block d-lg-none caption-text-empty-3-7">
                Terimakasih</p>
            <div class="d-flex justify-content-center">
                <a href="{{ route('home')}}" class="btn btn-empty-3-7 d-inline-flex">Back To home</a>
            </div>
        </div>
    </div>

</div>
  
@endsection