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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- SWIPER JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!-- LOGO -->
    <link rel="icon" href="/assets/image/brand-2.png" />
    <!-- STYLE CSS -->
    <link rel="stylesheet" href="assets/css/about.css" />
    <title>HisCARE - Tentang</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-expand-lg navbar-expand-xl bg-transparent fixed-top py-3">
      <div class="container-fluid px-5">
        <a class="navbar-brand" href="#"><img src="{{ asset('assets/image/brand-2.png')}}" alt="brand-2" /><span>His</span><b>CARE</b></a>
        <div class="menu-toggle">
          <input type="checkbox" />
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="navbar-links">
          <ul class="top-menu navbar-nav ms-auto">
            <li><a class="nav-link mx-3 " aria-current="page" href="{{ url('/') }}">Beranda</a></li>
            <li><a class="nav-link mx-3 " href="{{url ('/rumahsakits') }}">Rumah Sakit</a></li>
            <li><a class="nav-link mx-3" href="{{ url ('/penyakit') }}">Penyakit</a></li>
            <li><a class="nav-link mx-3 active" href="{{ url ('/tentang') }}">Tentang</a></li>
            <li>
              <a class="nav-link mx-3 login" href="{{ url ('/login') }}">Masuk <img src="{{ asset('assets/image/icon/icon-login.svg')}}" alt="icon-login" /></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    
  <main class="content pt-5">
      <div class="section-about-us pb-5 " id="section-about-us">
          <div id="about-us-1">
              <div class="container">

                          <h1 class="title-main mt-5">
                              Tentang Kami
                          </h1>
                          <p class="paragraph-main mb-5">Mari mengenal lebih dekat dengan kami, HisCARE.</p>
                          <h2 class="title mt-5">
                              Apa itu HisCARE ?
                          </h2>
                          <p class="paragraph mb-5">HisCARE merupakan sebuah website informasi mengenai dunia kesehatan. Didesain dengan ditujukan agar semua kalangan dapat mudah menemukan infomasi kesehatan dengan mudah.
                          </p>
                          <h2 class="title mt-5">
                              Apa tujuan HisCARE?
                          </h2>
                          <div class="row mb-5">
                              <div class="col-md-6 mt-3 ms-1">
                                  <span>
                                    <img src="/image/icon/check.svg" alt="" srcset=""> 
                                    Membantu masyarakat menemukan informasi kesehatan dengan mudah 
                                  </span>
                              </div>
                              <div class="col-md-6 mt-3 ms-1">
                                  <span>
                                    <img src="/image/icon/check.svg" alt="" srcset="">
                                    Membantu orang tua/lansia yang ingin mencari tahu tentang kesehatannya
                                  </span>
                              </div>
                              <div class="col-md-6 mt-3 ms-1">
                                  <span>
                                    <img src="/image/icon/check.svg" alt="" srcset=""> 
                                    Menghadirkan desain dan inovasi terbaru mengenai dunia kesehatan
                                  </span>
                              </div>
                          
              </div>
          </div>

          <div id="about-us-2">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12">
                          <h2 class="title mt-5">
                              Pengembang HisCARE
                          </h2>
                          <div class="developers row mb-5">
                              <div class="col-md-4 mt-3">
                                  <div class="card border-0 bg-transparent">
                                      <img src="{{ asset('assets/image/dev-1.JPG')}}" class="card-img-top img-fluid ms-2" alt="...">
                                      <div class="card-body">
                                          <h5 class="title">M. Rizki <br> Firmansyah</h5>
                                          <p class="text">SMK NEGERI 5 BANDUNG</p>
                                          <a href="#" class="text-decoration-none me-3"><i class="fab fa-linkedin"></i></a>
                                          <a href="#" class="text-decoration-none me-3"><i class="fab fa-instagram"></i></a>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-4 mt-3">
                                  <div class="card border-0 bg-transparent">
                                      <img src="{{ asset('assets/image/dev-2.JPG')}}" class="card-img-top img-fluid ms-2 mt-3" alt="...">
                                      <div class="card-body">
                                          <h5 class="title">Rai <br> Fadhilah</h5>
                                          <p class="text">SMK NEGERI 5 BANDUNG</p>
                                          <a href="#" class="text-decoration-none me-3"><i class="fab fa-linkedin"></i></a>
                                          <a href="#" class="text-decoration-none me-3"><i class="fab fa-instagram"></i></a>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <h2 class="title mt-5">
                              Pengembang HisCARE
                          </h2>
                          <div class="contact-us row mb-5">
                              <div class="col-md-12 mt-3">
                                  <span>
                                      <i class="fas fa-circle-check"></i> Hubungi Kami Lewat Instagram
                                      <br>
                                      <a href="https://www.instagram.com/not_raii4f/?hl=id"> <i class="bi bi-instagram">@not_raii4f </i> </a>
                                      <br>
                                      <a href="https://www.instagram.com/yrizki_/?hl=id"> <i class="bi bi-instagram">@yrizki_ </i></a>
                                  </span>
                              </div>
                          </div>

                      </div>
                  </div>
              </div>
          </div>
      </div>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="/assets/js/script.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
