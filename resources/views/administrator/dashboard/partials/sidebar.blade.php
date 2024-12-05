<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="#" class="brand-link">
    <img src="/img/battuta.png" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">ADMINISTRATOR</span>
  </a>

  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="/img/admin-profile/default.png" class="img-circle elevation-2" alt="">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
      </div>
    </div>

    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        {{-- <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="../widgets.html" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Widgets
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li> --}}

        @foreach ($menuId as $menu)
          <li class="nav-item">
            <a href="{{ $menu->menu->url }}" class="nav-link {{ $title == $menu->menu->menu ? 'active' : '' }}">
              <span class="nav-icon"> {!! $menu->menu->icon !!} </span>
              <p>
                {{ $menu->menu->menu }}
              </p>
            </a>
          </li>
        @endforeach

        <li class="nav-item">
          <a href="/logout" class="nav-link">
            <span class="nav-icon"> <i class="bi bi-box-arrow-right"></i> </span>
            <p>
              Logout
            </p>
          </a>
        </li>
      </ul>
    </nav>
    
  </div>
</aside>