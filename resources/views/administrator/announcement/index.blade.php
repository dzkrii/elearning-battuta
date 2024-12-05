@extends('administrator.dashboard.main')

@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-header">
            <div class="card-title">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add">
                <i class="bi bi-plus-lg"></i> Tambah Data
              </button>
            </div>
          </div>

          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Kategori</th>
                  <th>Judul</th>
                  <th>Deskripsi</th>
                  <th>Tanggal</th>
                  <th>File</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @php $nomor = 1 @endphp
                @forelse ($announcements as $announcement)
                  <tr>
                    <td>{{ $nomor }}</td>
                    <td>
                      @if ($announcement->kategori == 'univ')
                          {{ 'Universitas' }}
                      @elseif ($announcement->kategori == 'feb')
                          {{ 'Fakultas Ekonomi Bisnis' }}
                      @elseif ($announcement->kategori == 'ft')
                          {{ 'Fakultas Teknologi' }}
                      @elseif ($announcement->kategori == 'fhp')
                          {{ 'Fakultas Hukum & Pendidikan' }}
                      @endif
                    </td>
                    <td>{{ $announcement->judul }}</td>
                    <td>{{ $announcement->deskripsi }}</td>
                    <td>{{ $announcement->created_at->format('d/m/Y') }}</td> {{-- diffForHumans() --}}
                    <td><a href="/file/announcement/{{ $announcement->file }}" target="_blank"><i class="bi bi-file-pdf text-danger" style="font-size: 25px"></i></a></td>
                    <td>@if ($announcement->is_active == '0')
                        <small class="badge badge-danger">{{ "processed" }}</small>
                    @else
                      <small class="badge badge-success">{{ "published" }}</small>
                    @endif</td>
                    <td style="width: 120px">
                      <a href="" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-edit{{ $announcement->id }}">Ubah</a>
                      <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete{{ $announcement->id }}">Hapus</a>
                      @if (Auth::user()->role_id == '1' && $announcement->is_active == '0')
                        <a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-publish{{ $announcement->id }}">Published</a>
                      @endif
                    </td>
                  </tr>
                  @php $nomor++ @endphp
                  @empty
                  <div class="alert alert-danger">
                    <i class="bi bi-exclamation-triangle-fill mr-2"></i> Data belum tersedia.
                  </div>
                @endforelse
              </tbody>
            </table>

          </div>
        </div>

      </div>
    </div>
  </div>
</section>

{{-- start modal-add --}}
<div class="modal fade" id="modal-add">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Pengumuman</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="announcement" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          @csrf

          @if (auth()->user()->role_id == '1')
          <div class="form-group">
            <select class="form-control @error('kategori') is-invalid @enderror" name="kategori">
              @if (old('kategori') == "")
                <option value="">Pilih kategori</option>
                <option value="univ">Universitas</option>
                <option value="feb">Fakultas Ekonomi Bisnis</option>
                <option value="ft">Fakultas Teknologi</option>
                <option value="fhp">Fakultas Hukum & Pendidikan</option>
              @else
                <option value="{{ old('kategori') }}" selected>
                  @if (old('kategori') == 'univ')
                      Universitas
                  @elseif (old('kategori') == 'feb')
                      Fakultas Ekonomi Bisnis
                  @elseif (old('kategori') == 'ft')
                      Fakultas Teknologi
                  @else
                      Fakultas Hukum & Pendidikan
                  @endif
                </option>
                <option value="univ">Universitas</option>
                <option value="feb">Fakultas Ekonomi Bisnis</option>
                <option value="ft">Fakultas Teknologi</option>
                <option value="fhp">Fakultas Hukum & Pendidikan</option>
              @endif
            </select>
            @error('kategori')
                <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          @else
            <input type="hidden" name="kategori" value="{{ auth()->user()->divisi }}">
          @endif

          <div class="form-group">
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="" placeholder="Masukkan judul" value="{{ old('judul') }}">
            @error('judul')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-group">
            <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" id="" placeholder="Masukkan deskripsi" value="{{ old('deskripsi') }}">
            @error('deskripsi')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-group">
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" @error('file') is-invalid @enderror" id="file" name="file">
                <label class="custom-file-label" for="file">Pilih file</label>
              </div>
            </div>
            <small class="fst-italic text-success">*ukuran file maksimal 5 MB dengan format pdf/doc/docx/xls/xlsx</small>
            @error('file')
              <small class="d-block text-danger mt-1">{{ $message }}</small>
            @enderror
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
{{-- end modal-add --}}

{{-- start modal-edit --}}
@foreach ($announcements as $announcement)
  <div class="modal fade" id="modal-edit{{ $announcement->id }}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Ubah Pengumuman</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="announcement/{{ $announcement->id }}" method="POST" enctype="multipart/form-data">
          @method('PUT')
          <div class="modal-body">
            @csrf
            
            @if (auth()->user()->role_id == '1')
              <div class="form-group">
                <select class="form-control @error('kategori') is-invalid @enderror" name="kategori">
                  @if (old('kategori') == "")
                    <option value="univ" @if ($announcement->kategori == 'univ') selected @endif>Universitas</option>
                    <option value="feb" @if ($announcement->kategori == 'feb') selected @endif>Fakultas Ekonomi Bisnis</option>
                    <option value="ft" @if ($announcement->kategori == 'ft') selected @endif>Fakultas Teknologi</option>
                    <option value="fhp" @if ($announcement->kategori == 'fhp') selected @endif>Fakultas Hukum & Pendidikan</option>
                  @else
                    <option value="{{ old('kategori') }}" selected>
                      @if (old('kategori') == 'univ')
                          Universitas
                      @elseif (old('kategori') == 'feb')
                          Fakultas Ekonomi Bisnis
                      @elseif (old('kategori') == 'ft')
                          Fakultas Teknologi
                      @else
                          Fakultas Hukum & Pendidikan
                      @endif
                    </option>
                    <option value="univ">Universitas</option>
                    <option value="feb">Fakultas Ekonomi Bisnis</option>
                    <option value="ft">Fakultas Teknologi</option>
                    <option value="fhp">Fakultas Hukum & Pendidikan</option>
                  @endif
                </select>
                @error('kategori')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
            @else
              <input type="hidden" name="kategori" value="{{ auth()->user()->divisi }}">
            @endif

            <div class="form-group">
              <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="" placeholder="Masukkan judul" value="{{ $announcement->judul }}">
              @error('judul')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="form-group">
              <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" id="" placeholder="Masukkan deskripsi" value="{{ $announcement->deskripsi }}">
              @error('deskripsi')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" @error('file') is-invalid @enderror" id="file" name="file">
                  <label class="custom-file-label" for="file">{{ $announcement->file }}</label>
                </div>
              </div>
              <small class="fst-italic text-success">*ukuran file maksimal 5 MB dengan format pdf/doc/docx/xls/xlsx</small>
              @error('file')
                <small class="d-block text-danger mt-1">{{ $message }}</small>
              @enderror
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endforeach
{{-- end modal-edit --}}

{{-- start modal-delete --}}
@foreach ($announcements as $announcement)
  <div class="modal fade" id="modal-delete{{ $announcement->id }}">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-body h5">Apakah anda yakin akan menghapus data ini??</div>
              <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                  <form action="announcement/{{ $announcement->id }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <input type="submit" class="btn btn-primary" value="Ya">
                  </form>
              </div>
          </div>
      </div>
  </div>
@endforeach
{{-- end modal-delete --}}

{{-- start modal-publish --}}
@foreach ($announcements as $announcement)
  <div class="modal fade" id="modal-publish{{ $announcement->id }}">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-body h5">Apakah anda yakin akan mem-publish data ini??</div>
              <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                  <form action="announcement/published/{{ $announcement->id }}" method="POST">
                      @csrf
                      @method('PUT')
                      <input type="submit" class="btn btn-primary" value="Ya">
                  </form>
              </div>
          </div>
      </div>
  </div>
@endforeach
{{-- end modal-publish --}}

@endsection
