@include('administrator.dashboard.partials.header')

@include('administrator.dashboard.partials.sidebar')

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">

        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{ $title }}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>
          </div>
        </div>

        @if ($title == "Dashboard")
          <div class="row mt-4">
            <div class="col-lg-3 col-6">
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>{{ $countBerita }} data</h3>
                  <p>Berita</p>
                </div>
                <div class="icon">
                  <i class="bi bi-newspaper" style="font-size: 60px"></i>
                </div>
                {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>{{ $countAgenda }} data</h3>
                  <p>Agenda</p>
                </div>
                <div class="icon">
                  <i class="bi bi-calendar-week" style="font-size: 60px"></i>
                </div>
                {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>{{ $countInformasi }} data</h3>
                  <p>Informasi</p>
                </div>
                <div class="icon">
                  <i class="bi bi-info-circle" style="font-size: 60px"></i>
                </div>
                {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>{{ $countPengumuman }} data</h3>
                  <p>Pengumuman</p>
                </div>
                <div class="icon">
                  <i class="bi bi-megaphone" style="font-size: 60px"></i>
                </div>
                {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
              </div>
            </div>
          </div>
        @endif

      </div>
    </section>
  
    <section class="content">
      
      @yield('content')

    </section>
  </div>

@include('administrator.dashboard.partials.footer')