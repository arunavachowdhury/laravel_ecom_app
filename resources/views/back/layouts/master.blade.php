<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{back_asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{back_asset('css/adminlte.min.css')}}">
  <!-- BEGIN PAGE LEVEL PLUGINS -->
  @stack('PAGE_PLUGINS_CSS')
  <!-- END PAGE LEVEL PLUGINS -->
  <!-- BEGIN PAGE LEVEL CSS -->
  @stack('PAGE_ASSETS_CSS')
  <!-- END PAGE LEVEL CSS -->

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  @include(BACKEND_THEME_NAME.'.layouts.header')

  @include(BACKEND_THEME_NAME.'.layouts.sidebar')

  @yield('content')

  @include(BACKEND_THEME_NAME.'.layouts.footer')

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{back_asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{back_asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{back_asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- BEGIN PAGE PLUGIN JS -->
@stack('PAGE_PLUGINS_JS')
<!-- END PAGE PLUGIN JS -->
<!-- BEGIN PAGE ASSET JS -->
@stack('PAGE_ASSET_JS')
<!-- END PAGE ASSET JS -->
</body>
</html>
