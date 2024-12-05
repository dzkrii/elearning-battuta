@include('templates.header')

    <section>
      <div class="container mt-5">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Home</a></li>
            <li class="breadcrumb-item" aria-current="page">Profile</li>
            <li class="breadcrumb-item active" aria-current="page">Visi Misi Tujuan dan Strategi</li>
          </ol>
        </nav>
      </div>
    </section>

    {{-- section visi misi --}}
    <section>
      <div class="container mt-3">
        <p class="section-title">Visi, Misi, Tujuan, & Strategi</p>
        <div class="img-profile mb-4" style="background-image: url('img/example-image.jpg');">
          <div class="color-overlay d-flex align-items-center">
            <h1 class="text-white ms-5" data-aos="fade-left"><i class="bi bi-clipboard-check-fill text-white"></i> VISI MISI TUJUAN DAN STRATEGI</h1>
          </div>
        </div>

        <p class="fw-bold fs-4 mt-5">Visi</p>
        <p>"Menjadi Perguruan Tinggi yang Unggul dalam Menghasikan Lulusan yang Berkompeten dan Profesional di Bidang Ilmu Sosial dan Terapan Serta Berdaya Saing Nasional Tahun 2024."</p>
        <p class="fw-bold fs-4">Misi</p>
        <p>
          <ol type="1" class="ps-3">
            <li>Menyelenggarakan kegiatan Pendidikan tinggi dengan layanan akademik dibidang Ilmu Sosial dan Terapan yang ditunjang oleh Kompetensi Dosen.</li>
            <li>Mengembangkan fasilitas dan infrastruktur laboratorium dan perpustakaan.</li>
            <li>Memberi konstribusi dalam meningkatkan kualitas hidup masyarakat melalui kegiatan penelitian.</li>
            <li>Memberi konstribusi dalam meningkatkan kualitas hidup masyarakat melalui kegiatan pengabdian kepada masyarakat.</li>
            <li>Membangun Kerjasama yang berkualitas kepada seluruh stakeholders.</li>
          </ol>
        </p>
        <p class="fw-bold fs-4">Tujuan</p>
        <p>
          <ol type="1" class="ps-3">
            <li>Terwujudnya Universitas Battuta yang unggul dengan lulusan yang berkompeten dan professional di bidang Ilmu Sosial dan Terapan.</li>
            <li>Menghasilkan penelitian yang relevan dan inovatif yang dapat memberikan kontribusi terhadap kesejahteraan kepada masyarakat.</li>
            <li>Terwujudnya Laboratorium dan perpustakaan yang memiliki sarana berstandar Internasional.</li>
            <li>Terwujudnya pengabdian masyarakat yang relevan dan inovatif yang dapat memberikan kontribusi terhadap kesejahteraan kepada masyarakat.</li>
            <li>Terwujudnya kemitraan yang sinergis dengan berbagai pihak baik dalam maupun luar negeri.</li>
          </ol>
        </p>
        <p class="fw-bold fs-4">Strategi</p>
        <p>
          <ol type="1" class="ps-3">
            <li>Peningkatan kapasitas dalam bidang manajemen retail dan Pendidikan inklusi.</li>
            <li>Peningkatan kompetensi dosen dan lulusan.</li>
            <li>Pengadaan sarana laboratorium dan perpustakaan berstandar Internasional.</li>
            <li>Membangun Budaya Penelitian dan PkM.</li>
            <li>Terselenggaranya kemitraan dengan para stakeholder.</li>
          </ol>
        </p>
        
        <!--<p class="subtitle fst-italic">data tidak tersedia.</p>-->

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
              <i class="bi bi-diagram-3-fill"></i>
              <a href="struktur-organisasi" class="text-decoration-none"><p class="section-title-battuta">Struktur Organisasi</p></a>
              <span class="section-text">
                <p>Halaman ini berisi gambar Struktur Organisasi (struktural) di Universitas Battuta.</p>
              </span>
            </div>
          </div>
          <div class="col-md-4 my-2 text-center" data-aos="zoom-in" data-aos-delay="500">
            <div class="card p-3" data-tilt>
              <i class="bi bi-file-earmark-text-fill"></i>
              <a href="mars-hymne" class="text-decoration-none"><p class="section-title-battuta">Mars dan Hymne</p></a>
              <span class="section-text">
                <p>Halaman ini berisi kalimat Mars dan Hymne pada Universitas Battuta.</p>
              </span>
            </div>
          </div>
          <div class="col-md-4 my-2 text-center" data-aos="zoom-in" data-aos-delay="1000">
            <div class="card p-3" data-tilt>
              <i class="bi bi-clock-history"></i>
              <a href="sejarah" class="text-decoration-none"><p class="section-title-battuta">Sejarah</p></a>
              <span class="section-text">
                <p>Halaman ini berisi sejarah Universitas Battuta dari awal pendirian sampai sekarang.</p>
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