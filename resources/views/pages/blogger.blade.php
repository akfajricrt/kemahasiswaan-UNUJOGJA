@extends('layouts.blog')
@section('title','Berita')
     


 @section('content')
 <main>
     <!-- category Blog -->
  <section class="categori-2 mb-3 ">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent p-0 mb-5">
          <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('category')}}">Category</a></li>
          <li class="breadcrumb-item breadcrumb-item-bold text-dark text-bold active" aria-current="page">Pelantikan UKM
            dan HMP UNU Yogyakarta
          </li>
        </ol>
      </nav>
      <div class="row justify-content-center">

        <div class="col-lg-8">
          <h4>Pelantikan UKM dan HMP UNU Yogyakarta</h4>
          <p class="text-secondary" style="font-size: 12px;">Di publish oleh : <span
              style="color: black; font-weight:500;">Ahmad Khoirul Fajri
            </span><span>tanggal 29
              Januari 2021</span></p>
          <div>
            <img src="{{ url('frontend/img/blog/3.jpg')}}" alt="" width="100%">
            <p class="mt-4 text-secondary">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique
              repudiandae
              numquam
              debitis
              praesentium suscipit ratione, perspiciatis, voluptates incidunt dolore, sint et reprehenderit minima odit
              itaque nobis eos quisquam atque. Perferendis. Contrary to popular belief, Lorem Ipsum is not simply random
              text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
              Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more
              obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in
              classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and
              1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC.
              This book is a treatise on the theory of ethics, <br>very popular during the Renaissance. The first line
              of
              Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

              The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections
              1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact
              original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
          </div>

          <div class="text-center pt-3 pb-5" style="margin-bottom: 100px;">
            <p>Share to</p>
            <a href="https://www.facebook.com/share.php?u=target_link" target="_blank" class="mr-2">
              <img src="{{ url('frontend/img/social/fb.png')}}">
            </a>
            <a href="https://twitter.com/intent/tweet?url=target_link" target="_blank" class="mr-2">
              <img src="{{ url('frontend/img/social/tw.png')}}">
            </a>
            <a href="instagram.com">
              <img src="{{ url('frontend/img/social/ig.png')}}">
            </a>
          </div>

        </div>
        <div class="col-lg-4 p-lg-5">
          <h5>RECENT POST</h5>
          <div class="card mt-4" style="width: 20rem;">
        <a href="{{ Route('blog')}}"><img src="{{ url('frontend/img/blog/2.jpg')}}" class="card-img-top" alt="..." style=" height: 150px;"></a>
            <div class="card-body">
              <a href="#">
                <h5 class="card-title text-title-category">Card title</h5>
              </a>
              <p class="card-text category-text" style="color: #5F5F5F; font-size:12px;">Acara Pelatikan
                ORMAWA UNU Yogyakarta dilaksanakan pada hari Rabu Tanggal 27 Januari 2021 Di AULA UNU
                Yogyakarta bersama ....</p>

            </div>
          </div>
          <div class="card mt-4" style="width: 20rem;">
            <a href="#"><img src="{{ url('frontend/img/blog/4.jpg')}}" class="card-img-top" alt="..." style=" height: 150px;"></a>
            <div class="card-body">
              <a href="#">
                <h5 class="card-title text-title-category">Card title</h5>
              </a>
              <p class="card-text category-text" style="color: #5F5F5F; font-size:12px;">Acara Pelatikan
                ORMAWA UNU Yogyakarta dilaksanakan pada hari Rabu Tanggal 27 Januari 2021 Di AULA UNU
                Yogyakarta bersama ....</p>

            </div>
          </div>


        </div>
      </div>



    </div>

  </section>
  <!-- akhir kategori blog -->
 </main>

     
 @endsection

