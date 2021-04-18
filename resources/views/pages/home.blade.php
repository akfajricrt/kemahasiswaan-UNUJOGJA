@extends('layouts.app')

@section('title')
    Kemahasiswaan UNU Yogyakarta
    
@endsection

@section('content')
    <main>
        <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="data-slider" style="background-image: url(frontend/img/slide/2.jpg);">
                  <div class="carousel-overlay"></div>
                  <div class="carousel-caption">
                    <div class="container">
                      <h1 class="display-4">Selamat Datang di Kemahasiswaan<br><span class="font-weight-bold ">Universitas
                          Nahdlatul Ulama Yogyakarta
                        </span></h1>
                      <hr class="my-sm-3 my-md-5">
                      <p class="lead">BRIDGING | INNOVATION | CONTEXTUAL</p>
                      <a class="btn" href="https://unu-jogja.ac.id" role="button" target="_blank">WEB UNU</a>
                    </div>
                  </div>
                </div>
        
              </div>
              <div class="carousel-item">
                <div class="data-slider" style="background-image: url(frontend/img/slide/4.jpg);">
                  <div class="carousel-overlay"></div>
                  <div class="carousel-caption">
                    <div class="container">
                      <h1 class="display-4">Selamat Datang di Kemahasiswaan<br><span class="font-weight-bold ">Universitas
                          Nahdlatul Ulama Yogyakarta
                        </span></h1>
                      <hr class="my-sm-3 my-md-5">
                      <p class="lead">BRIDGING | INNOVATION | CONTEXTUAL</p>
                      <a class="btn" href="https://unu-jogja.ac.id" role="button" target="_blank">WEB UNU</a>
                    </div>
                  </div>
                </div>
        
              </div>
              
            </div>
        
          
        
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        
          <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner data-slider2">
             
              <div class="carousel-item active">
                <img src="{{ url('frontend/img/slide/2.jpg')}}" class="d-block w-100">
                
              </div>
              <div class="carousel-item ">
                <img src="{{ url('frontend/img/slide/4.jpg')}}" class="d-block w-100">
              
              </div>
              
            </div>
            
          </div>
        
          <div class="container">
            <div class="header-dataSlide text-center mt-5">
              <h1 class="display-4">Selamat Datang di Kemahasiswaan<br><span class="font-weight-bold ">Universitas
                Nahdlatul Ulama Yogyakarta
              </span></h1>
            <!-- <hr class="my-sm-2 my-md-5"> -->
            <p class="lead">BRIDGING | INNOVATION | CONTEXTUAL</p>
            <a class="btn" href="https://unu-jogja.ac.id" role="button" target="_blank">WEB UNU</a>
            </div>
          </div>
        
          <!-- akhir korosel -->
        
          <!-- beasiswa-->
          <section class="brands mt-5 mb-5">
            <div class="container ">
              <div class="row justify-content-center">
                <div class="col-5 col-sm-2 text-center " data-aos="fade-up" data-aos-duration="500">
                  <figure class="figure">
                    <a href="https://beasiswa.unu-jogja.ac.id/" target="blank"><img src="{{ url('frontend/img/scholarship.png')}}"
                        class="figure-img img-fluid" style="width: 80px;"></a>
                    <figcaption class=" figure-caption text-center pt-2">
                      <p>BEASISWA</p>
                    </figcaption>
                  </figure>
                </div>
                <div class="col-5 col-sm-2 text-center" data-aos="fade-up" data-aos-duration="1000">
                  <figure class="figure">
                    <a href="{{ route('kode-etik')}}" target="_blank"><img src="{{ url('frontend/img/fair.png')}}" class="figure-img img-fluid"
                        style="width: 80px;"></a>
                    <figcaption class=" figure-caption text-center pt-2">
                      <p>KODE ETIK MAHASISWA</p>
                    </figcaption>
                  </figure>
                </div>
                <div class="col-5 col-sm-2 text-center" data-aos="fade-up" data-aos-duration="1500">
                  <figure class="figure">
                    <a href="{{ route('prestasi')}}"><img src="{{ url('frontend/img/certificate.png')}}" class="figure-img img-fluid"
                        style="width: 80px;"></a>
                    <figcaption class=" figure-caption text-center pt-2">
                      <p>PRESTASI</p>
                    </figcaption>
                  </figure>
                </div>
                <div class="col-5 col-sm-2 text-center" data-aos="fade-up" data-aos-duration="1200">
                  <figure class="figure">
                    <a href="{{ route('tata-laksana-ormawa')}}" target="_blank"><img src="{{ url('frontend/img/people.png')}}" class="figure-img img-fluid"
                        style="width: 80px;"></a>
                    <figcaption class=" figure-caption text-center pt-2">
                      <p>TATA LAKSANA ORMAWA</p>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
        
          </section>
          <!-- beasiswa -->
        
          <!-- about -->
          <section class="about" id="about">
            <div class="container">
        
              <div class="card border-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-duration="500">
                      <figure class="figure">
                        <img src="{{ url('frontend/img/blog/4.jpg')}}" class="figure-img img-fluid" style="width: 550px;">
        
                      </figure>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
                      <h5 class="card-title text-uppercase font-weight-bold">TENTANG KAMI</h5>
                      <p class="card-text mt-4 card-bagian-text">Kami Kemahasiswaan Universitas
                        Nahdlatul Ulama
                        Yogyakarta. Menyajikan Informasi Seputar program dan Kegiatan kemahasiswaan serta pengaturan organisasi
                        yang ada di UNU Yogyakarta.
        
                        Kami berupaya untuk melahirkan Mahasantri berprestasi
                        yang menjunjung tinggi nilai-nilai Aswaja An-Nahdliyah dan mengamalkan akhlak santri serta berkhidmat
                        kepada jamaah melalui organisasi.
                      </p>
        
        
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- akhir about -->
        
        
          <!-- Ormawa -->
          <section class="ormawa">
            <div class="container ">
              <div class="row " >
                <div class="col-lg-3 col-md-2">
                  <h5 class=" ">Organisasi Mahasiswa Universitas Nahdlatul Ulama Yogyakarta</h5>
                </div>
                <div class="col-lg-9 col-md-4 col-sm-2 img-slide lazy">
                  <div class="items-img">
                    <img src="{{ url('frontend/img/organisasi/1.jpg')}}" alt="" class="img-fluid">
                  </div>
                  <div class="items-img">
                    <img src="{{ url('frontend/img/organisasi/2.jpg')}}" alt="" class="img-fluid">
                  </div>
                  <div class="items-img">
                    <img src="{{ url('frontend/img/organisasi/3.jpg')}}" alt="" class="img-fluid">
                  </div>
                  <div class="items-img">
                    <img src="{{ url('frontend/img/organisasi/4.jpg')}}" alt="" class="img-fluid">
                  </div>
                  <div class="items-img">
                    <img src="{{ url('frontend/img/organisasi/5.jpg')}}" alt="" class="img-fluid">
                  </div>
                  <div class="items-img">
                    <img src="{{ url('frontend/img/organisasi/6.jpg')}}" alt="" class="img-fluid">
                  </div>
                  <div class="items-img">
                    <img src="{{ url('frontend/img/organisasi/7.jpg')}}" alt="" class="img-fluid">
                  </div>
                  <div class="items-img">
                    <img src="{{ url('frontend/img/organisasi/1.jpg')}}" alt="" class="img-fluid">
                  </div>
                  
                </div>
                
              </div>
              
            </div>
          </section>
          <!-- akhir Ormawa -->
        
        
          <!-- quote -->
          <section class="quote">
            <div class="section-counter paralax-mf bg-image" style="background-image: url({{ url('frontend/img/blog/4.jpg')}}">
              <div class="overlay-mf"></div>
              <div class="container">
                <div class="simbol-quote">
                  <img src="{{ url('frontend/img/quote.png')}}" width="100px">
                </div>
                <div class="row justify-content-center">
                  <div class="col-lg-8 ">
                    <p class="text-center warek">Kita sebagai warga mahasiswa UNU yogyakarta harus aktif dalam
                      berorganisasi karena itu salah satu media belajar kita
                      nantinya untuk bermasyarakat</p>
                  </div>
        
                </div>
                <div class="row mt-5 justify-content-center">
                  <div class="col-3 text-center">
                    <figure class="figure">
                      <a href=""><img src="{{ url('frontend/img/tertinggi/3.png')}}" class="figure-img img-fluid rounded-circle"
                          style="width: 100px;"></a>
                      <figcaption class=" figure-caption text-center">
                        <h5>Dr. Senawi, MP</h5>
                        <p>Wakil Rektor Kemahasiswaan</p>
                      </figcaption>
                    </figure>
                  </div>
        
                </div>
        
              </div>
            </div>
          </section>
          <!-- akhir qoute -->
        
        
        
        
          <!-- categori -->
          <section class="category  mt-5 ">
            <div class="container">
        
              <div class="row text-center text-sm-left">
                <div class="col">
                  <h3>Berita</h3>
                  <p>Informasi terbaru dan Menarik</p>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-lg-4 col-md-4 col-sm-4" data-aos="fade-up" data-aos-duration="500">
                  <figure class="figure card-figure">
                    <img src="{{ url('frontend/img/blog/4.jpg')}}" class="figure-img img-fluid" style="width: 350px; height: 232px;">
                    <figcaption class="figure-caption">
                      <div class="row">
                        <div class="col">
        
                          <h5>UKM dan HMP UNU Yogyakarta Resmi Dilantik</h5>
                          <p>Acara Pelatikan ORMAWA UNU Yogyakarta dilaksanakan pada hari Rabu Tanggal 27
                            Januari 2021 Di AULA UNU Yogyakarta bersama ....
                          </p>
                          <a href="" class="btn btn-sm btn-secondary mt-2">selengkapnya</a>
                        </div>
                      </div>
                    </figcaption>
                  </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4" data-aos="fade-up" data-aos="fade-up" data-aos-duration="1000">
                  <figure class="figure card-figure">
                    <img src="{{ url('frontend/img/blog/2.jpg')}}" class="figure-img img-fluid" style="width: 350px; height: 232px;">
                    <figcaption class="figure-caption">
                      <div class="row">
                        <div class="col">
        
                          <h5>UKM dan HMP UNU Yogyakarta Resmi Dilantik</h5>
                          <p>Acara Pelatikan ORMAWA UNU Yogyakarta dilaksanakan pada hari Rabu Tanggal 27
                            Januari 2021 Di AULA UNU Yogyakarta bersama ....
                          </p>
                          <a href="" class="btn btn-sm btn-secondary mt-2">selengkapnya</a>
                        </div>
                      </div>
                    </figcaption>
                  </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4" data-aos="fade-up" data-aos="fade-up" data-aos-duration="1500">
                  <figure class="figure card-figure">
                    <img src="{{ url('frontend/img/blog/6.jpg')}}" class="figure-img img-fluid" style="width: 350px; height: 232px;">
                    <figcaption class="figure-caption">
                      <div class="row">
                        <div class="col">
        
                          <h5>UKM dan HMP UNU Yogyakarta Resmi Dilantik</h5>
                          <p>Acara Pelatikan ORMAWA UNU Yogyakarta dilaksanakan pada hari Rabu Tanggal 27
                            Januari 2021 Di AULA UNU Yogyakarta bersama ....
                          </p>
                          <a href="" class="btn btn-sm btn-secondary mt-2">selengkapnya</a>
                        </div>
                      </div>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
          </section>


           
    </main>
    
@endsection


@push('script-home')
<script >
  $('.lazy').slick({
    lazyLoad: 'ondemand',
    arrows: false,
    dots: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay:true,
    autoplaySpeed:1500,
    responsive: [
       
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 4
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
        }
      }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
    ]
  });
</script>
    
@endpush