<!doctype html>
<html lang="en" id="home">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  @stack('addon-style')
  @include('includes.style')


  <link rel="icon" href="{{ url('frontend/img/logo.png')}}" type="image/gif" sizes="16x16">
  <title>@yield('title')</title>
</head>


<body>

  <!-- navbar -->

  @include('includes.navbar')
  <!-- akhir navbar -->

  @yield('content')

  @include('includes.footer')

  @include('includes.script')

  @stack('addon-script')

</body>

</html>