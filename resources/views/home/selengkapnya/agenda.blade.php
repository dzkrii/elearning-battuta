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
    
    <section>
      @php
        $tgl_start = substr($agendaSelect->tanggal_start, 8, 2);
        $bln_start = substr($agendaSelect->tanggal_start, 5, 2);
        $thn_start = substr($agendaSelect->tanggal_start, 0, 4);
        $tgl_end = substr($agendaSelect->tanggal_end, 8, 2);
        $bln_end = substr($agendaSelect->tanggal_end, 5, 2);
        $thn_end = substr($agendaSelect->tanggal_end, 0, 4);
      @endphp
      <div class="container mt-3 clearfix">
        <p class="section-title">{{ $agendaSelect->judul }}</p>

        <div class="row">
          <div class="col-md px-2 d-flex justify-content-center mb-3">
            <img src="/file/agenda/{{ $agendaSelect->image }}" alt="" class="img-fluid rounded-2 w-75">
          </div>
          <div class="col-md px-2">
            <p class="fs-5">Tanggal kegiatan: {{ $tgl_start . "/" . $bln_start . "/" . $thn_start . " - " . $tgl_end . "/" . $bln_end . "/" . $thn_end}}</p>
            <p class="fs-5">Waktu kegiatan: {{ $agendaSelect->waktu_start . " - " . $agendaSelect->waktu_end }} WIB</p>
            <p class="fs-5">Tempat kegiatan: {{ $agendaSelect->tempat }}</p>
          </div>
        </div>

        <div class="text-center mt-3 mb-4">
          <a href="/agenda-all" class="btn btn-sm buttons">Lihat agenda lainnya</a>
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