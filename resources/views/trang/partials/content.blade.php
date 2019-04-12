@extends('layouts.index2')
@section('content')
<div class="col-lg-9 col-12 order-1 order-lg-2">
  <div class="row">
    <div class="col-lg-12">
      <div class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between">
        <div class="shop__list nav justify-content-center" role="tablist">
          <a class="nav-item nav-link active" data-toggle="tab" href="#nav-grid" role="tab"><i class="fa fa-th"></i></a>
          <a class="nav-item nav-link" data-toggle="tab" href="#nav-list" role="tab"><i class="fa fa-list"></i></a>
        </div>
        <p>Showing 1–12 of 40 results</p>
        <div class="orderby__wrapper">
          <span>Sắp xếp</span>
          <select class="shot__byselect">
            <option>Theo A->Z</option>
            <option>Giá thấp-cao</option>
            <option>Giá cao-thấp</option>
          </select>
        </div>
      </div>
    </div>
  </div>
  <div class="tab__container">
    <div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
      <div class="row">
        <!-- Start Single Product -->

        @if(isset($list))
        @foreach($list as $key)
        <div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
          <div class="product__thumb">
            <a class="first__img" href="{{ url('product/'.$key->id.'/detail') }}"><img src="{{url('uploads/product/'.$key->image)}}" alt="product image" style="width: 210px;height: 210px;"></a>
            <div class="hot__box">
              <span class="hot-label">BEST SALLER</span>
            </div>
          </div>
          <div class="product__content content--center">
            <h4><a href="single-product.html">{{$key->name}}</a></h4>
            <ul class="prize d-flex">
              <li>{{$key->price}} VND</li>
              <li class="old_prize">$35.00</li>
            </ul>
            <div class="action">
              <div class="actions_inner">
                <ul class="add_to_links">
                  <li><a class="wishlist" href="{{ url('cart/add/'.$key->id) }}"><i class="bi bi-shopping-cart-full"></i></a></li>
                  <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                  <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="product__hover--content">
              <ul class="rating d-flex">
                <li class="on"><i class="fa fa-star-o"></i></li>
                <li class="on"><i class="fa fa-star-o"></i></li>
                <li class="on"><i class="fa fa-star-o"></i></li>
                <li><i class="fa fa-star-o"></i></li>
                <li><i class="fa fa-star-o"></i></li>
              </ul>
            </div>
          </div>
        </div>

        @endforeach
        @endif

      </div>
      <ul class="wn__pagination">
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
      </ul>
    </div>
    <div class="shop-grid tab-pane fade" id="nav-list" role="tabpanel">
      <div class="list__view__wrapper">
        <!-- Start Single Product -->
        @if(isset($list))
        @foreach($list as $key)
        <div class="list__view">
          <div class="thumb">
            <a class="first__img" href="{{ url('product/'.$key->id.'/detail') }}"><img src="{{url('uploads/product/'.$key->image)}}" alt="product images"></a>

          </div>
          <div class="content">
            <h2><a href="{{ url('product/'.$key->id.'/detail') }}">{{$key->name}}</a></h2>
            <ul class="rating d-flex">
              <li class="on"><i class="fa fa-star-o"></i></li>
              <li class="on"><i class="fa fa-star-o"></i></li>
              <li class="on"><i class="fa fa-star-o"></i></li>
              <li class="on"><i class="fa fa-star-o"></i></li>
              <li><i class="fa fa-star-o"></i></li>
              <li><i class="fa fa-star-o"></i></li>
            </ul>
            <ul class="prize__box">
              <li>{{$key->price}}</li>
              <li class="old__prize"></li>
            </ul>
            <p>tom tat</p>
            <ul class="cart__action d-flex">
              <li class="cart"><a href="{{ url('cart/add/'.$key->id) }}">Add to cart</a></li>
              <li class="wishlist"><a href="cart.html"></a></li>
              <li class="compare"><a href="cart.html"></a></li>
            </ul>

          </div>
        </div>
        @endforeach
        @endif
        <!-- End Single Product -->
        <!-- Start Single Product -->
        
        <!-- End Single Product -->
      </div>
    </div>
  </div>
</div>
@endsection