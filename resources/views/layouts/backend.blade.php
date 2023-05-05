<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <style>
        .gradasi {
            background: linear-gradient(90deg, #00C9FF 0%, #92FE9D 100%);
            color: white;
        }
    </style>
    @livewireStyles
</head>
  <body>
    {{-- navigasi komponen --}}
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">{{ config('app.name') }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-start align-items-center flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link {{ request()->is('dashboard') ? 'active ' : '' }}" href="{{ url('dashboard') }}">Dashboad</a>
              </li>
              {{-- @if (auth()->user()->role == 'admin') --}}
              <li class="nav-item">
                <a  class="nav-link {{ request()->is('karyawan*') ? 'active ' : '' }}" href="{{ url('karyawan') }}">Employees</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('jabatan*') ? 'active ' : '' }}" href="{{ url('jabatan') }}">Job Title</a>
              </li>
              {{-- @endif --}}
              <li class="nav-item">
                <a class="nav-link {{ request()->is('user*') ? 'active ' : '' }}" href="{{ url('user') }}">User Profil</a>
              </li>
            </ul>
            {{-- <div class="d-flex gap-2 justify-content-center align-items-center">
              <img src="{{ '/storage/'.auth()->user()->foto_profil ?? asset('img/profile.gif') }}" class="rounded-circle img-fluidl" width="40"  alt="no profil">
              <div class="d-grid">
                <small class="text-capitalize lead">{{ auth()->user()->name }}</small>
                <span class="badge gradasi2 text-capitalize">{{ auth()->user()->role }}</span>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
    </nav>
    {{-- konten komponen --}}
    <main>
        @yield('konten')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  @livewireScripts
  </body>
</html>