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
            @if (Auth::user()->id_role <> 2)
            <li class=""><a href="{{ url('booksharecus/'.Auth::user()->id) }}">My Shop</a>
              @endif

              <li class=""><a href="{{ url('customer/sharebook/create') }}">Share book</a>
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
            <li class="shopcart"><a class="cartbox_active" href="#" style="margin-right: 15px"><span class="product_qun">{{Cart::count()}}</span></a>
              <!-- Start Shopping Cart -->
              <div class="block-minicart minicart__active">
                <div class="minicart-content-wrapper">
                  <div class="micart__close">
                    <span>close</span>
                  </div>
                  <div class="items-total d-flex justify-content-between">
                    <span>{{Cart::count()}} Sản phẩm</span>
                    <span>Tổng tiền</span>
                  </div>
                  <div class="total_amount text-right">
                    <span>{{Cart::total()}}</to>
                    </div>
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
                </div>
                <!-- End Shopping Cart -->
              </li>
              @if (Auth::user())
              <li class="setting__bar__icon"><a class="setting__active" href="#"></a>
                <div class="searchbar__content setting__block">
                  <div class="content-inner">
                    <div class="switcher-currency">
                      <strong class="label switcher-label">
                        <ul>
                          <li><a href="{{ url('profile/'.Auth::user()->id.'/detail') }}">{{Auth::user()->name}}</a></li>
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