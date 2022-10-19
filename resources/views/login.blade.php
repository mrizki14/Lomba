<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/login.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <title>Login</title>
    <link rel="icon" href="{{ asset('assets/image/brand-2.png')}}">
</head>
<body>
    
    <form action="login/store" method="POST">
      @csrf
      <div class="container-fluid">
        <div class="section-login">
          <div class="row">
            <div class="bg-login col-md-6">
              <a class="back-home {{ Request::is('/') ? 'active' : '' }}" href="/"><i class="bi bi-arrow-left"></i>
              </a>
              <img src="{{ asset('assets/image/login.png') }}" />
            </div>
            <div class="form-login col-md-6">
              <div class="form-isi">
                <div class="welcome">
                  <h2>Selamat Datang, <br /><span class="line-kuning"></span>His<span>CARE</span> !</h2>
                  <p class="mt-3">Masuk untuk mengetahui<br />kondisimu.</p>
                  <div class="form-content pb-5">
                    <div class="input-group mb-3 shadow-sm">
                      <span class="input-group-text p-2 border-0" id="email"><i class="bi bi-person-fill"></i></span>
                      <input type="text" name="email" class="form-control border-0 p-2" placeholder="Masukan Email" aria-label="Belajar mewarnai" aria-describedby="name" />
                    </div>
                    <div class="input-group mb-3 shadow-sm">
                      <span class="input-group-text p-2 border-0" id="password"><i class="bi bi-lock-fill"></i></i></span>
                      <input type="password" class="form-control border-0 p-2" placeholder="Masukan Kata Sandi" aria-label="Belajar mewarnai" aria-describedby="password" name="password" />
                    </div>
                    <div class="mb-3 form-check text-end">
                      <label class="form-check-label text-decoration-none" for="exampleCheck1"><a href="#">Lupa Kata Sandi</a></label>
                    </div>
                    <button type="submit" value="save" class="btn btn-primary w-100">Masuk</button>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>