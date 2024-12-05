@include('templates.header')

    <section>
      <div class="container mt-5">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Home</a></li>
            <li class="breadcrumb-item" aria-current="page">Universitas</li>
            <li class="breadcrumb-item active" aria-current="page">Sarana Prasarana</li>
          </ol>
        </nav>
      </div>
    </section>

    {{-- section sarpras --}}
    <section>
      <div class="container mt-3">
        <p class="section-title">Sarana Prasarana</p>
        <div class="img-profile mb-4" style="background-image: url('img/example-image.jpg');">
          <div class="color-overlay d-flex align-items-center">
            <h1 class="text-white ms-5" data-aos="fade-left"><i class="fas fa-tools text-white"></i> SARANA PRASARANA</h1>
          </div>
        </div>
        
        <div class="row mt-5">
          <div class="col-lg-3 col-md-6 mb-3 text-center">
            <div class="article-card">
              <div class="content">
                <p class="title">Ruangan Yayasan</p>
              </div>
              <img src="img/sarpras/ruang-yayasan.jpg" alt="" class="w-100"/>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-3 text-center">
            <div class="article-card">
              <div class="content">
                <p class="title">Ruangan Dosen</p>
              </div>
              <img src="img/sarpras/ruang-dosen.jpg" alt="" class="w-100"/>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-3 text-center">
            <div class="article-card">
              <div class="content">
                <p class="title">Ruangan Kelas</p>
              </div>
              <img src="img/sarpras/ruang-kelas.jpg" alt="" class="w-100"/>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-3 text-center">
            <div class="article-card">
              <div class="content">
                <p class="title">Ruangan LPM dan UPT SI</p>
              </div>
              <img src="img/sarpras/ruang-lpm-upt-si.jpg" alt="" class="w-100"/>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-3 text-center">
            <div class="article-card">
              <div class="content">
                <p class="title">Ruangan Rapat</p>
              </div>
              <img src="img/sarpras/ruang-rapat.jpg" alt="" class="w-100"/>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-3 text-center">
            <div class="article-card">
              <div class="content">
                <p class="title">Ruangan Seminar</p>
              </div>
              <img src="img/sarpras/ruang-seminar.png" alt="" class="w-100"/>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-3 text-center">
            <div class="article-card">
              <div class="content">
                <p class="title">Ruangan UKS</p>
              </div>
              <img src="img/sarpras/ruang-uks.jpg" alt="" class="w-100"/>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-3 text-center">
            <div class="article-card">
              <div class="content">
                <p class="title">Ruangan Perpustakaan</p>
              </div>
              <img src="img/sarpras/perpustakaan.jpg" alt="" class="w-100"/>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-3 text-center">
            <div class="article-card">
              <div class="content">
                <p class="title">Ruangan Bimbingan Akademik</p>
              </div>
              <img src="img/sarpras/ruang-bimbingan-akademik.jpg" alt="" class="w-100"/>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-3 text-center">
            <div class="article-card">
              <div class="content">
                <p class="title">Lab. Komputer (1)</p>
              </div>
              <img src="img/sarpras/lab-komputer-1.jpg" alt="" class="w-100"/>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-3 text-center">
            <div class="article-card">
              <div class="content">
                <p class="title">Lab. Komputer (2)</p>
              </div>
              <img src="img/sarpras/lab-komputer-2.jpg" alt="" class="w-100"/>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-3 text-center">
            <div class="article-card">
              <div class="content">
                <p class="title">Lab. Programming</p>
              </div>
              <img src="img/sarpras/lab-programming.jpg" alt="" class="w-100"/>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-3 text-center">
            <div class="article-card">
              <div class="content">
                <p class="title">Musholah</p>
              </div>
              <img src="img/sarpras/musholah.jpg" alt="" class="w-100"/>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-3 text-center">
            <div class="article-card">
              <div class="content">
                <p class="title">Kantin</p>
              </div>
              <img src="img/sarpras/kantin.jpg" alt="" class="w-100"/>
            </div>
          </div>
        </div>

        <p class="mt-4 color-battuta-dark fst-italic">Sumber: Dokumen Yayasan Pendidikan Universitas Battuta</p>
      </div>
    </section>
    {{-- end section --}}

    {{-- section universitas --}}
    <section class="bg-section-gray">
      <div class="container my-5 py-5">
        <div class="row icon-size">
          <div class="col-md-4 my-2 text-center" data-aos="zoom-in">
            <div class="card p-3" data-tilt>
              <i class="fas fa-users mb-2 mt-3"></i>
              <a href="rektorat" class="text-decoration-none"><p class="section-title-battuta">Rektorat</p></a>
              <span class="section-text">
                <p>Halaman ini berisi informasi tentang Rektorat Universitas Battuta.</p>
              </span>
            </div>
          </div>
          <div class="col-md-4 my-2 text-center" data-aos="zoom-in" data-aos-delay="500">
            <div class="card p-3" data-tilt>
              <i class="fas fa-spell-check mb-2 mt-3"></i>
              <a href="lembaga-penjamin-mutu" class="text-decoration-none"><p class="section-title-battuta">LPM</p></a>
              <span class="section-text">
                <p>Halaman ini berisi informasi tentang LPM Universitas Battuta.</p>
              </span>
            </div>
          </div>
          <div class="col-md-4 my-2 text-center" data-aos="zoom-in" data-aos-delay="1000">
            <div class="card p-3" data-tilt>
              <i class="fab fa-connectdevelop mb-2 mt-3"></i>
              <a href="https://lppmbattuta.ac.id/" class="text-decoration-none" target="_blank"><p class="section-title-battuta">LPPM</p></a>
              <span class="section-text">
                <p>Halaman ini berisi informasi tentang LPPM Universitas Battuta.</p>
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- end section --}}

    {{-- section berita --}}
    @include('templates.berita-update')
    {{-- end section --}}

@include('templates.footer')