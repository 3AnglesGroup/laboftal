<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Laboratorios Oftálmicos</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    @stack('style')
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<!-- ______________________________________________________________________-->

<body id="page-top">
  <div id="app" style="height:100%">
    <div id="home"></div>
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">nav</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top" ><img class="logo_empresa" src="img/logo.png"></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="/#home">HOME</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/#productos">PRODUCTOS</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{url('servicio')}}">SERVICIO TÉCNICO</a>
                    </li>
                    <li>
                       <a class="page-scroll" href="/#contact">CONTACTO</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
<!-- ______________________________________________________________________-->

  @yield('content')

<!-- _________________________________________________________________-->

   @include('layouts.footer')

<!-- _________________________________________________________________-->
</div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/creative.min.js"></script>
    <script src="js/app.js"></script>

</body>

</html>
