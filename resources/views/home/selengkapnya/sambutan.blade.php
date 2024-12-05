@include('templates.header')

    <section>
      <div class="container mt-5">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sambutan</li>
          </ol>
        </nav>
      </div>
    </section>

    {{-- section sambutan --}}
    <section>
      <div class="container mt-3 clearfix">
        <p class="section-title mb-4" >Kata Sambutan Ketua Yayasan Pendidikan Universitas Battuta</p>
        
        <img src="/img/yayasan.png" alt="" class="w-25 float-start me-4 rounded-3" data-tilt>

        <p>
          Pemerintah, melalui Kemendikbud Ristek, telah mencanangkan kebijakan yang dikenal sebagai 'Merdeka Belajar - Kampus Merdeka'. Kebijakan ini menekan pentingnya 'perluasan kebebasan' bagi mahasiswa, selama menempuh proses pembelajaran di kampus. Dengan adanya perluasan kebebasan tersebut di atas, diharapkan kompetensi akademik yang akan para Mahasiswa Baru capai di kampus akan semakin relevan dengan permasalahan dan tantangan di 'dunia nyata'.
        </p>
        <p>
          Saya ingin menyampaikan selamat datang kepada para mahasiswa/i baru Universitas Battuta Tahun Akademik
          2023/2024. Saya percaya bahwa tentunya mahasiswa/i baru akan menggunakan kesempatan ini untuk berkarya
          secara
          maksimal baik dalam hal meningkatkan kemampuan akademik, skill dan juga dalam hal berorganisasi.
        </p>
        <p>
          Keunggulan dari kampus Universitas Battuta adalah selain dari uang kuliahnya yang sangat terjangkau,
          fasilitas yang didapat oleh mahasiswa juga beragam macam. Mulai dari ruangan yang nyaman, tersedia Wi-Fi
          di setiap lantai, ada ruang musholah, ruang seminar, dan beberapa fasilitas yang lainnya. Para dosen yang mengajar di Universitas Battuta adalah lulusan terbaik dari berbagai Perguruan Tinggi, baik dari Perguruan Tinggi Negeri maupun Swasta. Memiliki ilmu yang kompeten dan juga memiliki pengalaman serta pengetahuan yang luas. Berjiwa sosial dan pantang menyerah.
        </p>
        <p>
          Untuk tahun ajaran 2023 ini, jumlah Mahasiswa baru di Universitas Battuta hampir mendekati angka 500 orang. Sungguh ini adalah suatu prestasi yang sangat membanggakan. Karena pada tahun ini terjadi kelonjakan yang sangat drastis dari tahun-tahun sebelumnya. Proses belajar mengajar di Universitas Battuta pun pada saat ini sudah kembali normal seperti sebelum masa pandemi terjadi.
        </p>

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
              <a href="/sejarah" class="text-decoration-none"><p class="section-title-battuta">Sejarah</p></a>
              <span class="section-text">
                <p>Halaman ini berisi sejarah Universitas Battuta dari awal pendirian sampai sekarang.</p>
              </span>
            </div>
          </div>
          <div class="col-md-4 my-2 text-center" data-aos="zoom-in" data-aos-delay="500">
            <div class="card p-3" data-tilt>
              <i class="bi bi-clipboard-check-fill"></i>
              <a href="/visi-misi-tujuan" class="text-decoration-none"><p class="section-title-battuta">Visi Misi dan Tujuan</p></a>
              <span class="section-text">
                <p>Halaman ini berisi Visi, Misi, dan Tujuan dari Universitas Battuta.</p>
              </span>
            </div>
          </div>
          <div class="col-md-4 my-2 text-center" data-aos="zoom-in" data-aos-delay="750">
            <div class="card p-3" data-tilt>
              <i class="bi bi-diagram-3-fill"></i>
              <a href="/struktur-organisasi" class="text-decoration-none"><p class="section-title-battuta">Struktur Organisasi</p></a>
              <span class="section-text">
                <p>Halaman ini berisi gambar Struktur Organisasi (struktural) di Universitas Battuta.</p>
              </span>
            </div>
          </div>
        </div>

        <div class="row icon-size">
          <div class="col-md-4 my-2 text-center" data-aos="zoom-in" data-aos-delay="1000">
            <div class="card p-3" data-tilt>
              <i class="fas fa-file-alt mb-2 mt-3"></i>
              <a href="/mars-hymne" class="text-decoration-none"><p class="section-title-battuta">Mars dan Hymne</p></a>
              <span class="section-text">
                <p>Halaman ini berisi kalimat Mars dan Hymne pada Universitas Battuta.</p>
              </span>
            </div>
          </div>
          <div class="col-md-4 my-2 text-center" data-aos="zoom-in" data-aos-delay="1250">
            <div class="card p-3" data-tilt>
              <i class="fas fa-users mb-2 mt-3"></i>
              <a href="/rektorat" class="text-decoration-none"><p class="section-title-battuta">Rektorat</p></a>
              <span class="section-text">
                <p>Halaman ini berisi jajaran Rektorat (Rektor - Wakil Rektor) di Universitas Battuta</p>
              </span>
            </div>
          </div>
          <div class="col-md-4 my-2 text-center" data-aos="zoom-in" data-aos-delay="1500">
            <div class="card p-3" data-tilt>
              <i class="fas fa-tools mb-2 mt-3"></i>
              <a href="/sarana-prasarana" class="text-decoration-none"><p class="section-title-battuta">Sarana Prasarana</p></a>
              <span class="section-text">
                <p>Halaman ini berisi Sarana dan Prasarana yang ada di Universitas Battuta.</p>
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