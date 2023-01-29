<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title') - Teknik Elektro</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('css/adminlte.min.css')}}">
  @yield('style')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <div class="collapse navbar-collapse" style="position:absolute; right:0;">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }}</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ url('/user/profile') }}"><i class="fa fa-user-circle mr-2"></i>Profil</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}" style="color: inherit;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power-off mr-2"></i>{{ __('Logout') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </div>
        </li>
      </ul>
    </div>

    {{-- <div style="">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Dropdown
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </li>
    </div> --}}
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link text-center">
      <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light">Teknik Elektro</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <p class="text-white">Hi, Sultan Maula</p>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link @yield('dashboard')">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          @can('read dosen')
          <li class="nav-item">
            <a href="{{route('daftar-dosen')}}" class="nav-link @yield('daftar-dosen')">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Dosen
              </p>
            </a>
          </li>
          @endcan
          @can('read matkul')
          <li class="nav-item">
            <a href="{{route('daftar-matkul')}}" class="nav-link @yield('daftar-matkul')">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Mata Kuliah
              </p>
            </a>
          </li>
          @endcan
          @can('read all cpl')
          <li class="nav-item">
            <a href="#" class="nav-link @yield('cpl')">
              <i class="nav-icon fas fa-user-graduate"></i>
              <p>
                CPL
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @can('read cpl')
              <li class="nav-item">
                <a href="{{route('daftar-cpl')}}" class="nav-link @yield('daftar-cpl')">
                  <i class="fa fa-clipboard-list nav-icon"></i>
                  <p>Daftar CPL</p>
                </a>
              </li>
              @endcan
              @can('read indikator cpl')
              <li class="nav-item">
                <a href="{{route('daftar-indikator-cpl')}}" class="nav-link @yield('daftar-indikator-cpl')">
                  <i class="fa fa-list nav-icon"></i>
                  <p>Daftar Indikator CPL</p>
                </a>
              </li>
              @endcan
            </ul>
          </li>
          @endcan
          @can('read all matkul')
          <li class="nav-item">
            <a href="{{route('all-matkul')}}" class="nav-link @yield('semua-matkul')">
              <i class="nav-icon fa fa-list-ol"></i>
              <p>Semua Matkul</p>
            </a>
          </li>
          @endcan
          @can('read setting')
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-wrench"></i>
              <p>
                Setting
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @can('read user')
              <li class="nav-item">
                <a href="{{route('users')}}" class="nav-link @yield('users')">
                  <i class="fas fa-user nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
              @endcan
              @can('read role')
              <li class="nav-item">
                <a href="{{route('roles')}}" class="nav-link @yield('roles')">
                  <i class="fas fa-project-diagram nav-icon"></i>
                  <p>Role</p>
                </a>
              </li>
              @endcan
              @can('read permission')
              <li class="nav-item">
                <a href="{{route('permissions')}}" class="nav-link @yield('permissions')">
                  <i class="fas fa-users-slash nav-icon"></i>
                  <p>Permission</p>
                </a>
              </li>
              @endcan
            </ul>
          </li>
          @endcan
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    {{-- <div class="float-right d-none d-sm-inline">
      Anything you want
    </div> --}}
    <!-- Default to the left -->
    <strong>Copyright &copy; <?php echo date('Y')?> Teknik Elektro.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('js/adminlte.min.js')}}"></script>
@yield('script')
</body>
</html>
