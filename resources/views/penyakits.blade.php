<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('assets/image/brand-2.png')}}">

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.css" />
    <!-- ICON BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <!-- STYLE CSS -->
    <link rel="stylesheet" href="/assets/css/dieseases.css" />
    <title>HisCARE - Penyakit</title>
  </head>

  <body>
    <!-- *NAVBAR* -->
    <nav class="navbar navbar-expand-md navbar-expand-lg navbar-expand-xl py-3 bg-transparent fixed-top">
      <div class="container-fluid px-5">
        <a class="navbar-brand" href="/"><img src="{{ asset('assets/image/brand-2.png') }}" alt="brand-2" /><span>His</span><b>CARE</b></a>
        <div class="menu-toggle">
          <input type="checkbox" />
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="navbar-links">
          <ul class="top-menu navbar-nav ms-auto">
            <li><a class="nav-link mx-3 " aria-current="page" href="{{ url('/') }}">Beranda</a></li>
            <li><a class="nav-link mx-3" href="/rumahsakits">Rumah Sakit</a></li>
            <li><a class="nav-link mx-3 active" href="{{ url ('/penyakits') }}">Penyakit</a></li>
            <li><a class="nav-link mx-3" href="{{ url ('/tentang') }}">Tentang</a></li>
            <li>
              @guest            
              <a class="nav-link mx-3 login" href="{{ url ('/login') }}">Masuk <img src="{{ asset('assets/image/icon/icon-login.svg')}}" alt="icon-login" /></a>
              @endguest
            </li>
            @auth
            <li><a class="nav-link mx-3" href="/dashboard">Dashboard</a></li>
            @endauth
          </ul>
        </div>
      </div>
    </nav>

    <!-- *HERO -->
    <header>
      <div class="container-fluid px-5">
        <div class="header px-3">
          <div class="row">
            <div class="title-disease col-sm-12 col-md-6 col-lg-6">
              <div class="title-header">
                <h1>Cari Jenis Penyakit, Dan temukan solusinya</h1>
                <h5>Cari berbagai jenis penyakit, penyebab dan solusinya</h5>
              </div>
            </div>

            <div class="img-disease col-sm-12 col-md-6 col-lg-6">
              <div class="row float-end">
                <div class="col-3 mt-5">
                  <div class="card-ad card card-hero mb-3">
                    <div class="row">
                      <div class="col-md-3 col-lg-3">
                      <img src="{{ asset('assets/image/icon/icon-world.svg')}}" class="img-ad img-fluid rounded-start" alt="..." />
                      </div>
                      <div class="col-md-9 col-lg-9 text-light">
                        <div class="card-body card-hero-detail">
                          <h5 class="card-title">Health on International</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-9">
                  <div class="image-header">
                    <img src="{{ asset('assets/image/img-header.png')}}" class="img-header" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <main>
      <div class="main-disease container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-4 col-lg-4 search-penyakit">
            <div class="search">
              <p class="nm-disease mb-2">Nama Penyakit</p>
              <form action="" method="get">
                <div class="d-flex mb-4">
                  <input class="form-control input-search" name="penyakit" type="search" placeholder="Cari" aria-label="default input example" />
                  <button class="btn button-search" type="submit"><img src="{{ asset('assets/image/icon/icon-search.svg') }}" alt="" /></button>
                </div>    
              </form>    
              <p class="nm-symptom mb-2">Gejala</p>
              <div class="d-flex mb-4">
                <input class="input-gejala form-control" type="text" name="penyakit" placeholder="Batuk" aria-label="default input example" />
                  <button class="btn button-search" hidden type="submit"><img src="{{ asset('assets/image/icon/icon-search.svg') }}" alt="" /></button>
              </div>
              
              <div class="card card-filter mb-4" style="width: 100%">
                <div class="card-body">
                  <p class="card-text">Kualifikasi</p>
                  <input class="input-filter form-control mb-3" type="text" placeholder="Cari" aria-label="default input example" />
                  <div class="scroll">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                      <label class="form-check-label" for="flexCheckDefault"> Penyakit Kulit </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                      <label class="form-check-label" for="flexCheckDefault"> Penyakit Lambung </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                      <label class="form-check-label" for="flexCheckDefault"> Penyakit Jantung </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                      <label class="form-check-label" for="flexCheckDefault"> Penyakit Tulang </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" />
                      <label class="form-check-label" for="flexCheckChecked"> Penyakit Ginjal </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                      <label class="form-check-label" for="flexCheckDefault"> Penyakit Usus </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" />
                      <label class="form-check-label" for="flexCheckChecked"> Peynakit Paru-Paru </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                      <label class="form-check-label" for="flexCheckDefault"> Penyakit Otak </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" />
                      <label class="form-check-label" for="flexCheckChecked"> Penyakit Mata </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" />
                      <label class="form-check-label" for="flexCheckChecked"> Penyakit Bipolar </label>
                    </div>
                  </div>
                </div>
              </div>
           
                  
              <div class="card card-filter mb-4" style="width: 100%">
                <div class="card-body">
                  <p class="card-text">Nama Medis</p>
                  <input class="input-filter form-control mb-3" type="text" placeholder="Cari" aria-label="default input example" />
                  <div class="scroll">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                      <label class="form-check-label" for="flexCheckDefault"> Gastroesophageal Reflux Disease (GERD) </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                      <label class="form-check-label" for="flexCheckDefault"> Abscess </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                      <label class="form-check-label" for="flexCheckDefault"> Iskemia </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" />
                      <label class="form-check-label" for="flexCheckChecked"> Osteoporosis </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                      <label class="form-check-label" for="flexCheckDefault"> Kidney stone </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" />
                      <label class="form-check-label" for="flexCheckChecked"> Ulcerative colitis </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                      <label class="form-check-label" for="flexCheckDefault"> Pneumonia </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" />
                      <label class="form-check-label" for="flexCheckChecked"> Konjungtivitis </label>
                    </div>
                  </div>
                </div>
              </div>
    
            </div>
          </div>
          <div class="list-penyakit col-sm-12 col-md-8 col-lg-8">
            <div class="row">
              @foreach ($diseases as $d)
              <div class="jenis-penyakit col-sm-6 col-lg-4">
                <img src="{{ asset('imagesDiseases/' .$d->image_path)}}" alt="" />
                <div class="content-penyakit">
                  <h5>{{ $d->nama }}</h5>
                  <p>{{ $d->kualifikasi }}</p>
                  {{-- <h5>Asam Lambung</h5> --}}
                  {{-- <p>Penyakit Lambung</p> --}}
                  <a class="btn-detail" href="{{ route('penyakit',$d->id) }}">Detail</a>
                </div>
              </div>
              {{-- <div class="jenis-penyakit col-sm-6 col-lg-4">
                <img src="{{ asset('assets/image/penyakit/jerawat.png')}}" alt="" />
                <div class="content-penyakit">
                  <h5>Jerawat</h5>
                  <p>Penyakit Kulit</p>
                  <a class="btn-detail" href="/diseases/jerawat.html">Detail</a>
                </div>
              </div>
              <div class="jenis-penyakit col-sm-6 col-lg-4">
                <img src="{{ asset('assets/image/penyakit/arteri-koroner.png')}}" alt="" />
                <div class="content-penyakit">
                  <h5>Arteri Koroner</h5>
                  <p>Penyakit Jantung</p>
                  <a class="btn-detail" href="/diseases/arteri-koroner.html">Detail</a>
                </div>
              </div> --}}
              @endforeach
            </div>
            {{-- <div class="row">
              <div class="jenis-penyakit col-sm-6 col-lg-4">
                <img src="{{ asset('assets/image/penyakit/osteoporosis.png')}}" alt="" />
                <div class="content-penyakit">
                  <h5>Osteoporosis</h5>
                  <p>Penyakit Tulang</p>
                  <a class="btn-detail" href="/diseases/osteoporosis.html">Detail</a>
                </div>
              </div>
              <div class="jenis-penyakit col-sm-6 col-lg-4">
                <img src="{{ asset('assets/image/penyakit/batu-ginjal.png')}}" alt="" />
                <div class="content-penyakit">
                  <h5>Batu Ginjal</h5>
                  <p>Penyakit Ginjal</p>
                  <a class="btn-detail" href="/diseases/batu-ginjal.html">Detail</a>
                </div>
              </div>
              <div class="jenis-penyakit col-sm-6 col-lg-4">
                <img src="{{ asset('assets/image/penyakit/kolitis-ulseratif.png')}}" alt="" />
                <div class="content-penyakit">
                  <h5>Kolitis Ulseratif</h5>
                  <p>Penyakit Usus</p>
                  <a class="btn-detail" href="/diseases/kolitis-ulseratif.html">Detail</a>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="jenis-penyakit col-sm-6 col-lg-4">
                <img src="{{ asset('assets/image/penyakit/paru-paru-basah.png')}}" alt="" />
                <div class="content-penyakit">
                  <h5>Paru-Paru Basah</h5>
                  <p>Penyakit Paru-Paru</p>
                  <a class="btn-detail" href="/diseases/paru-paru-basah.html">Detail</a>
                </div>
              </div>
              <div class="jenis-penyakit col-sm-6 col-lg-4">
                <img src="{{ asset('assets/image/penyakit/konjungtivitis.png')}}" alt="" />
                <div class="content-penyakit">
                  <h5>Konjungtivitis</h5>
                  <p>Penyakit Mata</p>
                  <a class="btn-detail" href="/diseases/konjungtivis.html">Detail</a>
                </div>
              </div>
              <div class="jenis-penyakit col-sm-6 col-lg-4">
                <img src="{{ asset('assets/image/penyakit/toksoplasmosis.png')}}" alt="" />
                <div class="content-penyakit">
                  <h5>Toksoplasmosis</h5>
                  <p>Penyakit Otak</p>
                  <a class="btn-detail" href="/diseases/toksoplasmosis.html">Detail</a>
                </div>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
    </main>

    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/script.js"></script>
  </body>
</html>
