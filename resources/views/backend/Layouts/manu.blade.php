

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('backend/dist/img/AdminLTELogo.png') }} " alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Tihasha Rafa</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('backend/dist/img/user2-160x160.jpg') }} " class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> --}}

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('sidebar.index') }}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Nav 
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('sidebars.index') }}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Sidebar
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{ route('home.index') }}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Home Page
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{ route('about.index') }}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                About Page
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('experience.index') }}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Experience Page
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{ route('experience.index') }}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Service Page
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>