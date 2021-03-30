<!doctype html>
<html lang="en" id="home">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link rel="icon" href="{{ url('frontend/img/logo.png')}}" type="image/gif" sizes="16x16">
  <style>
    
    body{
      padding: 0;
      margin: 0;
    }

  </style>
  
  <title>@yield('title')</title>
</head>


<body >


  @yield('content')

  

</body>

</html>