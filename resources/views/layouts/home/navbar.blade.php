<!-- *NAVBAR* -->
<header>
    <nav class="navbar navbar-expand-md navbar-expand-lg bg-transparent navbar-expand-xl fixed-top py-3">
      <div class="container-fluid px-5">
        <a class="navbar-brand" href="#"><img src="{{ asset('assets//image/brand-1.png')}}" alt="brand-2" /><span>His</span><b>CARE</b></a>
        <div class="menu-toggle">
          <input type="checkbox" />
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="navbar-links">
          <ul class="top-menu navbar-nav ms-auto">
            <li><a class="nav-link mx-3 {{ Request::is('/') ? 'active' : '' }} " aria-current="page" href="/">Beranda</a></li>
            <li><a class="nav-link mx-3 {{ Request::is('rumahsakit') ? 'active' : '' }} " href="/rumahsakits">Rumah Sakit</a></li>
            <li><a class="nav-link mx-3" href="/penyakit">Penyakit</a></li>
            <li><a class="nav-link mx-3" href="/tentang">Tentang</a></li>
            @guest               
            <li>
              <a class="nav-link mx-3 login" href="/login">Masuk <img src="{{ asset('assets/image/icon/icon-login-2.svg') }}" alt="icon-login" /></a>
            </li>
            @endguest
            @auth
            <li><a class="nav-link mx-3" href="/dashboard">Dashboard</a></li>
            @endauth
          </ul>
        </div>
      </div>
    </nav>