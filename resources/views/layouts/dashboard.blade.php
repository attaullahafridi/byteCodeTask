<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo-fav.png') }}">
    <title>User Role & Permission - @yield('title')</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/perfect-scrollbar/css/perfect-scrollbar.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/material-design-icons/css/material-design-iconic-font.min.css') }}"/>
    @yield('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" type="text/css"/>
  </head>
  <body>
    <div class="be-wrapper">
      <nav class="navbar navbar-expand fixed-top be-top-header">
        <div class="container-fluid">
          <div class="be-navbar-header">
            <a class="navbar-brand" href="{{ route('home') }}"></a>
          </div>
          <div class="be-right-navbar">
            <ul class="nav navbar-nav float-right be-user-nav">
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><img src="{{ asset('assets/img/avatar-150.png') }}" alt="Avatar"><span class="user-name">Túpac Amaru</span></a>
                <div class="dropdown-menu" role="menu">
                  <div class="user-info">
                    <div class="user-name">{{ Auth::user()->name }}</div>
                    <div class="user-position online">Available</div>
                  </div>
                  <a class="dropdown-item" href="#">
                    <span class="icon mdi mdi-face"></span>Profile
                  </a>
                  <a class="dropdown-item" href="#">
                    <span class="icon mdi mdi-settings"></span>Settings
                  </a>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                    <span class="icon mdi mdi-power"></span>
                    {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                </div>
              </li>
            </ul>
            <ul class="nav navbar-nav float-right be-icons-nav">
            </ul>
          </div>
        </div>
      </nav>
      <div class="be-left-sidebar">
        <div class="left-sidebar-wrapper">
          <a class="left-sidebar-toggle" href="#">Blank Page</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <li class="divider">Menu</li>
                  <li>
                    <a href="{{ route('home') }}">
                      <i class="icon mdi mdi-home"></i>
                      <span>Dashboard</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('customer') }}">
                      <i class="icon mdi mdi-home"></i>
                      <span>Customer</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="be-content">
        <div class="main-content container-fluid">
          @include('error.errors')

          @yield('content')
        </div>
      </div>
    </div>
    <script src="{{ asset('assets/lib/jquery/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>
    @stack('scripts')
    <script type="text/javascript">
      $(document).ready(function(){
        //-initialize the javascript
        App.init();
      });

    </script>
  </body>
</html>
