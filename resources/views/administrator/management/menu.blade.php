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
                  <th>Nama menu</th>
                  <th>URL</th>
                  <th>Icon</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @php $nomor = 1 @endphp
                @foreach ($menus as $menu)
                  <tr>
                    <td>{{ $nomor }}</td>
                    <td>{{ $menu->menu }}</td>
                    <td>{{ $menu->url }}</td>
                    <td>{!! $menu->icon !!}</td>
                    <td>
                      <a href="" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-edit{{ $menu->id }}">Ubah</a>
                      <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete{{ $menu->id }}">Hapus</a>
                      <a href="user-access-menu/{{ $menu->id }}" class="btn btn-success btn-sm">Role menu</a>
                    </td>
                  </tr>
                  @php $nomor++ @endphp
                @endforeach
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
        <h4 class="modal-title">Tambah Menu</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="menu" method="POST">
        <div class="modal-body">
          @csrf
          <div class="form-group">
            <input type="text" class="form-control @error('menu') is-invalid @enderror" name="menu" id="" placeholder="Masukkan nama menu" value="{{ old('menu') }}">
            @error('menu')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-group">
            <input type="text" class="form-control @error('url') is-invalid @enderror" name="url" id="" placeholder="Masukkan url" value="{{ old('url') }}">
            @error('url')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control @error('icon') is-invalid @enderror" name="icon" id="" placeholder="Masukkan icon" value="{{ old('icon') }}">
              <span class="input-group-append">
                <a href="https://icons.getbootstrap.com/" target="_blank" class="btn btn-info btn-flat"><i class="bi bi-search"></i></a>
              </span>
            </div>
            @error('icon')
                <small class="text-danger">{{ $message }}</small>
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
@foreach ($menus as $menu)
  <div class="modal fade" id="modal-edit{{ $menu->id }}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Ubah Menu</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="menu/{{ $menu->id }}" method="POST">
          @method('PUT')
          <div class="modal-body">
            @csrf
            <div class="form-group">
              <input type="text" class="form-control @error('menu') is-invalid @enderror" name="menu" id="" placeholder="Masukkan nama menu" value="{{ $menu->menu }}">
              @error('menu')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="form-group">
              <input type="text" class="form-control @error('url') is-invalid @enderror" name="url" id="" placeholder="Masukkan url" value="{{ $menu->url }}">
              @error('url')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="form-group">
              <div class="input-group">
                <input type="text" class="form-control @error('icon') is-invalid @enderror" name="icon" id="" placeholder="Masukkan icon" value="{{ $menu->icon }}">
                <span class="input-group-append">
                  <a href="https://icons.getbootstrap.com/" target="_blank" class="btn btn-info btn-flat"><i class="bi bi-search"></i></a>
                </span>
              </div>
              @error('icon')
                  <small class="text-danger">{{ $message }}</small>
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
@foreach ($menus as $menu)
  <div class="modal fade" id="modal-delete{{ $menu->id }}">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-body h5">Apakah anda yakin akan menghapus data ini??</div>
              <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                  <form action="{{ url("dashboard/menu/$menu->id")}}" method="POST">
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

@endsection
