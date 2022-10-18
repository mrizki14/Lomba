@extends('templates.home')
@include('layouts.home.header')
@section('content')
@include('layouts.home.navbar')
    <!-- *AKHIR NAVBAR -->

    <!-- *HERO -->
    <div class="header-hero pb-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">

            <!-- GAMBAR HERO -->
            <div class="hero-img">
              <img class="icon-hd-1" src="{{ asset('assets/image/icon/icon-hd-1.svg')}}" />
              <img class="icon-hd-3" src="{{ asset('assets/image/icon/icon-hd-3.svg')}}" />
              <img class="icon-hd-2" src="{{ asset('assets/image/icon/icon-hd-2.svg')}}" />
              <img class="img-hero" src="{{ asset('assets/image/img hero.png')}}" alt="" />
            </div>

            <!-- CARD HERO -->
            <div class="card card-hero mb-3" style="width:20rem;">
              <div class="row">
                <div class="col-md-3 col-lg-3">
                  <img src="{{ asset('assets/image/icon/icon-world.svg')}}" class="img-fluid icon-card rounded-start" alt="..." />
                </div>
                <div class="col-md-9 col-lg-9">
                  <div class="card-hero-detail">
                    <h5 class="card-title title-card-hero">Kesehatan di Indonesia</h5>
                    <p class="card-text text-card-hero">Selalu Jaga Kesehatanmu di kondisi Indonesia sekarang.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="jumbotron">
              <!-- MAIN JUMBOTRON -->
              <h2>Buat Hidup Lebih Sehat</h2>
              <h1>MENJAGA<span> KESEHATAN</span> BISA MUDAH DENGAN APLIKASI ONLINE</h1>
              <p>Telusuri lebih lanjut untuk mengetahui berbagai macam informasi seputar dunia kesehatan kondisi kesehatan. </p>
              <form action="/rumahsakit" method="get">
                <div class="input-group mb-3">
                  <input type="search" class="form-control text-light" name="keyword" placeholder="Cek Informasi Anda Disini ..." />
                  <button class="btn-jumbotron" type="submit"><i class="bi bi-search"></i></button>
                </div>
              </form>
              <!-- JUMBOTRON VALUE -->
              <div class="row">
                <div class="col-lg-4 col-4">
                  <div class="value-1">
                    <h1>28+</h1>
                    <p>Rumah Sakit Indonesia</p>
                  </div>
                </div>
                <div class="col-lg-4 col-4">
                  <div class="value-2">
                    <h1>100%</h1>
                    <p class="detail-value">Semua Detail Penyakit dan Rumah Sakit</p>
                  </div>
                </div>
                <div class="col-lg-4 col-4">
                  <div class="value-3">
                    <h1>30k</h1>
                    <p class="detail-value">Jenis-Jenis Penyakit</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- *AKHIR HERO -->

  {{-- SERVICES --}}
  <section>
    <div class="section-services pt-5">
      <div class="container">
        <div class="main-services">
          <h2>PELAYANAN KAMI</h2>
          <h1>Pelayanan Populer di <span>HisCare</span></h1>
          <p>
            Pelayanan kesehatan adalah upaya untuk mencegah serta meningkatkan kesehatan, menjaga dan mengobati penyakit. Berikut Pelayanan terbaik di <span>HisCARE</span>
          </p>
        </div>
        <div class="card-services">
          <div class="row d-flex justify-content-between">
            <div class="col-12 col-sm-6 col-lg-2">
              <div class="card card-services-1" style="width: 14rem;">
                <div class="card-title d-flex align-items-center">
                  <img src="{{ asset('assets/image/icon/icon-service-1.svg')}}" class="img-fluid img-card-service" alt="..." />
                  <h5 class="card-title-service">Medical Services</h5>
                </div>
                <div class="card-body card-body-services">
                  <p class="card-text-service">Pelayanan kedokteran (medical services) merupakan pelayanan kesehatan yang cara pengorganisasiannya secara individu/sendiri.</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-2">
              <div class="card card-services-2"style="width: 14rem;">
                <div class="card-title d-flex align-items-center">
                <img src="{{ asset('assets/image/icon/icon-service-2.svg')}}" class="img-fluid img-card-service" alt="..." />
                <h5 class="card-title-service">Medical Check Up</h5>
                </div>
                <div class="card-body card-body-services">
                  <p class="card-text-service">Medical check up adalah pemeriksaan kesehatan dengan cara menyeluruh supaya bisa menangani yang baik sebelum penyakit bertambah parah.</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-2">
              <div class="card card-services-3"style="width: 14rem;">
                <div class="card-title d-flex align-items-center">
                  <img src="{{ asset('assets/image/icon/icon-service-3.svg')}}" class="img-fluid img-card-service" alt="..." />
                  <h5 class="card-title-service">Ambulatory Services</h5>
                </div>
                <div class="card-body card-body-services">
                  <p class="card-text-service">Perawatan rawat jalan adalah prosedur medis di hari yang sama yang dilakukan dalam pengaturan rawat jalan. </p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-2">
              <div class="card card-services-4"style="width: 14rem;">
                <div class="card-title d-flex align-items-center">
                <img src="{{ asset('assets/image/icon/icon-service-4.svg')}}" class="img-fluid img-card-service" alt="..." />
                <h5 class="card-title-service">Public Health Service</h5>
                </div>
                <div class="card-body card-body-services">
                  <p class="card-text-service">Pelayanan kesehatan masyarakat merupakan bentuk pelayanan kesehatan yang dilakukan secara bersama-sama di dalam organisasi.</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-lg-2">
              <div class="card card-services-5"style="width: 14rem;">
                <div class="card-title d-flex align-items-center">
                <img src="{{ asset('assets/image/icon/icon-service-5.svg')}}" class="img-fluid img-card-service" alt="..." />
                <h5 class="card-title-service">Inpatient Services</h5>
                </div>
                <div class="card-body card-body-services">
                  <p class="card-text-service">Rawat inap adalah pelayanan kesehatan perorangan, yang meliputi kesehatan pasien dengan menginap di ruang rawat inap.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- * WORKS -->
    <div class="section-works pt-5 pb-5">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-lg-6">
            <div class="main-works">
              <h2>BAGAIMANA CARA KERJANYA?</h2>
              <h1><span>Analis</span> Profesional</h1>
              <p>Riset mendalam dilakukan oleh para ahli di bidangnya.</p>
            
            <div class="row card-works">
              <div class="col-12 col-sm-12 col-xl-6">
                <div class="card card-works-1">
                  <div class="card-title d-flex align-items-center">
                  <img src="{{ asset('assets/image/icon/icon-work-1.svg')}}" class="img-fluid img-card-work" alt="..." />
                  <h5 class="card-title title-card-works">Cek Kondisi Tubuh</h5>
                  </div>
                  <div class="card-body card-body-work">
                    <p class="card-text text-card-works">Melakukan pengecekan terlebih dahulu dengan teliti sebelum menangi lebih lanjut </p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-12 col-xl-6">
                <div class="card card-works-2">
                  <div class="card-title d-flex align-items-center">
                  <img src="{{ asset('assets/image/icon/icon-work-2.svg')}}" class= "img-fluid img-card-work" alt="..." />
                  <h5 class="card-title title-card-works">Penanganan lebih lanjut</h5>
                  </div>
                  <div class="card-body card-body-work">
                    <p class="card-text text-card-works">Setelah mengetahui gejalanya pasien akan diberi penanganan lebih lanjut</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-12 col-xl-6 ">
                <div class="card card-works-3">
                  <div class="card-title d-flex align-items-center">
                  <img src="{{ asset('assets/image/icon/icon-work-3.svg')}}" class="img-fluid img-card-work" alt="..." />
                  <h5 class="card-title title-card-works">Pendekatan Psikologis</h5>
                  </div>
                  <div class="card-body card-body-work">
                    <p class="card-text text-card-works">Tidak hanya secara medis tetapi juga menggunakan pendekatan psikologis</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-12 col-xl-6">
                <div class="card card-works-4">
                  <div class="card-title d-flex align-items-center">
                  <img src="{{ asset('assets/image/icon/icon-work-4.svg')}}" class="img-fluid img-card-work" alt="..." />
                  <h5 class="card-title title-card-works">Memantau 24/7</h5>
                  </div>
                  <div class="card-body card-body-work">
                    <p class="card-text text-card-works">Kenyamanan,keamanan pasien dan keluarga menjadi prioritas terbesar kami dalam menangani seseorang.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          <div class="col-sm-12 col-lg-6">
            <div class="work-img">
              <img class="img-work" src="{{ asset('assets/image/img-services.svg')}}" alt="" />

              <img class="icon-works" src="{{ asset('assets/image/icon/icon-healty.svg')}}" alt="" />

              <div class="card card-work-1 mb-3" style="width:20rem;">
                <div class="row">
                  <div class="col-md-3 col-lg-3">
                    <img src="{{ asset('assets/image/icon/icon-world-2.svg')}}" class="img-fluid icon-card rounded-start" alt="..." />
                  </div>
                  <div class="col-md-9 col-lg-9">
                    <div class="card-work-detail">
                      <h5 class="card-title title-card-work">Kesehatan di Indonesia</h5>
                      <p class="card-text text-card-work">Selalu Jaga Kesehatanmu di kondisi Indonesia sekarang.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card card-work-2 mb-3" style="width:20rem;">
                <div class="row">
                  <div class="col-md-3 col-lg-3">
                    <img src="{{ asset('assets/image/icon/icon-world-2.svg')}}" class="img-fluid icon-card rounded-start" alt="..." />
                  </div>
                  <div class="col-md-9 col-lg-9">
                    <div class="card-work-detail">
                      <h5 class="card-title title-card-work">Kesehatan di Indonesia</h5>
                      <p class="card-text text-card-work">Selalu Jaga Kesehatanmu di kondisi Indonesia sekarang.</p>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- *SPECIALIST -->
    <section>
    <div class="section-specialist pb-5">
      <div class="container" data-swipe-threshold="100">

        <div class="title-specialist">
          <h2>TIM SPESIALIS KAMI</h2>
          <h1>Kunjungi Bersama Tim Spesialis Kami</h1>
        </div>

        <input type="radio" name="dot" id="one">
        <input type="radio" name="dot" id="two">
        <input type="radio" name="dot" id="three">

        <div class="card-specialist pt-3 ">         
            <div class="specialists pt-5">
              <div class="specialist-1">
                <img class="img-fluid card-specialist-1 item" src="{{ asset('assets/image/img-dr-1.png')}}" />
                <div class="docter-1">
                  <h4>Dr. Alena George</h4>
                  <p>Ahli reumatologi</p>
                </div>
              </div>
              <div class="specialist-2">
                <img class=" img-fluid card-specialist-2 item" src="{{ asset('assets/image/img-dr-2.png')}}" />
                <div class="docter-2">
                  <h4>Dr. Ashlynn Aminoff</h4>
                  <p>Praktisi Perawat Psikiatri & Kesehatan Mental Dewasa</p>
                </div>
              </div> 
              <div class="specialist-3">
                <img class="img-fluid card-specialist-3 item" src="{{ asset('assets/image/img-dr-3.png')}}" />
                <div class="docter-3">
                  <h4>Dr. Andrea Sczesny, MD</h4>
                  <p>Dokter Gawat Darurat</p>
                </div>
              </div> 
              <div class="specialist-4">              
                <img class="img-fluid card-specialist-4 item" src="{{ asset('assets/image/img-dr-4.png')}}" />
                <div class="docter-4">
                  <h4>Dr. Andrea Sczesny, MD</h4>
                  <p>Ahli Spesialis Bedah</p>
                </div>
              </div>                                   
            </div>
            <div class="specialists pt-5">
              <div class="specialist-1">
                <img class="img-fluid card-specialist-1 item" src="{{ asset('assets/image/img-dr-1.png')}}" />
                <div class="docter-1">
                  <h4>Dr. Alena George</h4>
                  <p>Ahli reumatologi</p>
                </div>
              </div>
              <div class="specialist-2">
                <img class=" img-fluid card-specialist-2 item" src="{{ asset('assets/image/img-dr-2.png')}}" />
                <div class="docter-2">
                  <h4>Dr. Ashlynn Aminoff</h4>
                  <p>Praktisi Perawat Psikiatri & Kesehatan Mental Dewasa</p>
                </div>
              </div> 
              <div class="specialist-3">
                <img class="img-fluid card-specialist-3 item" src="{{ asset('assets/image/img-dr-3.png')}}" />
                <div class="docter-3">
                  <h4>Dr. Andrea Sczesny, MD</h4>
                  <p>Dokter Gawat Darurat</p>
                </div>
              </div> 
              <div class="specialist-4">              
                <img class="img-fluid card-specialist-4 item" src="{{ asset('assets/image/img-dr-4.png')}}" />
                <div class="docter-4">
                  <h4>Dr. Andrea Sczesny, MD</h4>
                  <p>Ahli Spesialis Bedah</p>
                </div>
              </div>                                   
            </div>
            <div class="specialists pt-5">
              <div class="specialist-1">
                <img class="img-fluid card-specialist-1 item" src="{{ asset('assets/image/img-dr-1.png')}}" />
                <div class="docter-1">
                  <h4>Dr. Alena George</h4>
                  <p>Ahli reumatologi</p>
                </div>
              </div>
              <div class="specialist-2">
                <img class=" img-fluid card-specialist-2 item" src="{{ asset('assets/image/img-dr-2.png')}}" />
                <div class="docter-2">
                  <h4>Dr. Ashlynn Aminoff</h4>
                  <p>Praktisi Perawat Psikiatri & Kesehatan Mental Dewasa</p>
                </div>
              </div> 
              <div class="specialist-3">
                <img class="img-fluid card-specialist-3 item" src="{{ asset('assets/image/img-dr-3.png')}}" />
                <div class="docter-3">
                  <h4>Dr. Andrea Sczesny, MD</h4>
                  <p>Dokter Gawat Darurat</p>
                </div>
              </div> 
              <div class="specialist-4">              
                <img class="img-fluid card-specialist-4 item" src="{{ asset('assets/image/img-dr-4.png')}}" />
                <div class="docter-4">
                  <h4>Dr. Andrea Sczesny, MD</h4>
                  <p>Ahli Spesialis Bedah</p>
                </div>
              </div>                                   
            </div>
        </div>

        <div class="button-specialist">
          <label for="one" class="one active"></label>
          <label for="two" class="two"></label>
          <label for="three" class="three"></label>
        </div>

        </div>        
      </div>
    </section>

    <!-- *AKHIR SECTION SPECIALIST -->
    <!-- *CUSTOMER SAY -->

    <div class="section-customer-say">
      <div class="container">
        <div class="main-customer-say">
          <h2>PENILAIAN DARI PENGALAMAN</h2>
          <h1>Apa yang <span>Pengguna</span> Katakan</h1>
          <p>Lihat hasil Survei Kepuasan Pelanggan terbaru kami dan testimoni pelanggan utama tentang bagaimana kami bekerja dan melayani para pengguna. Dimulai dari usia dini hingga dewasa</p>
        </div>
        <div class="">
          <div class="card-customer-say owl-carousel owl-customer owl-theme">
            <div class="customer-1">
              <div class="card card-customer-say-1">
                <div class="row">
                  <div class="col-7">
                    <div class="card-body">
                      <h4 class="card-title title-customer-1">Ahmed Dedat</h4>
                      <p>Engineer</p>
                      <p class="card-text text-customer-say">Penangannya sangat baik, orang-orangnya ramah pelayanannya sangat ramah dan profesional</p>
                      <div class="rating-customer">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill start-customer"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-5">
                    <img src="{{ asset('assets/image/customer-say-1.png')}}" class=" img-card-customer-1" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <div class="customer-1">
              <div class="card card-customer-say-2">
                <div class="row">
                  <div class="col-7">
                    <div class="card-body">
                      <h4 class="card-title title-customer-1">Kevin Ahmad</h4>
                      <p>Docter</p>
                      <p class="card-text text-customer-say">Awalnya saya sangat bingung bagaimana mencari informasi kesehatan, dan akhirnya saya menemukan website ini!</p>
                      <div class="rating-customer">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill start-customer"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-5">
                    <img src="{{ asset('assets/image/customer-say-1.png')}}" class=" img-card-customer-1" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection