@include('templates.header')

{{-- carousel --}}
<div id="carouselExampleIndicators" class="carousel slide">
    {{-- <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
            aria-label="Slide 4"></button>
    </div> --}}
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/carousel/elearning-01.png" class="d-block w-100" alt="...">
        </div>
        {{-- <div class="carousel-item">
            <img src="/img/carousel/carousel-02.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/img/carousel/03.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/img/carousel/4.png" class="d-block w-100" alt="...">
        </div> --}}
    </div>
    {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button> --}}
</div>
{{-- end carousel --}}

{{-- section kata sambutan --}}
{{-- <section>
      <div class="container my-5">
        <div class="row pb-5">
          <div class="col">
            <div class="section-title text-center" data-aos="zoom-in">Kata Sambutan Ketua Yayasan Pendidikan Universitas Battuta</div>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-md-4" data-aos="zoom-out">
            <img src="/img/yayasan.png" class="w-75 img-fluid img-yayasan shadow" alt="yayasan" data-tilt>
            <p class="text-center fw-bold pt-3 name-text">Drs. H. Margono, M.M.</p>
          </div>
          <div class="col-md text-start section-text px-3" data-aos="zoom-in">
            <p>
              Pemerintah, melalui Kemendikbud Ristek, telah mencanangkan kebijakan yang dikenal sebagai 'Merdeka Belajar - Kampus Merdeka'. Kebijakan ini menekan pentingnya 'perluasan kebebasan' bagi mahasiswa, selama  menempuh proses pembelajaran di kampus. Dengan adanya perluasan kebebasan tersebut di atas, diharapkan kompetensi akademik yang akan para Mahasiswa Baru capai di kampus akan semakin relevan dengan permasalahan dan tantangan di 'dunia nyata'.
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
              di setiap lantai, ada ruang musholah, ruang seminar, dan beberapa fasilitas yang lainnya ...
            </p>
            <div class="text-center mt-5">
              <a href="/kata-sambutan-ketua-yayasan-universitas-battuta" class="btn btn-sm buttons">Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
{{-- end section --}}

{{-- section fakultas --}}
<section class="bg-section-gray">
    <div class="container my-5 py-5">
        <div class="row icon-size">
            <div class="col-md-4 text-center my-2" data-aos="zoom-in">
                <div data-tilt>
                    <i class="bi bi-bank2"></i>
                    <a href="" class="text-decoration-none">
                        <p class="section-title-battuta">Fakultas Ekonomi Bisnis</p>
                    </a>
                    <span class="section-text">
                        <p>Terdiri dari 4 Prodi: Akuntansi, Kewirausahaan, Manajemen, dan Manajemen Retail.</p>
                    </span>
                </div>
            </div>
            <div class="col-md-4 text-center my-2" data-aos="zoom-in" data-aos-delay="500">
                <div data-tilt>
                    <i class="bi bi-pc-display-horizontal"></i>
                    <a href="" class="text-decoration-none">
                        <p class="section-title-battuta">Fakultas Teknologi</p>
                    </a>
                    <span class="section-text">
                        <p>Terdiri dari 3 Prodi: Informatika, Sistem Informasi, dan Teknologi Informasi.</p>
                    </span>
                </div>
            </div>
            <div class="col-md-4 text-center my-2" data-aos="zoom-in" data-aos-delay="1000">
                <div data-tilt>
                    <i class="bi bi-buildings"></i>
                    <a href="" class="text-decoration-none">
                        <p class="section-title-battuta">Fakultas Hukum & Pendidikan</p>
                    </a>
                    <span class="section-text">
                        <p>Terdiri dari 3 Prodi: Hukum, Pendidikan Guru SD, dan Pendidikan Guru PAUD.</p>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- end section --}}

{{-- section berita --}}
<section>
    <div class="container my-5">
        <div class="row pb-5">
            <div class="col">
                <div class="section-title text-center" data-aos="zoom-in">Berita Ter-update</div>
            </div>
        </div>

        <div class="row" data-aos="zoom-in">
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">

                        @forelse ($news as $nws)
                            @php
                                $tanggal = substr($nws->created_at, 8, 2);
                                $bulan = substr($nws->created_at, 5, 2);
                                $tahun = substr($nws->created_at, 0, 4);

                                if (strlen($nws->slug) <= 70) {
                                    $judulBerita = $nws->judul;
                                } else {
                                    $judulBerita = substr($nws->judul, 0, 70) . ' ...';
                                }

                            @endphp
                            <div class="card swiper-slide">
                                <div class="card">
                                    <div class="zoom-wrapper"><img src="/file/news/{{ $nws->image }}"
                                            class="card-img-top img-fluid img-news" alt="..."></div>
                                    <div class="card-body">
                                        <p class="card-title mb-3"><a href="/berita/{{ $nws->slug }}"
                                                class="text-decoration-none color-battuta-dark">{{ $judulBerita }}</a>
                                        </p>
                                        <p class="text-date"><i class="bi bi-calendar-week me-1"></i>
                                            {{ $tanggal }} @include('templates.konversi-bulan') {{ $tahun }}<span
                                                class="ms-3"><i class="bi bi-bookmarks"></i>
                                                @if ($nws->kategori == 'univ')
                                                    {{ 'Universitas' }}
                                                @elseif ($nws->kategori == 'feb')
                                                    {{ 'Fakultas Ekonomi Bisnis' }}
                                                @elseif ($nws->kategori == 'ft')
                                                    {{ 'Fakultas Teknologi' }}
                                                @elseif ($nws->kategori == 'fhp')
                                                    {{ 'Fakultas Hukum & Pendidikan' }}
                                                @endif
                                            </span></p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="text-danger"><i class="bi bi-exclamation-triangle-fill text-danger"></i> Data
                                belum tersedia.</div>
                        @endforelse

                    </div>
                </div>
                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination"></div>

            </div>
            <div class="text-center mt-4">
                <a href="/berita-all" class="btn btn-sm buttons">Lihat berita lainnya</a>
            </div>
        </div>
    </div>
</section>
{{-- end section --}}

{{-- section video dan agenda --}}
<section class="bg-section-gray">
    <div class="container pt-5">
        <div class="row gx-md-5">

            <div class="col-md-5 mb-5" data-aos="flip-left">
                <div class="row">
                    <div class="section-title mb-5">Video Kampus</div>
                </div>
                <div class="row">
                    <div class="container-video">
                        <iframe class="responsive-iframe" src="https://www.youtube.com/embed/t4ouJncXx_w"></iframe>
                    </div>
                    <p class="mt-3">New Building Battuta University!! come join with us!!</p>
                </div>
            </div>

            <div class="col-md pb-5" data-aos="flip-right">
                <div class="card-section p-3">
                    <div class="tools">
                        <div class="circle">
                            <span class="red box"></span>
                        </div>
                        <div class="circle">
                            <span class="yellow box"></span>
                        </div>
                        <div class="circle">
                            <span class="green box"></span>
                        </div>
                    </div>
                    <div class="card__content">
                        <div class="row">
                            <div class="section-title mb-5">Agenda Ter-update</div>
                        </div>
                        <div class="row mb-2">

                            @forelse ($agendas as $agenda)
                                @php
                                    $tgl_start = substr($agenda->tanggal_start, 8, 2);
                                    $bln_start = substr($agenda->tanggal_start, 5, 2);
                                    $thn_start = substr($agenda->tanggal_start, 2, 2);
                                    $tgl_end = substr($agenda->tanggal_end, 8, 2);
                                    $bln_end = substr($agenda->tanggal_end, 5, 2);
                                    $thn_end = substr($agenda->tanggal_end, 2, 2);
                                    $bulan = $bln_start;
                                    $tahun = substr($agenda->tanggal_start, 0, 4);
                                @endphp
                                <div class="col-3 d-flex flex-column mb-3" data-tilt>
                                    <div class="box-agenda text-center">
                                        <div class="big-date">{{ $tgl_start }}</div>
                                        <div class="color-battuta-dark">@include('templates.konversi-bulan')
                                            {{ $tahun }}</div>
                                    </div>
                                </div>
                                <div class="col-9 d-flex flex-column justify-content-center mb-3">
                                    <a href="/agenda/{{ $agenda->slug }}"
                                        class="text-decoration-none color-battuta-dark">{{ $agenda->judul }}</a>
                                    <div class="text-date mt-2"><i class="bi bi-calendar-week"></i>
                                        {{ $tgl_start . '/' . $bln_start . '/' . $thn_start . ' - ' . $tgl_end . '/' . $bln_end . '/' . $thn_end }}
                                        <span class="ms-3"><i class="bi bi-alarm"></i>
                                            {{ $agenda->waktu_start . ' - ' . $agenda->waktu_end }} WIB</span><span
                                            class="ms-3"><i class="bi bi-geo-alt"></i> {{ $agenda->tempat }}</span>
                                    </div>
                                </div>
                            @empty
                                <div class="text-danger"><i class="bi bi-exclamation-triangle-fill text-danger"></i>
                                    Data belum tersedia.</div>
                            @endforelse

                        </div>

                        <div class="text-center mt-2 mb-4">
                            <a href="/agenda-all" class="btn btn-sm buttons">Lihat agenda lainnya</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
{{-- end section --}}

{{-- section mitra --}}
{{-- <section>
    <div class="container mt-5">
        <div class="row pb-5">
            <div class="col">
                <div class="section-title text-center" data-aos="zoom-in">Mitra Kami</div>
            </div>
        </div>

        <div class="row" data-aos="zoom-in">
            <div class="col">
                <div class="tech-slideshow">
                    <div class="mover-mitra"></div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
{{-- end section --}}

{{-- <hr class="container hr-gradient my-5"> --}}

{{-- section informasi --}}
@include('templates.informasi')
{{-- end section --}}

{{-- section kata mereka --}}
{{-- <section>
    <div class="container mt-5">
        <div class="row pb-5">
            <div class="col">
                <div class="section-title text-center" data-aos="zoom-in">Apa Kata Mereka Tentang Universitas Battuta?
                </div>
            </div>
        </div>

        <div class="row" data-aos="zoom-in">
            <div class="col-md">
                <ul class="person">
                    <li>
                        <div class="person-image" style="background-image: url('img/person/person-01.png');"></div>
                        <div class="person-panel" data-tilt>
                            <div class="person-heading">
                                <h5 class="color-battuta-dark">Dr. Fikri Alhaq Fachryana, M.M.</h5>
                                <span class="text-warning fst-italic">Head Main Branch JNE Medan</span>
                            </div>
                            <div class="person-body">
                                <p>Kami memberikan apresiasi positif kepada Univ. Battuta sebagai kampus yang memberikan
                                    peluang usaha kepada para Mahasiswanya untuk bisa langsung ke dunia kerja.</p>
                            </div>
                        </div>
                    </li>
                    <li class="person-inverted">
                        <div class="person-image" style="background-image: url('img/person/person-02.png');"></div>
                        <div class="person-panel" data-tilt>
                            <div class="person-heading">
                                <h5 class="color-battuta-dark">Antoni Jekson Siahaan, S.E.</h5>
                                <span class="text-warning fst-italic">Store General Manager Lotte Mart</span>
                            </div>
                            <div class="person-body">
                                <p>Universitas Battuta sebagai pelopor Perguruan Tinggi dengan Prodi Manajemen Retail
                                    yang pertama dalam jurusan Bisnis Retail.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="person-image" style="background-image: url('img/person/person-03.png');"></div>
                        <div class="person-panel" data-tilt>
                            <div class="person-heading">
                                <h5 class="color-battuta-dark">Rahma Hadi Yansyah, S.M.</h5>
                                <span class="text-warning fst-italic">HRD - Training Center Indomaret</span>
                            </div>
                            <div class="person-body">
                                <p>Universitas Battuta siap menjadi pioneer Program Studi Kewirausahaan di Kota Medan
                                    dan Sumatera Utara yang siap memberikan kompetensi yang dibutuhkan Mahasiswa.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row" data-aos="zoom-in">
            <div class="text-center mt-3">
                <a href="" class="btn btn-sm buttons">Selengkapnya</a>
            </div>
        </div>
    </div>
</section> --}}
{{-- end section --}}

@include('templates.footer')
