<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
  @section('head')
  @include('admin.default.layouts.head')
</head>
<body id="page-top">
  <div id="wrapper">
    @section('header')
        @include('admin.default.layouts.header')
    @show

    @yield('content')
  </div>
    @section('footer')
        @include('admin.default.layouts.footer')
    @show
</body>
</html>