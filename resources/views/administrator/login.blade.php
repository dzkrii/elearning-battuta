@include('administrator.partials.header')

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Halaman Login</b></a>
  </div>

  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">
        <img src="img/battuta.png" alt="" class="w-50 rounded-circle shadow">
      </p>

      <form action="" method="POST">
        @csrf
        <div class="input-group">
          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}">
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
          <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        @error('password')
            <small class="text-danger">{{ $message }}</small>
        @enderror

        <div class="row">
          <div class="col">
            <button type="submit" class="btn btn-primary btn-block my-3"><i class="bi bi-box-arrow-in-right"></i> Masuk</button>
          </div>
        </div>
      </form>

      <p class="m-0 d-flex justify-content-center">
        <a href="#" class="small">Lupa password?</a>
      </p>
      <p class="m-0 d-flex justify-content-center">
        <a href="/register" class="small">Buat akun baru!</a>
      </p>
    </div>
  </div>
</div>

@include('administrator.partials.footer')