<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>{{ config('app.name') }} | Login</title>
      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Font Awesome Icons -->
      <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
      <!-- overlayScrollbars -->
      <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
      <!-- Theme style -->
      <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
   </head>
   <body class="hold-transition login-page">
      <div class="login-box">
       @yield('login-content')
      </div>
      <!-- ./login dic -->
      <!-- jQuery -->
      <script src=" {{ asset('plugins/jquery/jquery.min.js') }} "></script>
      <!-- Bootstrap -->
      <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
      <!-- AdminLTE App -->
      <script src=" {{ asset('dist/js/adminlte.js') }} "></script>
   </body>
</html>