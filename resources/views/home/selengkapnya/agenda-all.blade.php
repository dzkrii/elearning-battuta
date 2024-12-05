@include('templates.header')

    <section>
      <div class="container mt-5">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Agenda</li>
          </ol>
        </nav>
      </div>
    </section>

    {{-- section agenda --}}
    <section>
      <div class="container mt-3">
        <p class="section-title mb-4">Semua Agenda</p>
        
        <div class="row">
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
            <div class="col-md-6">
              <div class="row mb-3">
                <div class="col-3 d-flex flex-column mb-3" data-tilt>
                  <div class="box-agenda text-center">
                      <div class="big-date">{{ $tgl_start }}</div>
                      <div class="color-battuta-dark">@include('templates.konversi-bulan') {{ $tahun }}</div>
                  </div>
                </div>
                <div class="col-9 d-flex flex-column justify-content-center mb-3">
                  <a href="/agenda/{{ $agenda->slug }}" class="text-decoration-none color-battuta-dark">{{ $agenda->judul }}</a>
                  <div class="text-date mt-2"><i class="bi bi-calendar-week"></i> {{ $tgl_start . "/" . $bln_start . "/" . $thn_start . " - " . $tgl_end . "/" . $bln_end . "/" . $thn_end}} <span class="ms-3"><i class="bi bi-alarm"></i> {{ $agenda->waktu_start . " - " . $agenda->waktu_end }} WIB</span><span class="ms-3"><i class="bi bi-geo-alt"></i> {{ $agenda->tempat }}</span></div>
                </div>
              </div>
            </div>
            @empty
            <div class="text-danger"><i class="bi bi-exclamation-triangle-fill text-danger"></i> Data belum tersedia.</div>
          @endforelse
        </div>

        <div class="mt-2 d-flex justify-content-center">
          {{ $agendas->links() }}
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