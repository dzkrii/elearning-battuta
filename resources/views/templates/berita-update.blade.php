<section>
  <div class="container mt-3">
    <p class="section-title" >Berita Ter-update</p>
    <div class="slide-container swiper">
      <div class="slide-content">
        <div class="card-wrapper swiper-wrapper">
          
          @forelse ($news as $nws)
            @php
              $tanggal = substr($nws->created_at, 8, 2);
              $bulan   = substr($nws->created_at, 5, 2);
              $tahun   = substr($nws->created_at, 0, 4);
              
              if (strlen($nws->slug) <= 70) {
                $judulBerita = $nws->judul;
              } else {
                $judulBerita = substr($nws->judul, 0, 70) . " ...";
              }
            @endphp
            <div class="card swiper-slide">
              <div class="card">
                <div class="zoom-wrapper"><img src="/file/news/{{ $nws->image }}" class="card-img-top img-fluid img-news" alt="..."></div>
                <div class="card-body">
                  <p class="card-title"><a href="/berita/{{ $nws->slug }}" class="text-decoration-none color-battuta-dark">{{ $judulBerita }}</a></p>
                  <p class="text-date"><i class="bi bi-calendar-week me-1"></i> {{ $tanggal }} @include('/templates.konversi-bulan') {{ $tahun }}<span class="ms-3"><i class="bi bi-bookmarks"></i> 
                    @if ($nws->kategori == "univ")
                        {{ "Universitas" }}
                    @elseif ($nws->kategori == "feb")
                        {{ "Fakultas Ekonomi Bisnis" }}
                    @elseif ($nws->kategori == "ft")
                        {{ "Fakultas Teknologi" }}
                    @elseif ($nws->kategori == "fhp")
                        {{ "Fakultas Hukum & Pendidikan" }}
                    @endif
                  </span></p>
                </div>
              </div>
            </div>
          @empty
            <div class="text-danger"><i class="bi bi-exclamation-triangle-fill text-danger"></i> Data belum tersedia.</div>
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
</section>