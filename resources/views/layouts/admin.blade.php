<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>@yield('title') | BookStore</title>
  <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="shortcut icon" href="{{ asset('favicon_16.ico')}}"/>
  <link rel="bookmark" href="{{ asset('favicon_16.ico')}}"/>
  <!-- site css -->
  <link rel="stylesheet" href="{{ asset('dist/css/site.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/style.css')}}">

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
    <nav role="navigation" class="navbar navbar-custom">
      <div class="container-fluid" style="height: 100px;">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a href="{{url('/') }}">
            <div class="navbar-brand" style="color: #352CEC;margin: 20px" ><font size="8">Controll Panel</font></div>
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div id="bs-content-row-navbar-collapse-5" class=" navbar-collapse" style="height: 100px;" >
          <ul class="nav navbar-nav navbar-right" style="margin: 20px">

            @if ($thongbao)<li class="active"><a href="{{ url('admin/checkout') }}"><font size="6">Thông báo <span class="dot">{{$thongbao}}</span></a></li>
            @endif</font>
            <!-- <li class="disabled"><a href="#">Link</a></li> -->
            <li class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">@if (Auth::user())
                <font size="6">{{ Auth::user()->name }} </font>
                <b class="caret"></b></a>
                <ul role="menu" class="dropdown-menu">
                  <li class="dropdown-header">Setting</li>
                  <li><a href="{!! url('admin/user/'.Auth::user()->id.'/detail')!!}">Thông tin người dùng</a></li>
                  
                  <li class="disabled">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </li>
              </ul>
            </li>@endif 
          </ul>

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <!--header-->
    <div class="container-fluid">
      <!--documents-->
      <div class="row row-offcanvas row-offcanvas-left">
        @include('partials.list')
        @include('partials.content')
      </div><!-- content -->
    </div>
  </div>
  <!--footer-->

</div>
@include('partials.footer')
</body>
</html>
