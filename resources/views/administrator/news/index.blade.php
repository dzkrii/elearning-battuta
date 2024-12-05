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
                  <th>Isi Berita</th>
                  <th>Tanggal</th>
                  <th>Gambar</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @php $nomor = 1 @endphp
                @forelse ($news as $nws)
                  <tr>
                    <td>{{ $nomor }}</td>
                    <td>
                      @if ($nws->kategori == 'univ')
                          {{ 'Universitas' }}
                      @elseif ($nws->kategori == 'feb')
                          {{ 'Fakultas Ekonomi Bisnis' }}
                      @elseif ($nws->kategori == 'ft')
                          {{ 'Fakultas Teknologi' }}
                      @elseif ($nws->kategori == 'fhp')
                          {{ 'Fakultas Hukum & Pendidikan' }}
                      @endif
                    </td>
                    <td>{{ $nws->judul }}</td>
                    <td>{{ substr($nws->isi, 0, 100) }}</td>
                    <td>{{ $nws->created_at->format('d/m/Y') }}</td>
                    <td><a href="/file/news/{{ $nws->image }}" target="_blank"> <img src="/file/news/{{ $nws->image }}" alt="" style="height: 50px; border-radius: 5px"> </a></td>
                    <td>@if ($nws->is_active == '0')
                        <small class="badge badge-danger">{{ "processed" }}</small>
                    @else
                    <small class="badge badge-success">{{ "published" }}</small>
                    @endif</td>
                    <td style="width: 120px">
                      <a href="" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-edit{{ $nws->id }}">Ubah</a>
                      <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete{{ $nws->id }}">Hapus</a>
                      @if (Auth::user()->role_id == '1' && $nws->is_active == '0')
                        <a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-publish{{ $nws->id }}">Published</a>
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
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Berita</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="news" method="POST" enctype="multipart/form-data">
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
            <textarea id="summernote" class="form-control @error('isi') is-invalid @enderror" name="isi">Masukkan isi berita</textarea>
            @error('isi')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="form-group">
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" @error('image') is-invalid @enderror" id="image" name="image">
                <label class="custom-file-label" for="image">Pilih file</label>
              </div>
            </div>
            <small class="fst-italic text-success">*ukuran file maksimal 5 MB dengan format png/jpeg/jpg</small>
            @error('image')
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
@foreach ($news as $nws)
  <div class="modal fade" id="modal-edit{{ $nws->id }}">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Ubah Berita</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="news/{{ $nws->id }}" method="POST" enctype="multipart/form-data">
          @method('PUT')
          <div class="modal-body">
            @csrf
            
            @if (auth()->user()->role_id == '1')
              <div class="form-group">
                <select class="form-control @error('kategori') is-invalid @enderror" name="kategori">
                  @if (old('kategori') == "")
                    <option value="univ" @if ($nws->kategori == 'univ') selected @endif>Universitas</option>
                    <option value="feb" @if ($nws->kategori == 'feb') selected @endif>Fakultas Ekonomi Bisnis</option>
                    <option value="ft" @if ($nws->kategori == 'ft') selected @endif>Fakultas Teknologi</option>
                    <option value="fhp" @if ($nws->kategori == 'fhp') selected @endif>Fakultas Hukum & Pendidikan</option>
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
              <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="" placeholder="Masukkan judul" value="{{ $nws->judul }}">
              @error('judul')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="form-group">
              <textarea id="" class="summernote-edit form-control @error('isi') is-invalid @enderror" name="isi">{{ $nws->isi }}</textarea>
              @error('isi')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="form-group">
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" @error('image') is-invalid @enderror" id="image" name="image">
                  <label class="custom-file-label" for="image">{{ $nws->image }}</label>
                </div>
              </div>
              <small class="fst-italic text-success">*ukuran file maksimal 5 MB dengan format png/jpg/jpeg</small>
              @error('image')
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
@foreach ($news as $nws)
  <div class="modal fade" id="modal-delete{{ $nws->id }}">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-body h5">Apakah anda yakin akan menghapus data ini??</div>
              <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                  <form action="news/{{ $nws->id }}" method="POST">
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
@foreach ($news as $nws)
  <div class="modal fade" id="modal-publish{{ $nws->id }}">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-body h5">Apakah anda yakin akan mem-publish data ini??</div>
              <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                  <form action="news/published/{{ $nws->id }}" method="POST">
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
