<div class="wrapper" id="wrapper">

  <!-- Header -->
  <header id="wn__header" class="oth-page header__area header__absolute sticky__header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-7 col-lg-2">
          <div class="logo">
            <a href="index.html">
              <img src="{{ asset('br/images/logo/logo.png') }}" alt="logo images">
            </a>
          </div>
        </div>
        <div class="col-lg-8 d-none d-lg-block">
          <nav class="mainmenu__nav">
            <ul class="meninmenu d-flex justify-content-start">
              <li class="drop with--one--item"><a href="{{ url('/') }}">Home</a></li>
              <li class="drop"><a href="#">My Shop</a>
              </li>
              <li class="drop"><a href="shop-grid.html">Books</a>
                <div class="megamenu dropdown">
                  <ul class="item ">
                    <li class="title">Categories</li>
                    <li><a href="shop-grid.html">Biography </a></li>
                    <li><a href="shop-grid.html">Business </a></li>
                    <li><a href="shop-grid.html">Cookbooks </a></li>
                    <li><a href="shop-grid.html">Health & Fitness </a></li>
                    <li><a href="shop-grid.html">History </a></li>
                  </ul>
                </div>
              </li>
              <li><a href="contact.html">Contaasdasdsct</a></li>
              @if (Route::has('login'))

              @auth

              @else
              <li><a href="{{ route('login') }}">Login</a></li> 

              @if (Route::has('register'))
              <li><a href="{{ route('register') }}">Register</a></li>
              @endif
              @endauth

              @endif
            </ul>
          </nav>
        </div>
        <div class="col-md-8 col-sm-8 col-5 col-lg-2">
          <ul class="header__sidebar__right d-flex justify-content-end align-items-center">
            <li class="shop_search"><a class="search__active" href="#"></a></li>
            <li class="wishlist"><a href="#"></a></li>
            <li class="shopcart"><a class="cartbox_active" href="#"><span class="product_qun">3</span></a>
              <!-- Start Shopping Cart -->
              <div class="block-minicart minicart__active">
                <div class="minicart-content-wrapper">
                  <div class="micart__close">
                    <span>close</span>
                  </div>
                  <div class="items-total d-flex justify-content-between">
                    <span>3 items</span>
                    <span>Cart Subtotal</span>
                  </div>
                  <div class="total_amount text-right">
                    <span>$66.00</span>
                  </div>
                  <div class="mini_action checkout">
                    <a class="checkout__btn" href="cart.html">Go to Checkout</a>
                  </div>
                  <div class="single__items">
                    <div class="miniproduct">
                      <div class="item01 d-flex">
                        <div class="thumb">
                          <a href="{{ asset('') }}"><img src="{{ asset('br/images/product/sm-img/1.jpg') }}" alt="product images"></a>
                        </div>
                        <div class="content">
                          <h6><a href="product-details.html">Voyage Yoga Bag</a></h6>
                          <span class="prize">$30.00</span>
                          <div class="product_prize d-flex justify-content-between">
                            <span class="qun">Qty: 01</span>
                            <ul class="d-flex justify-content-end">
                              <li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
                              <li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="item01 d-flex mt--20">
                        <div class="thumb">
                          <a href="product-details.html"><img src="{{ asset('br/images/product/sm-img/3.jpg') }}" alt="product images"></a>
                        </div>
                        <div class="content">
                          <h6><a href="product-details.html">Impulse Duffle</a></h6>
                          <span class="prize">$40.00</span>
                          <div class="product_prize d-flex justify-content-between">
                            <span class="qun">Qty: 03</span>
                            <ul class="d-flex justify-content-end">
                              <li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
                              <li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="item01 d-flex mt--20">
                        <div class="thumb">
                          <a href="product-details.html"><img src="{{ asset('br/images/product/sm-img/2.jpg') }}" alt="product images"></a>
                        </div>
                        <div class="content">
                          <h6><a href="product-details.html">Compete Track Tote</a></h6>
                          <span class="prize">$40.00</span>
                          <div class="product_prize d-flex justify-content-between">
                            <span class="qun">Qty: 03</span>
                            <ul class="d-flex justify-content-end">
                              <li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
                              <li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mini_action cart">
                    <a class="cart__btn" href="cart.html">View and edit cart</a>
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
                      <a href="{{ url('profile/'.Auth::user()->id.'/detail') }}">{{Auth::user()->name}}</a>
                      
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
    <div class="row d-none">
      <div class="col-lg-12 d-none">
        <nav class="mobilemenu__nav">
          <ul class="meninmenu">
            <li><a href="index.html">Home</a></li>
            <li>
            </li>

            <li><a href="blog.html">Blog</a>
              <ul>
                <li><a href="blog.html">Blog Page</a></li>
                <li><a href="blog-details.html">Blog Details</a></li>
              </ul>
            </li>
            <li><a href="contact.html">Contact</a></li>
            
          </ul>
        </nav>
      </div>
    </div>
    <!-- End Mobile Menu -->
    <div class="mobile-menu d-block d-lg-none">
    </div>
    <!-- Mobile Menu -->  
  </div>    
</header>
<!-- //Header -->
<!-- Start Search Popup -->
<div class="box-search-content search_active block-bg close__top">

  {!! Form::open(['method'=>'get','url'=>'index','class'=>'minisearch','id'=>'search_mini_form']) !!}
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