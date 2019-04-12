
<div class="col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40">
        <div class="shop__sidebar">
          <aside class="wedget__categories poroduct--cat">
            <h3 class="wedget__title">Danh mục sản phẩm</h3>
            <ul>
              @if (@isset ($cate))
                  
              @foreach ($cate as $key)
              <li><a href="{{ url('category/'.$key->id) }}">{{$key->name}} </a></li>
              @endforeach
              @endif

            </ul>
          </aside>
          <aside class="wedget__categories pro--range">
            <h3 class="wedget__title">Filter by price</h3>
            <div class="content-shopby">
              <div class="price_filter s-filter clear">
                <form action="#" method="GET">
                  <div id="slider-range"></div>
                  <div class="slider__range--output">
                    <div class="price__output--wrap">
                      <div class="price--output">
                        <span>Price :</span><input type="text" id="amount" readonly="">
                      </div>
                      <div class="price--filter">
                        <a href="#">Filter</a>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </aside>
            {{-- <aside class="wedget__categories poroduct--tag">
              <h3 class="wedget__title">Product Tags</h3>
              <ul>
                <li><a href="#">Biography</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Cookbooks</a></li>
                <li><a href="#">Health & Fitness</a></li>
                <li><a href="#">History</a></li>
                <li><a href="#">Mystery</a></li>
                <li><a href="#">Inspiration</a></li>
                <li><a href="#">Religion</a></li>
                <li><a href="#">Fiction</a></li>
                <li><a href="#">Fantasy</a></li>
                <li><a href="#">Music</a></li>
                <li><a href="#">Toys</a></li>
                <li><a href="#">Hoodies</a></li>
              </ul>
            </aside> --}}
            <aside class="wedget__categories sidebar--banner">
              <img src="{{ asset('br/images/others/banner_left.jpg') }}" alt="banner images">
              <div class="text">
                <h2>new products</h2>
                <h6>save up to <br> <strong>40%</strong>off</h6>
              </div>
            </aside>
          </div>
        </div>
