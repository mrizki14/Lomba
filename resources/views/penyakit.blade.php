<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css')}}" />
    <!-- ICON BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/detailpenyakit.css') }}" />
    <link rel="icon" href="{{ asset('assets/image/brand-2.png')}}" />
    <title>Asam Lambung</title>
  </head>
  <body>
    <!-- *NAVBAR* -->
    @include('layouts.home.navbar')

    <!-- !DETAIL -->
    <header>
      <div class="container-fluid">
        <div class="jenis-penyakit">
          <div class="row">
            <div class="col-6 ps-5 title-penyakit">
              <div class="content-penyakit">
                <img src="{{ asset('assets/image/penyakit/img-asam-lambung.jpg')}}" alt="" />
                <p>Nama Penyakit</p>
                <h4>{{ $disease->nama }}</h4>
                <p>Kualifikasi</p>
                <h4>{{ $disease->kualifikasi }}</h4>
                <p>Tingkat Bahaya</p>
                <h4>{{ $disease->tingkat_bahaya }}</h4>
              </div>
              <div class="description-penyakit">
                <h4>{{ $disease->nama }}</h4>
                <p><i>{{ $disease->nama_medis }}</i></p>
                <p>
                  {{ $disease->pengertian }}
                </p>
              </div>
            </div>
            <div class="col-6 pe-0">
              <div class="detail-penyakit float-end">
                <h3>Penjelasan</h3>
                <div class="accordions">
                  <div class="accordion-explanation">
                    <input type="checkbox" id="first" />
                    <label class="acc-label" for="first">
                      <img src="{{ asset('assets/image/penyakit/icon-accordion-1.svg')}}" alt="" />
                      <div class="title-label row">
                        <h5>Penjelasan Penyakit</h5>
                        <p>Lihat Selengkapnya</p>
                      </div>
                    </label>
                    <div class="acc-content">
                      <p>
                        {{ $disease->penjelasan }}
                        {{-- Sebuah penyakit pencernaan yang mana asam lambung atau empedu mengiritasi lapisan dalam saluran makanan. Ini adalah penyakit kronis yang terjadi saat asam lambung atau empedu mengalir ke saluran makanan dan
                        mengiritasi dinding dalamnya. Refluks asam dan heartburn (asam lambung naik) lebih dari dua kali seminggu dapat mengindikasikan GERD. Gejalanya meliputi nyeri panas di dada yang biasanya terjadi setelah makan dan
                        memburuk ketika berbaring. --}}
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordions">
                  <div class="accordion-explanation">
                    <input type="checkbox" id="second" />
                    <label class="acc-label" for="second">
                      <img src="{{ asset('assets//image/penyakit/icon-accordion-2.svg')}}" alt="" />
                      <div class="title-label row">
                        <h5>Penyebab Penyakit</h5>
                        <p>Lihat Selengkapnya</p>
                      </div>
                    </label>
                    <div class="acc-content">
                      <p>
                        {{ $disease->penyebab }}

                        {{-- Salah satu aktivitas yang tidak kita sadari dapat menjadi penyebab asam lambung naik yaitu pola makan tidak teratur, khususnya di malam hari. Hal ini disebabkan karena setelah makan, Anda tidak menyediakan cukup
                        waktu untuk tubuh mencerna makanan dengan langsung tidur.Oleh sebab itu, untuk mengatasi asam lambung yang naik, sebaiknya hindari makan dua jam sebelum tidur. Selain itu, makanlah secara teratur agar lambung dapat
                        bekerja dengan baik untuk mencerna makanan yang dikonsumsi sesuai waktunya. --}}
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordions">
                  <div class="accordion-explanation">
                    <input type="checkbox" id="third" />
                    <label class="acc-label" for="third">
                      <img src="{{ asset('assets/image/penyakit/icon-accordion-3.svg')}}" alt="" />
                      <div class="title-label row pe-5">
                        <h5>Obat Penyakit</h5>
                        <p>Lihat Selengkapnya</p>
                      </div>
                    </label>
                    <div class="acc-content">
                      <p>
                        {{ $disease->obat }}

                        {{-- 1. Antasida<br />2. H-2 receptor blockers<br />3. Proton pump inhibitors (PPI)<br />
                        4. H-2 receptor blockers dengan resep<br />
                        5. Proton pump inhibitors (PPI) dengan resep <br />6. Obat penguat sfingter esofagus bagian bawah <br />7. Obat prokinetik <br />8. Antibiotik (obat asam lambung akibat infeksi bakteri) --}}
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordions">
                  <div class="accordion-explanation">
                    <input type="checkbox" id="fourth" />
                    <label class="acc-label" for="fourth">
                      <img src="{{ asset('assets/image/penyakit/icon-accordion-4.svg')}}" alt="" />
                      <div class="title-label row">
                        <h5>Saran Rumah Sakit</h5>
                        <p>Lihat Selengkapnya</p>
                      </div>
                    </label>
                    <div class="acc-content">
                      <p>
                        Sebuah penyakit pencernaan yang mana asam lambung atau empedu mengiritasi lapisan dalam saluran makanan. Ini adalah penyakit kronis yang terjadi saat asam lambung atau empedu mengalir ke saluran makanan dan
                        mengiritasi dinding dalamnya. Refluks asam dan heartburn (asam lambung naik) lebih dari dua kali seminggu dapat mengindikasikan GERD. Gejalanya meliputi nyeri panas di dada yang biasanya terjadi setelah makan dan
                        memburuk ketika berbaring.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/script.js"></script>
  </body>
</html>
