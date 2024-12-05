@include('auth.partials.header')

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Halaman Registrasi</b></a>
  </div>

  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">
        <img src="img/Logo-AMP.png" alt="" class="w-75">
      </p>
      
      <form action="" method="POST">
        @csrf

        Mendaftar sebagai?
        <div class="custom-control custom-radio">
          <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio">
          <label for="customRadio1" class="custom-control-label">Pengguna</label>
        </div>
        <div class="custom-control custom-radio">
          <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio">
          <label for="customRadio2" class="custom-control-label">Pemohon</label>
        </div>

        <div class="input-group mt-3">
          <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="Masukkan nama anda" value="{{ old('nama') }}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        @error('nama')
          <small class="text-danger">{{ $message }}</small>
        @enderror
        
        <div class="input-group mt-3">
          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Masukkan email anda" value="{{ old('email') }}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        @error('email')
          <small class="text-danger">{{ $message }}</small>
        @enderror

        <div class="input-group mt-3">
          <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Masukkan password anda">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        @error('password')
            <small class="text-danger">{{ $message }}</small>
        @enderror
        
        <div class="input-group mt-3">
          <input type="password" class="form-control @error('password2') is-invalid @enderror" name="password2" placeholder="Ulangi password anda">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        @error('password2')
            <small class="text-danger">{{ $message }}</small>
        @enderror

        <div class="row">
          <div class="col">
            <button type="submit" class="btn btn-primary btn-block my-3"><i class="bi bi-box-arrow-in-right"></i> Registrasi Akun</button>
          </div>
        </div>
      </form>

      <p class="m-0 d-flex justify-content-center">
        <a href="#" class="small">Lupa password?</a>
      </p>
      <p class="m-0 d-flex justify-content-center">
        <a href="/auth" class="small">Sudah punya akun? Silakan login!</a>
      </p>
    </div>
  </div>
</div>

@include('auth.partials.footer')