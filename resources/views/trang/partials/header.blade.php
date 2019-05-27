

<header id="wn__header" class="oth-page header__area header__absolute sticky__header" >
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 col-sm-4 col-7 col-lg-2">
        <div class="logo">
          <a href="{{ url('/') }}">
            <img src="{{ asset('br/images/logo/logo.png') }}" alt="logo images">
          </a>
        </div>
      </div>
      <div class="col-lg-8 d-none d-lg-block" >
        <nav class="mainmenu__nav">
          <ul class="meninmenu d-flex justify-content-start" >
            <li class="drop with--one--item"><a href="{{ url('/') }}">Home</a></li>
            <li class="drop"><a href="{{ url('/') }}" >Books</a>
              <div class="megamenu dropdown">
                <ul class="item " style="color: black">
                  <li class="title">Categories</li>
                  @if (@isset ($cate))

                  @foreach ($cate as $key)
                  <li><a href="{{ url('?keywordcate='.$key->id) }}">{{$key->name}} </a></li>
                  @endforeach
                  @endif

                </ul>
              </div>
            </li>
            @if (Route::has('login'))
            @if(Auth::user() !== null)
           
            @if (Auth::user()->id_role <> 2)
            <li class=""><a href="{{ url('booksharecus/'.Auth::user()->id) }}">My Shop</a>
              @endif
              @endif
              
              @if(Auth::user() !== null)

              <li class=""><a href="{{ url('customer/sharebook/create') }}">chia sẻ sách</a>

                @endif

                @auth
                @else
                <li><a href="{{ route('login') }}">Login</a></li> 
                @if (Route::has('register'))
                <li><a href="{{ route('register') }}">Register</a></li>
                @endif
                @endauth
                @endif
              </li>
            </ul>
          </nav>
        </div>
        <div class="col-md-8 col-sm-8 col-5 col-lg-2">
          <ul class="header__sidebar__right d-flex justify-content-end align-items-center">
            <li class="shop_search"><a class="search__active" href="#" style="margin-right: 15px"></a></li>
            
            @if (Auth::user())
            <li class="shopcart"><a class="cartbox_active" href="#" style="margin-right: 15px"><span class="product_qun">{{Cart::count()}}</span></a>


              <!-- Start Shopping Cart -->



              <div class="block-minicart minicart__active">
                @if(Cart::count()==0)
                <p style="width: 200px;padding:5px">Không có sản phẩm nào trong giỏ hàng!</p>
                @else
                <div class="minicart-content-wrapper">
                  <div class="micart__close">
                    <span>close</span>
                  </div>

                  <div class="items-total d-flex justify-content-between">
                    <span>{{Cart::count()}} Sản phẩm</span>
                    <span>Tổng tiền</span>
                  </div>

                  <div class="total_amount text-right">

                    <span>{{Cart::total()}}</span>

                    <div class="mini_action checkout">
                      <a class="checkout__btn" href="{{ url('cart/checkout') }}">Go to Checkout</a>
                    </div>

                    <div class="single__items">
                      <div class="miniproduct">
                        @foreach (Cart::content() as $key)
                        <div class="item01 d-flex mt--20">
                          <div class="thumb">
                            <a href="product-details.html"><img src="{{ asset('uploads/product/'.$key->options->image) }}" alt="product images"></a>
                          </div>
                          <div class="content">
                            <h6><a href="product-details.html">{{$key->name}}</a></h6>
                            <span class="prize">{{number_format($key->price,0,',','.') }}</span>
                            <div class="product_prize d-flex justify-content-between">
                              <span class="qun">{{$key->qty}}</span>
                              <ul class="d-flex justify-content-end">
                                <li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
                                <li><a href="{{ url('cart/delete/'.$key->rowId) }}"><i class="zmdi zmdi-delete"></i></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        @endforeach

                      </div>
                    </div>
                    <div class="mini_action cart">
                      <a class="cart__btn" href="{{ url('cart/show') }}">Xem giỏ hàng</a>
                    </div>
                  </div>
                  @endif
                </div>
                <!-- End Shopping Cart -->
              </li>
              <!-- Button to Open the Modal -->
              <button type="button" class="btn" data-toggle="modal" data-target="#myModal"
              style="display:inline;margin-right: 10px">
              <span id="money">{{Auth::user()->vi}}</span> vnd
            </button>

            <!-- The Modal -->
            <div class="modal" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                    <H2>Nạp Tiền</H2>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                    <div class="form-container">

                      <div class="btn-group">
                        <button type="button" class="btn btn-light" onclick="tanggt50('{{Auth::user()->id}}')">50.000 VND</button>
                        <button type="button" class="btn btn-light" onclick="tanggt100('{{Auth::user()->id}}')">100.000
                        VND</button>
                        <button type="button" class="btn btn-light" onclick="tanggt200('{{Auth::user()->id}}')">200.000
                        VND</button>

                      </div><br> <br>
                      <p>Hoặc:</p>
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Nhập số tiền" id="tien"
                        name="tien1">
                        <br>
                        <div class="input-group-append">
                          <button class="btn btn-success" type="button" onclick="them('{{Auth::user()->id}}')">Nạp tiền</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Modal footer -->


                </div>
              </div>
            </div>


            <li class="setting__bar__icon"><a class="setting__active" id="myForm" href="#"></a>
              <div class="searchbar__content setting__block">
                <div class="content-inner">
                  <div class="switcher-currency">
                    <strong class="label switcher-label">
                      <ul>
                        <li><a href="{{ url('profile/'.Auth::user()->id.'/detail') }}">{{Auth::user()->name}}</a></li>
                        <li><a href="{{ url('customer/book') }}">Sách PDF đã mua</a></li>
                        <li><a href="{{ url('customer/myorder') }}">Đơn hàng cùa tôi</a></li>
                        
                      </ul>


                    </strong>
                    <div class="switcher-options">

                      <div class="switcher-currency-trigger">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          </li>
          <li>


          </li>
          @endif

        </ul>
      </div>
    </div>
    <!-- Start Mobile Menu -->

    <!-- End Mobile Menu -->
    <div class="mobile-menu d-block d-lg-none">
    </div>
    <!-- Mobile Menu -->  
  </div>    
</header>
<!-- //Header -->
<!-- Start Search Popup -->
<div class="box-search-content search_active block-bg close__top">

  {!! Form::open(['method'=>'get','url'=>'/','class'=>'minisearch','id'=>'search_mini_form']) !!}
  <div class="field__search">
    {!! Form::text('keyword','',['placeholder'=>'Nhập tên sách...']) !!}
  </div>
  {!! Form::close() !!}
  <div class="close__wrap">
    <span>close</span>
  </div>
</div>
<!-- End Search Popup -->
<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area bg-image--6">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="bradcaump__inner text-center">

        </div>
      </div>
    </div>
  </div>
</div>
<script>
  function tanggt50(id) {

    var r = confirm('Xác nhận nạp 50K vào tài khoản?');
    if (r == true) {
      var code = prompt("Nhập mã OTP:", "");
      if (code == null || code == "") {
        alert("Thất bại!")
      } else if (code == "nam") {
        var tien=50000;

        alert("thành công");
        $.get(
          '{{ url('updatevi') }}',
          {id:id,vi:tien},
          function () {
           location.reload();
         }
         );
      } else {
        alert("thất bại!");
      }
    }
  };
  function tanggt100(id) {
    var r = confirm('Xác nhận nạp 100K vào tài khoản?');
    if (r == true) {
      var code = prompt("Nhập mã OTP:", "");
      if (code == null || code == "") {
        alert("Thất bại!")
      } else if (code == "nam") {
        var tien=100000;
        alert("thành công");
        $.get(
          '{{ url('updatevi') }}',
          {id:id,vi:tien},
          function () {
           location.reload();
         }
         );
      } else {
        alert("thất bại!");
      }
    }
  };
  function tanggt200(id) {
    var r = confirm('Xác nhận nạp 200K vào tài khoản?');
    if (r == true) {
      var code = prompt("Nhập mã OTP:", "");
      if (code == null || code == "") {
        alert("Thất bại!")
      } else if (code == "nam") {
        var tien=200000;

        alert("thành công");
        $.get(
          '{{ url('updatevi') }}',
          {id:id,vi:tien},
          function () {
           location.reload();
         }
         );
      } else {
        alert("thất bại!");
      }
    }
  };
  function them(id) {
    var money = document.getElementById('money');
    var tien = document.getElementById('tien').value;        
    if (Number(tien) < 10000) {
      alert('Số tiền nạp lớn hơn 10.000 vnd');
      return false;
    } else {
      var r = confirm('Xác nhận nạp tiền vào tài khoản?');
      if (r == true) {
        var code = prompt("Nhập mã OTP:", "");
        if (code == null || code == "") {
          alert("Thất bại!")
        } else if (code == "nam") {
          document.getElementById('money').innerHTML = Number(money.innerHTML) + Number(tien);
          document.getElementById('tien').value = "";
          alert("thành công");
          $.get(
            '{{ url('updatevi') }}',
            {id:id,vi:tien},
            function () {
             location.reload();
           }
           );
        } else {
          alert("thất bại!");
        }
      }
    }

  };
  function trutien(id,iduser,tien,product,bookfull) {
    var money = document.getElementById('money');
    var price = document.getElementById('price');
    
    var r = confirm('Xác nhận đọc sách này?');
    if(Number(money.innerHTML)< Number(price.innerHTML)){
      alert('Tài khoản của bạn không đủ để sử dụng tài liệu này, vui lòng nạp thêm tiền');
      return false;
    }
    
    if (r == true) {
      var code = prompt("Nhập lại mật khẩu:", "");
      if (code == null || code == "") {
        alert("Thất bại!")
      } else if (code == "matkhau") {
        var tien=Number(price.innerHTML);
        alert("thành công");
        $.get(
          '{{ url('readbook') }}',
          {id:id,iduser:iduser,read:tien,product:product},
          function () {
            
            var link = '{{ url('uploads/bookfull/')}}';
            window.open(link+"/"+bookfull,'_blank');
            location.reload();
         }
         );
      } else {
        alert("thất bại!");
      }
    }else {
      return false;
    }
  }

</script>