<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="image/brand-2.png" />
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.css" />
    <!-- ICON BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <!-- STYLE CSS -->
    <link rel="stylesheet" href="/assets/css/detailhospital.css" />
  
    <title>RSAI</title>
  </head>
  <body>
    <!-- *NAVBAR -->
    @include('layouts.home.navbar')
    <!-- *HERO -->     
    <header>
      <div class="header-detail-hospitals">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12 col-md-5 col-lg-5">
              <div class="title-header">
                <h5>{{ $hospital->nama }}</h5>
              </div>
              <div class="header-img-1">
                <img src="{{ asset('imagesHospitals/'.$hospital->image_path )}}" class="img-header-1" alt="" />
              </div>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3">
              <div class="header-img-2">
                <?php $count = 0; ?>
                @foreach ($hospital->galery()->get() as $g)
                    <?php if($count == 3) break; ?>
                    <img src="{{ asset('imagesGalery/'.$g->image_url )}}" class="img-header-1" alt="" />
                    <?php $count++; ?>
                @endforeach
              </div>
            </div>
            <div class="col-lg-4">
              <div class="detail-header-hospitals">
                <div class="detail-hospital float-end">
                  <h3>Penjelasan</h3>
                  <div class="accordions">
                    <div class="accordion-explanation">
                      <input type="checkbox" id="first" />
                      <label class="acc-label" for="first">
                        <img src="{{ asset('assets/image/penyakit/icon-accordion-1.svg')}}" alt="" />
                        <div class="title-label row label-1">
                          <h5>Deskripsi</h5>
                          <p>Lihat Selengkapnya</p>
                        </div>
                      </label>
                      <div class="acc-content">
                        <p>
                          {{ $hospital->deskripsi }}
                          {{-- RS Al Islam Bandung adalah Rumah Sakit milik Yayasan RSI KSWI Jawa Barat yang mempunyai visi "Menjadi Rumah Sakit Yang Unggul, Terpercaya dan Islami dalam Pelayanan dan Pendidikan" --}}
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="accordions">
                    <div class="accordion-explanation">
                      <input type="checkbox" id="second" />
                      <label class="acc-label" for="second">
                        <img src="{{ asset('assets/image/penyakit/icon-accordion-2.svg')}}" alt="" />
                        <div class="title-label row label-2">
                          <h5>Keahilan Penyakit</h5>
                          <p>Lihat Selengkapnya</p>
                        </div>
                      </label>
                      <div class="acc-content">
                        <p>
                          {{ $hospital->keahlian_penyakit }}
                          {{-- RS Al Islam Bandung memiliki layanan spesialis dan fasilitas penunjang medis yang cukup lengkap. Adapaun layanan unggulan yang dimiliki RSAI Bandung antara lain : Kateterisasi Jantung baik Dewasa maupun anak, Hemodialisa (cuci darah), kemoterapi, pemeriksaan MSCT  160 slice, serta Endoscopy. Pada masa pandemic covid 19 ini RSAI Bandung melengkapi dengan fasilitas perawatan isolasi serta fasiltas pemeriksaan Covid 19 baik itu rapid antibody, rapid antigen dan PCR yang dilakukan secara mandiri. --}}
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="accordions">
                    <div class="accordion-explanation">
                      <input type="checkbox" id="third" />
                      <label class="acc-label" for="third">
                        <img src="{{ asset('assets/image/penyakit/icon-accordion-3.svg')}}" alt="" />
                        <div class="title-label row label-3">
                          <h5>Obat Penyakit</h5>
                          <p>Lihat Selengkapnya</p>
                        </div>
                      </label>
                      <div class="acc-content">
                        <p>
                          {{ $hospital->obat_penyakit }}
                          {{-- 1. Konsumsi Banyak Cairan (minum 2-3 liter per hari) <br />
                          2. Cairan Intravena (Infus) <br />
                          3. Bedrest Total (beristirahat) <br />4. Kompres seluruh badan <br /> --}}
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="accordions">
                    <div class="accordion-explanation">
                      <input type="checkbox" id="fourth" />
                      <label class="acc-label" for="fourth">
                        <img src="{{ asset('assets/image/penyakit/icon-accordion-4.svg')}}" alt="" />
                        <div class="title-label row label-4">
                          <h5>Rincian Penanganan</h5>
                          <p>Lihat Selengkapnya</p>
                        </div>
                      </label>
                      <div class="acc-content">
                        <p>
                          {{ $hospital->rincian_penanganan }}
                          {{-- Dengan cara pendekatan secara psikolog,operasi dan diberikan obat yang sesuai dengan resep para dokter yang ahli di bidangnya --}}
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- !SERVICE HOSPITALS -->
      <div class="service-hospital">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-5 col-lg-5">
              <div class="main-fasilitas">
                <h5>Fasilitas Rumah Sakit</h5>
                <div class="row">
                  <div class="col-6">
                    <div class="fasilitas-1">
                      <img src="{{ asset('assets/image/icon/check.svg')}}" alt="" srcset=""><span> 20 Kamar</span>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="fasilitas-2">
                      <img src="{{ asset('assets/image/icon/check.svg')}}" alt="" srcset=""><span> 5 Ruang Bersalin</span>
                    </div>
                  </div>
                </div>          
                <div class="row">
                  <div class="col-6">
                    <div class="fasilitas-3">
                      <img src="{{ asset('assets/image/icon/check.svg')}}" alt="" srcset=""><span> 5 Ruang Operasi</span>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="fasilitas-4">
                      <img src="{{ asset('assets/image/icon/check.svg') }}" alt="" srcset=""><span> 1 Kamar Mayat</span>
                    </div>
                  </div>
                </div>          
              </div>
            </div>
          <div class="col-sm-12 col-md-7 col-lg-7">
            <div class="main-fasilitas-2">
              <h5>Dukungan Rumah Sakit</h5>
              <div class="row">
                <div class="col-4">
                  <div class="fasilitas-1">
                    <img src="{{ asset('assets/image/icon/check.svg')}}" alt="" srcset=""><span> 20 Kamar</span>
                  </div>
                </div>
                <div class="col-4">
                  <div class="fasilitas-2">
                    <img src="{{ asset('assets/image/icon/check.svg')}}" alt="" srcset=""><span> 5 Ruang Bersalin</span>
                  </div>
                </div>
                <div class="col-4">
                  <div class="fasilitas-3">
                    <img src="{{ asset('assets/image/icon/check.svg')}}" alt="" srcset=""><span> CCTV</span>
                  </div>
                </div>
              </div>          
              <div class="row">
                <div class="col-4">
                  <div class="fasilitas-3">
                    <img src="{{ asset('assets/image/icon/check.svg')}}" alt="" srcset=""><span> 5 Ruang Operasi</span>
                  </div>
                </div>
                <div class="col-4">
                  <div class="fasilitas-4">
                    <img src="{{ asset('assets/image/icon/check.svg')}}" alt="" srcset=""><span> 1 Kamar Mayat</span>
                  </div>
                </div>
                <div class="col-4">
                  <div class="fasilitas-4">
                    <img src="{{ asset('assets/image/icon/check.svg')}}" alt="" srcset=""><span> Keamanan</span>
                  </div>
                </div>
              </div>          
            </div>          
          </div>
        </div>
      </div>
    </header>
    

    <!-- !MAIN -->
    <div class="galery-rumah-sakit">
      <div class="container">
        <h5>Galeri Rumah Sakit</h5>
        <div class="row">
          <div class="col-3 galeri-1">
            @foreach ($hospital->galery()->get() as $galery)
            <img src="{{ asset('imagesGalery/'.$galery->image_url )}}" alt="">
          </div>          
          <div class="col-3 galeri-2 ">
            <img src="{{ asset('imagesGalery/'.$galery->image_url )}}" alt="">
            <img src="{{ asset('imagesGalery/'.$galery->image_url )}}" alt="">
          </div>
          <div class="col-3 galeri-3 ">
            <img src="{{ asset('imagesGalery/'.$galery->image_url )}}" alt="">
            <img src="{{ asset('imagesGalery/'.$galery->image_url )}}" alt="">
          </div>
          <div class="col-3 galeri-4">
            <img src="{{ asset('imagesGalery/'.$galery->image_url )}}" alt="">
            <img src="{{ asset('imagesGalery/'.$galery->image_url )}}" alt="">
          </div>
          @endforeach
        </div>
        <a class="back-menu" href="/rumahsakit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
</svg>Kembali</a>
      </div>
    </div>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="/assets/js/script.js"></script>
  </body>
</html>
