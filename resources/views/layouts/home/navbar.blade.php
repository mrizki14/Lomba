<!-- *NAVBAR* -->
<header>
    <nav class="navbar navbar-expand-md navbar-expand-lg bg-transparent navbar-expand-xl fixed-top py-3">
      <div class="container-fluid px-5">
        <a class="navbar-brand-1" href="#"><img src="{{ asset('assets//image/brand-1.png')}}" alt="brand-2" /><span>His</span><b>CARE</b></a>

        <div class="hamburger-menu">
          <input id="menu__toggle" type="checkbox" />
          <label class="menu__btn" for="menu__toggle">
              <span></span>
          </label>
                
                    <!-- Sidebar -->
                    <ul class="top-menu menu__box navbar-nav ms-auto">
                    <li class="logo-off-canvas navbar-brand-1"><img src="{{ asset('assets//image/brand-1.png')}}" alt="" class="img-fluid "><h4 class="ms-2"><span>His</span><b>CARE</b></h4></li>
                    <li class="menu__item"><a class="nav-link-1 mx-3 {{ Request::is('index') ? 'active' : '' }} " aria-current="page" href="/">Beranda</a></li>
                    <li class="menu__item"><a class="nav-link-1 mx-3 {{ Request::is('rumahsakit') ? 'active' : '' }} " href="/rumahsakit">Rumah Sakit</a></li>
                    <li class="menu__item"><a class="nav-link-1 mx-3 {{ Request::is('penyakits') ? 'active' : '' }}" href="{{ url ('/penyakit') }}">Penyakit</a></li>
                    <li class="menu__item"><a class="nav-link-1 mx-3 {{ Request::is('tentang') ? 'active' : '' }}" href="{{ url ('/tentang') }}">Tentang</a></li>
                      @guest               
                    <li class="menu__item">
                      <a class="nav-link-1 mx-3 login-1" href="/login">Masuk <img src="{{ asset('assets/image/icon/icon-login-2.svg') }}" alt="icon-login" /></a>
                    </li> 
                    @endguest
                    @auth
                    <li class="menu__item"><a class="nav-link-1 mx-3" href="/dashboard">Dashboard</a></li>
                    @endauth
                  </ul>
                    <!-- End of Sidebar -->
          </div>

        <div class="navbar-links">
          <ul class="top-menu navbar-nav ms-auto">
            <li><a class="nav-link-1 mx-3 {{ Request::is('/') ? 'active' : '' }} " aria-current="page" href="/">Beranda</a></li>
            <li><a class="nav-link-1 mx-3 {{ Request::is('rumahsakit') ? 'active' : '' }} " href="/rumahsakit">Rumah Sakit</a></li>
            <li><a class="nav-link-1 mx-3 {{ Request::is('penyakits') ? 'active' : '' }}" href="{{ url ('/penyakit') }}">Penyakit</a></li>
            <li><a class="nav-link-1 mx-3 {{ Request::is('tentang') ? 'active' : '' }}" href="{{ url ('/tentang') }}">Tentang</a></li>
            @guest               
            <li>
              <a class="nav-link-1 mx-3 login-1" href="/login">Masuk <img src="{{ asset('assets/image/icon/icon-login-2.svg') }}" alt="icon-login" /></a>
            </li> 
            @endguest
            @auth
            <li><a class="nav-link-1 mx-3" href="/dashboard">Dashboard</a></li>
            @endauth
          </ul>
        </div>
      </div>
    </nav>