<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.css" />
    <!-- ICON BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <!-- AOS CSS -->
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet" />
    <!-- LOGO -->
    <link rel="icon" href="/assets/image/brand-2.png" />  
    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/hospitals.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}" />
    
    <title>HisCARE - Rumah Sakit</title>
  </head>
  <body>
    @include('layouts.home.navbar')
    <header>
      <div class="container">
        <div class="jumbotron">
          <p>Hidup ini terlalu singkat untuk dunia yang luas dan indah</p>
          <h1>Cari Pelayanan Rumah Sakit yang nyaman dan Terjangkau untukmu disini</h1>
        </div>
      </div>
    </header>
    <!--* MAIN CONTET -->
    <main>
      <!--* POPULER HOSPITALS -->
      <div class="popular-hospitals">
        <div class="container">
          <div class="title-popular-hospitals">
            <h3>RUMAH SAKIT POPULER</h3>
            <h1>Rumah Sakit Populer oleh Pengguna</h1>
          </div>
          <div class="main-populer-hospitals">
            <div class="row">
              <div class="col-lg-3">
                <div class="img-populer-1">
                  <img src="{{ asset('assets/image/Hospitals/img-popular.png')}}" alt="" />
                </div>
              </div>
              <div class="col-lg-3">
                <div class="img-populer-2">
                  <img src="{{ asset('assets/image/Hospitals/img-popular-2.png')}}" alt="" />
                </div>
                <div class="img-populer-3">
                  <a href="#"><img src="{{ asset('assets/image/Hospitals/galeri-5.png')}}" class="img-popular-3" alt="" /></a>
                </div>
              </div>
              <div class="col-lg-6 col-sm-2">
                <div class="detail-populer-hospitals">
                  <div class="text-populer-hospital">
                    <h5>Rumah Sakit Santo Yusup</h5>
                    <h2>Rumah Sakit Pelayanan Terbaik Periode 2020/2021.</h2>
                    <p class="detail-populer-hospitals">Pelayanan terbaik diraih rumah sakit santo yusup setelah beberapa kali menangani kasus gawat darurat pasien dan mendapatkan hasil memuaskan untuk 90% pasien.</p>
                  </div>
                  <div class="data-populer-hospitals">
                    <div class="count-data-hospitals row">
                      <div class="col-3">
                        <div class="data-hospital-1">
                          <h5>560+</h5>
                          <p>Pasien</p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="data-hospital-2">
                          <h5>120++</h5>
                          <p>Operasi</p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="data-hospital-3">
                          <h5>360K++</h5>
                          <p>Penanganan Pasien</p>
                        </div>
                      </div>
                    </div>
                  </div>             
                  <a href="{{ url('/santoyusup') }} " class="btn btn-populer-hospitals-1 text-light">Lihat Rumah Sakit</a>
                  <a href="#list-hospitals" class="btn btn-populer-hospitals-2"> Rumah Sakit Lainnya</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- *HOSPITAL SERVICE -->
      <div id="list-hospitals" class="hospital-service pb-5">
        <div class="container">
          <div class="title-service-hospitals">
            <h3>SERVICE HOSPITAL</h3>
            <h1>Our Popular Hospital Services</h1>
          </div>
          <div class="button-service-hospitals">
            <a href="#" class="btn button-service-hospitals-1 active">TOP</a>
            <a href="#" class="btn button-service-hospitals-2">Terdekat</a>
            <a href="#" class="btn button-service-hospitals-3">Pilihan Terbaik</a>
          </div>
         
          <div class="product-hospital d-block">
            <div class="row">
              @foreach ($hospitals as $d) 
              <div class="col-lg-4 col-sm-12">
                <div class="hospital-1">
                  <div class="card card-hospital">
                    <img src="{{ asset('imagesHospitals/' .$d->image_path)}}" class="img-hospital-1" alt="" />
                    <div class="card-body-hospital">
                      <div class="btn-service-hospital">
                        <button class="btn">Diseases</button>
                        <button class="btn">Medicine</button>
                        <button class="btn">Lung</button>
                      </div>
                      <h5 class="card-title-hospital">{{ $d->nama }}</h5>
                      <a href="https://goo.gl/maps/nK2ZWwPKZspFKUqw7" class="location"><img src="{{ asset('assets/image/icon/location.svg')}}" />{{ $d->lokasi }}, Indonesia</a>
                      <div class="rating-hospital">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                      </div>
                      <div class="btn-detail-hospitals">
                        <a href="/detailRumahSakit/{{ $d->id }}" class="btn btn-detail-hospitals-1">Check Room</a>
                        <a href="/detailRumahSakit/{{ $d->id }}" class="btn btn-detail-hospitals-2">View Details</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div> 
    </main>
    @include('layouts.home.footer')
  </body>
</html>
