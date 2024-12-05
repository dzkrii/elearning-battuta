<section class="bg-section-gray pb-5">
  <div class="container pt-5 mt-5">
    <div class="row pb-5">
      <div class="col">
        <div class="section-title text-center" data-aos="zoom-in">Informasi & Pengumuman</div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 section-text mb-3" data-aos="flip-left">
        <div class="list-group">

          @forelse ($informations as $information)
            <a href="/file/information/{{ $information->file }}" target="_blank" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h6 class="mb-1 color-battuta-dark">{{ $information->judul }}</h6>
                <small>{{ $information->created_at->diffForHumans() }}</small>
              </div>
              <p class="mb-1"><i class="bi bi-file-earmark-arrow-down"></i> {{ $information->keterangan }}</p>
            </a>
          @empty
            <div class="text-danger"><i class="bi bi-exclamation-triangle-fill text-danger"></i> Data belum tersedia.</div>
          @endforelse

        </div>
      </div>

      <div class="col-md" data-aos="zoom-in">

        @forelse ($announcements as $announcement)
          <div class="row mb-3" data-tilt>
            <div class="col">
              <div class="information-card section-text p-3">
                <a href="" class="h6 text-warning text-decoration-none"><i class="bi bi-megaphone text-white"></i> {{ $announcement->judul }}</a>
                <p class="mb-1 text-white">{{ $announcement->deskripsi }}</p>
              </div>
            </div>
          </div>
        @empty
          <div class="text-danger"><i class="bi bi-exclamation-triangle-fill text-danger"></i> Data belum tersedia.</div>
        @endforelse
        
      </div>
    </div>

    <div class="row" data-aos="zoom-in">
      <div class="text-center mt-3">
        <a href="/informasi-all" class="btn btn-sm buttons">Selengkapnya</a>
      </div>
    </div>

  </div>
</section>