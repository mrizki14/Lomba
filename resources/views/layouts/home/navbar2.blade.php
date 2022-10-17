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
            <li><a class="nav-link mx-3 {{ Request::is('/') ? 'active' : '' }} " aria-current="page" href="/">Beranda</a></li>
            <li><a class="nav-link mx-3 {{ Request::is('rumahsakit') ? 'active' : '' }} " href="/rumahsakit">Rumah Sakit</a></li>
          <li><a class="nav-link mx-3 {{ Request::is('penyakits') ? 'active' : '' }}" href="{{ url ('/penyakits') }}">Penyakit</a></li>
          <li><a class="nav-link mx-3 {{ Request::is('tentang') ? 'active' : '' }}" href="{{ url ('/tentang') }}">Tentang</a></li>
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