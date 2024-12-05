@include('templates.header')

    <section>
      <div class="container mt-5">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Informasi dan Pengumuman</li>
          </ol>
        </nav>
      </div>
    </section>

    {{-- section informasi --}}
    <section>
      <div class="container mt-3">
        <p class="section-title mb-4">Semua Informasi</p>

        <div class="table-responsive">
          <table class="table table-hover table-striped">
            <thead class="table-success">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Tanggal</th>
                <th scope="col">File</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($informations as $key => $information)
                <tr>
                  <td>{{ $informations->firstItem() + $key }}</td>
                  <td>{{ $information->judul }}</td>
                  <td>{{ $information->keterangan }}</td>
                  <td>{{ $information->created_at->format('d/m/Y') }}</td>
                  <td><a href="/file/information/{{ $information->file }}" target="_blank" class="btn btn-warning btn-sm color-battuta-dark"><i class="bi bi-download color-battuta-dark me-2"></i>Download</a></td>
                </tr>
              @empty
                <td colspan="5" class="bg-light">
                    <span class="text-danger"><i class="bi bi-exclamation-triangle-fill text-danger"></i> Data belum tersedia.</span>
                </td>
              @endforelse
            </tbody>
          </table>
        </div>
          
        <div class="mt-2 d-flex justify-content-center">
          {{ $informations->links() }}
        </div>
      
      </div>
    </section>
    {{-- end section --}}

    {{-- section pengumuman --}}
    <section class="bg-section-gray pb-5">
      <div class="container pt-5 mt-5">
        <p class="section-title mb-4">Semua Pengumuman</p>
        
        <div class="row">
          @forelse ($announcements as $announcement)
          <div class="col-lg-6">
            <div class="row mb-3">
              <div class="col-2" data-tilt>
                <div class="information-card shadow-sm text-center py-3">
                  <i class="bi bi-megaphone fs-3 text-warning"></i>
                </div>
              </div>
              <div class="col pt-2 me-3 rounded-3 bg-light shadow-sm">
                <a href="#" class="text-decoration-none color-battuta-dark h6">{{ $announcement->judul }}</a>
                <p class="text-date mt-1"><i class="bi bi-calendar2-week"></i> {{ $announcement->deskripsi }}</p>
              </div>
            </div>
          </div>
          @empty
            <div class="text-danger"><i class="bi bi-exclamation-triangle-fill text-danger"></i> Data belum tersedia.</div>
          @endforelse
        </div>

        <div class="mt-2 d-flex justify-content-center">
          {{ $announcements->links() }}
        </div>

      </div>
    </section>
    {{-- end section --}}

    <div class="mt-5"></div>

    {{-- section berita --}}
    @include('templates.berita-update')
    {{-- end section --}}

@include('templates.footer')