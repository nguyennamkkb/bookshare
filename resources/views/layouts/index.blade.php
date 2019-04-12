<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>@yield('title') | BookStore</title>
  <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="shortcut icon" href="{{ asset('favicon_16.ico')}}"/>
  <link rel="bookmark" href="{{ asset('favicon_16.ico')}}"/>
  <!-- site css -->
  <link rel="stylesheet" href="{{ asset('css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('dist/css/site.min.css')}}">

  <!-- <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> -->
  <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="{{ asset('dist/js/site.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js')}}"></script>
  </head>
  <body style="font-size: 16px;">
    <!--nav-->

    <nav role="navigation" class="xanhdam" style="margin-bottom: 0; ">
      <div class="container" >
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">

          <div class="navbar-brand trang"  >Dia chi</div>
          <div class="navbar-brand trang" >So dien thoai</div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div id="bs-content-row-navbar-collapse-5" class="collapse navbar-collapse trang">
          <ul class="nav navbar-nav navbar-right ">
            <li class="active"><a href="index.html"><span class="glyphicon glyphicon-log-in"></span> Dang ky</a></li>
            <li class="active"><a href="index.html"><span class="glyphicon glyphicon-log-out"></span> Dang nhap</a></li>
            <!-- <li class="disabled"><a href="#">Link</a></li> -->
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <!--header-->
    <div class="container-fluid xanh"  >
      <div class="container" >
        <div class=" row-left col-md-4">
          <img src="{{ asset('img/logo2.png') }}">
        </div>

        <div class="col-md-6 margin">
          <div class="form-search search-only" >
            <i class="search-icon glyphicon glyphicon-search"></i>
            <input type="text" class="form-control search-query" >
          </div>
        </div>
        <div class="col-md-2 margin">
          <button type="button" class="btn btn-default btn-sm rounded">
          <span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart
        </button>
        </div>

      </div>
      <!--documents-->
      <div class="row row-offcanvas row-offcanvas-left">

      </div><!-- content -->
    </div>
    <!--footer-->

  </div>

</body>
</html>
