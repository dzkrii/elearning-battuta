@include('templates.header')

    <section>
      <div class="container mt-5">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Berita</li>
          </ol>
        </nav>
      </div>
    </section>

    {{-- section berita --}}
    <section>
      <div class="container mt-3">
        <p class="section-title mb-4">Semua Berita</p>
        
        <div class="row">

          @forelse ($newss as $nwss)
            @php
              $tanggal = substr($nwss->created_at, 8, 2);
              $bulan   = substr($nwss->created_at, 5, 2);
              $tahun   = substr($nwss->created_at, 0, 4);
            @endphp
            <div class="col-md-6">
              <div class="row mb-3">
                <div class="col-md-4">
                  <div class="zoom-wrapper shadow"><img src="/file/news/{{ $nwss->image }}" alt="..." class="img-fluid rounded-3 shadow-sm"></div>
                </div>
                <div class="col-md">
                  <p class="card-title mb-3 mt-2"><a href="/berita/{{ $nwss->slug }}" class="text-decoration-none color-battuta-dark">{{ $nwss->judul }}</a></p>
                  <p class="text-date"><i class="bi bi-calendar-week me-1"></i> {{ $tanggal }} @include('templates.konversi-bulan') {{ $tahun }}<span class="ms-3"><i class="bi bi-bookmarks"></i> 
                    @if ($nwss->kategori == "univ")
                        {{ "Universitas" }}
                    @elseif ($nwss->kategori == "feb")
                        {{ "Fakultas Ekonomi Bisnis" }}
                    @elseif ($nwss->kategori == "ft")
                        {{ "Fakultas Teknologi" }}
                    @elseif ($nwss->kategori == "fhp")
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

        <div class="mt-2 d-flex justify-content-center">
          {{ $newss->links() }}
        </div>

      </div>
    </section>
    {{-- end section --}}

    {{-- section informasi --}}
    @include('templates.informasi')
    {{-- end section --}}

    <div class="mt-5"></div>

    {{-- section berita --}}
    @include('templates.berita-update')
    {{-- end section --}}

@include('templates.footer')