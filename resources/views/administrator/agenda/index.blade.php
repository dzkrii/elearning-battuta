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
                  <th>Tanggal</th>
                  <th>Waktu</th>
                  <th>Tempat</th>
                  <th>Gambar</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @php $nomor = 1 @endphp
                @forelse ($agendas as $agenda)
                  <tr>
                    <td>{{ $nomor }}</td>
                    <td>
                      @if ($agenda->kategori == 'univ')
                          {{ 'Universitas' }}
                      @elseif ($agenda->kategori == 'feb')
                          {{ 'Fakultas Ekonomi Bisnis' }}
                      @elseif ($agenda->kategori == 'ft')
                          {{ 'Fakultas Teknologi' }}
                      @elseif ($agenda->kategori == 'fhp')
                          {{ 'Fakultas Hukum & Pendidikan' }}
                      @endif
                    </td>
                    <td>{{ $agenda->judul }}</td>
                    <td>{{ $agenda->tanggal_start . " - " . $agenda->tanggal_end }}</td>
                    <td>{{ $agenda->waktu_start . " - " . $agenda->waktu_end . " WIB" }}</td>
                    <td>{{ $agenda->tempat }}</td>
                    <td><a href="/file/agenda/{{ $agenda->image }}" target="_blank"> <img src="/file/agenda/{{ $agenda->image }}" alt="" style="height: 50px; border-radius: 5px"> </a></td>
                    <td>@if ($agenda->is_active == '0')
                        <small class="badge badge-danger">{{ "processed" }}</small>
                    @else
                    <small class="badge badge-success">{{ "published" }}</small>
                    @endif</td>
                    <td style="width: 120px">
                      <a href="" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-edit{{ $agenda->id }}">Ubah</a>
                      <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete{{ $agenda->id }}">Hapus</a>
                      @if (Auth::user()->role_id == '1' && $agenda->is_active == '0')
                        <a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-publish{{ $agenda->id }}">Published</a>
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
        <h4 class="modal-title">Tambah Agenda</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="agenda" method="POST" enctype="multipart/form-data">
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

          <div class="row">
            <div class="col">
              <div class="form-group">
                <input type="date" class="form-control @error('tanggal_start') is-invalid @enderror" name="tanggal_start" id="" placeholder="" value="{{ old('tanggal_start') }}">
                @error('tanggal_start')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            </div>
            <div class="col">
              <div class="form-group">
                <input type="date" class="form-control @error('tanggal_end') is-invalid @enderror" name="tanggal_end" id="" placeholder="" value="{{ old('tanggal_end') }}">
                @error('tanggal_end')
                <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="form-group">
                <input type="time" class="form-control @error('waktu_start') is-invalid @enderror" name="waktu_start" id="" placeholder="" value="{{ old('waktu_start') }}">
                @error('waktu_start')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <input type="time" class="form-control @error('waktu_end') is-invalid @enderror" name="waktu_end" id="" placeholder="" value="{{ old('waktu_end') }}">
                @error('waktu_end')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
            </div>
          </div>

          <div class="form-group">
            <input type="text" class="form-control @error('tempat') is-invalid @enderror" name="tempat" id="" placeholder="Masukkan tempat" value="{{ old('tempat') }}">
            @error('tempat')
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
@foreach ($agendas as $agenda)
  <div class="modal fade" id="modal-edit{{ $agenda->id }}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Ubah Agenda</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="agenda/{{ $agenda->id }}" method="POST" enctype="multipart/form-data">
          @method('PUT')
          <div class="modal-body">
            @csrf
            
            @if (auth()->user()->role_id == '1')
              <div class="form-group">
                <select class="form-control @error('kategori') is-invalid @enderror" name="kategori">
                  @if (old('kategori') == "")
                    <option value="univ" @if ($agenda->kategori == 'univ') selected @endif>Universitas</option>
                    <option value="feb" @if ($agenda->kategori == 'feb') selected @endif>Fakultas Ekonomi Bisnis</option>
                    <option value="ft" @if ($agenda->kategori == 'ft') selected @endif>Fakultas Teknologi</option>
                    <option value="fhp" @if ($agenda->kategori == 'fhp') selected @endif>Fakultas Hukum & Pendidikan</option>
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
              <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="" placeholder="Masukkan judul" value="{{ $agenda->judul }}">
              @error('judul')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="row">
              <div class="col">
                <div class="form-group">
                  <input type="date" class="form-control @error('tanggal_start') is-invalid @enderror" name="tanggal_start" id="" placeholder="" value="{{ $agenda->tanggal_start }}">
                  @error('tanggal_start')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <input type="date" class="form-control @error('tanggal_end') is-invalid @enderror" name="tanggal_end" id="" placeholder="" value="{{ $agenda->tanggal_end }}">
                  @error('tanggal_end')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="form-group">
                  <input type="time" class="form-control @error('waktu_start') is-invalid @enderror" name="waktu_start" id="" placeholder="" value="{{ $agenda->waktu_start }}">
                  @error('waktu_start')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <input type="time" class="form-control @error('waktu_end') is-invalid @enderror" name="waktu_end" id="" placeholder="" value="{{ $agenda->waktu_end }}">
                  @error('waktu_end')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>
              </div>
            </div>

            <div class="form-group">
              <input type="text" class="form-control @error('tempat') is-invalid @enderror" name="tempat" id="" placeholder="Masukkan tempat" value="{{ $agenda->tempat }}">
              @error('tempat')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" @error('image') is-invalid @enderror" id="image" name="image">
                  <label class="custom-file-label" for="image">{{ $agenda->image }}</label>
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
@foreach ($agendas as $agenda)
  <div class="modal fade" id="modal-delete{{ $agenda->id }}">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-body h5">Apakah anda yakin akan menghapus data ini??</div>
              <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                  <form action="agenda/{{ $agenda->id }}" method="POST">
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
@foreach ($agendas as $agenda)
  <div class="modal fade" id="modal-publish{{ $agenda->id }}">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-body h5">Apakah anda yakin akan mem-publish data ini??</div>
              <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                  <form action="agenda/published/{{ $agenda->id }}" method="POST">
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
