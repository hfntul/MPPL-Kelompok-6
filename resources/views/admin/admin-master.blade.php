<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title><meta charset = "UTF-8">
    <title> {{config('app.name')}}</title>
    <!--     Fonts and icons     -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!-- Nucleo Icons -->
    <link href="{{asset('css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{asset('css/material-dashboard.css?v=3.0.0')}}" rel="stylesheet" />
  </head>

  <body class="g-sidenav-show  bg-gray-200">
      @include('/admin/sidebar')
      <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
          @include('/admin/alert-notification')
          @include('/admin/navbar-admin')
          @yield('admin-content')
      </main>
  </body>
</html>
