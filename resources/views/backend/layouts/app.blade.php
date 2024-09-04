<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>admin panel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="{{ asset('asset/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('asset/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="{{ asset('asset/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/vendor/simple-datatables/style.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
  @yield('style')
</head>

<body>
    @include('backend.layouts._header')
    @include('backend.layouts._sidebar')
    <main id="main" class="main" style="min-hieght:100vh;">
        @yield('content')
    </main>
    @include('backend.layouts._footer')    
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('asset/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/quill/quill.js') }}"></script>
    <script src="{{ asset('asset/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('asset/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('asset/js/main.js') }}"></script>
    @yield('script')
</body>
</html>