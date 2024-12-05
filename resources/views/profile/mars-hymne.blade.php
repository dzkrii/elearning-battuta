@include('templates.header')

    <section>
      <div class="container mt-5">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Home</a></li>
            <li class="breadcrumb-item" aria-current="page">Profile</li>
            <li class="breadcrumb-item active" aria-current="page">Mars dan Hymne</li>
          </ol>
        </nav>
      </div>
    </section>

    {{-- section mars hymne --}}
    <section>
      <div class="container mt-3">
        <p class="section-title">Mars dan Hymne</p>
        <div class="img-profile mb-4" style="background-image: url('img/example-image.jpg');">
          <div class="color-overlay d-flex align-items-center">
            <h1 class="text-white ms-5" data-aos="fade-left"><i class="bi bi-file-earmark-text-fill text-white"></i> MARS DAN HYMNE</h1>
          </div>
        </div>
        
        <p class="subtitle fst-italic mt-5">data tidak tersedia.</p>

        <p class="mt-4 color-battuta-dark fst-italic">Sumber: Dokumen Yayasan Pendidikan Universitas Battuta</p>
      </div>
    </section>
    {{-- end section --}}

    {{-- section profile --}}
    <section class="bg-section-gray">
      <div class="container my-5 py-5">
        <div class="row icon-size">
          <div class="col-md-4 my-2 text-center" data-aos="zoom-in">
            <div class="card p-3" data-tilt>
              <i class="bi bi-clock-history"></i>
              <a href="sejarah" class="text-decoration-none"><p class="section-title-battuta">Sejarah</p></a>
              <span class="section-text">
                <p>Halaman ini berisi sejarah Universitas Battuta dari awal pendirian sampai sekarang.</p>
              </span>
            </div>
          </div>
          <div class="col-md-4 my-2 text-center" data-aos="zoom-in" data-aos-delay="500">
            <div class="card p-3" data-tilt>
              <i class="bi bi-clipboard-check-fill"></i>
              <a href="visi-misi" class="text-decoration-none"><p class="section-title-battuta">Visi Misi dan Tujuan</p></a>
              <span class="section-text">
                <p>Halaman ini berisi Visi, Misi, dan Tujuan dari Universitas Battuta.</p>
              </span>
            </div>
          </div>
          <div class="col-md-4 my-2 text-center" data-aos="zoom-in" data-aos-delay="1000">
            <div class="card p-3" data-tilt>
              <i class="bi bi-diagram-3-fill"></i>
              <a href="struktur-organisasi" class="text-decoration-none"><p class="section-title-battuta">Struktur Organisasi</p></a>
              <span class="section-text">
                <p>Halaman ini berisi gambar Struktur Organisasi (struktural) di Universitas Battuta.</p>
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