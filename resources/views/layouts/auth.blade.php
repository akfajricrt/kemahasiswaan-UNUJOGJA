<!doctype html>
<html lang="en" id="home">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="icon" href="{{ url('frontend/img/logo.png')}}" type="image/gif" sizes="16x16">
  <style>
    

    .card-body{
      padding: 20px;
      border-radius: 20px;
      box-shadow: 0 3px 12px rgba(0, 0,0, 0.2);
    }

  
    .card-body .judul-form h3{
      font-size: 24px;
      color: #616161;
    }

    .card-body label{
      font-size: 15px;
      color: #616161;
    }

    .card-body input{
      border-radius: 20px;
      padding: 6px;
      background-color: #f4fbff;
    }

    .card-body .btn{
      border-radius: 20px;
      padding: 10px;
      margin-top: 20px;
    }

   
    @media (min-width: 768px) {
      .container{
          width: 70%;
        } 
    }
    @media (min-width: 992px) {
      .container{
          width: 50%;
          
        } 

      .card-body label{
          font-size: 16px;
       }

      .card-body{
          padding: 30px;
          border-radius: 25px;
      }

      .card-body input{
          border-radius: 20px;
          padding: 10px;
        }
    }
  </style>
  
  <title>@yield('title')</title>
</head>


<body >


  @yield('content')

  

</body>

</html>