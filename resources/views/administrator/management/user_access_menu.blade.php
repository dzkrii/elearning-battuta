@extends('administrator.dashboard.main')

@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-header">
            <div class="card-title">
              <a href="/dashboard/menu" class="btn btn-danger"><i class="bi bi-arrow-left"></i> Kembali</a>
            </div>
          </div>

          <div class="card-body">
            <form action="user-access-menu" method="POST">
              @csrf

              <h4>Nama menu: <span class="text-primary">{{ $dataMenu[0]['menu'] }}</span></h4>
              <input type="hidden" name="menuId" value="{{ $dataMenu[0]['id'] }}">
              <h4>Hak akses:</h4>

              <div class="row">
                {{-- @php $i = 1; @endphp --}}
                {{-- @foreach ($roleConverter as $index => $role)
                  @php
                    if ($index < 1) {
                      continue;
                    }
                  @endphp --}}
                  
                @foreach ($roles as $role)
                  <div class="col-md-4">
                    <div class="card mb-3 p-3 callout callout-success">
                      <div class="custom-control custom-checkbox">
                        {{-- {{ $role->user_access_menu->role_id }} --}}

                        <input class="custom-control-input" type="checkbox" name="role_id[]" id="role_id[]" value="" 
                          {{-- @php
                            for ($i = 0; $i < count($hakAkses); $i++) {
                                $roles = $hakAkses[$i]->user->role;
                                // echo $roles == $index ? 'checked' : '';
                            }
                          @endphp --}}
                        >
                       
                        <label for="role_id[]" class="custom-control-label">{{ $role->role }}</label>

                      </div>
                    </div>
                  </div>
                @endforeach
              </div>

              <button type="submit" class="btn btn-primary float-right d-none d-sm-block"><i class="bi bi-save"></i> Simpan perubahan</button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

@endsection
