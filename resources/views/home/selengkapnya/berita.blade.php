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
    
    <section>
      @php
        $tanggal = substr($newsSelect->created_at, 8, 2);
        $bulan   = substr($newsSelect->created_at, 5, 2);
        $tahun   = substr($newsSelect->created_at, 0, 4);
      @endphp
      <div class="container mt-3 clearfix">
        <p class="section-title">{{ $newsSelect->judul }}</p>
        <p class="text-date"><i class="bi bi-calendar-week me-1"></i> {{ $tanggal }} @include('templates.konversi-bulan') {{ $tahun }}<span class="ms-3"><i class="bi bi-bookmarks"></i> 
          @if ($newsSelect->kategori == "univ")
              {{ "Universitas" }}
          @elseif ($newsSelect->kategori == "feb")
              {{ "Fakultas Ekonomi Bisnis" }}
          @elseif ($newsSelect->kategori == "ft")
              {{ "Fakultas Teknologi" }}
          @elseif ($newsSelect->kategori == "fhp")
              {{ "Fakultas Hukum & Pendidikan" }}
          @endif
        </span></p>

        <img src="/file/news/{{ $newsSelect->image }}" alt="" class="image-berita img-fluid rounded-3 shadow-sm float-start me-3">
        
        {!! $newsSelect->isi !!}
        {{-- {!! $newsSelect->isi !!} --}}

        <p class="mt-4 mb-0 color-battuta-dark fst-italic">Sumber: Dokumen Yayasan Pendidikan Universitas Battuta</p>
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