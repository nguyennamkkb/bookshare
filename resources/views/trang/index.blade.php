@extends('layouts.index2')
@section('left')
<div class="col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40">
  <div class="shop__sidebar">
   <aside class="wedget__categories poroduct--cat">
    <h3 class="wedget__title">Danh mục sản phẩm</h3>
    <ul>
     @if (@isset ($cate))

     @foreach ($cate as $key)
     <li><a href="{{ url('?keywordcate='.$key->id) }}">{{$key->name}} </a></li>
     @endforeach
     @endif

   </ul>

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
            <div class="price--filter"><a href="#">Filter</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</aside>

<aside class="wedget__categories sidebar--banner">
 <img src="{{ asset('br/images/others/banner_left.jpg') }}" alt="banner images">
 <div class="text">
  <h2>new products</h2>
  <h6>save up to <br> <strong>40%</strong>off</h6>
</div>
</aside>
</div>
</div>
@endsection

@section('content')
<div class="col-lg-9 col-12 order-1 order-lg-2">
 <div class="row">
  <div class="col-lg-12">
   <div class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between">
    {{-- <div class="shop__list nav justify-content-center" role="tablist">
     <a class="nav-item nav-link active" data-toggle="tab" href="#nav-grid" role="tab"><i class="fa fa-th"></i></a>
     <a class="nav-item nav-link" data-toggle="tab" href="#nav-list" role="tab"><i class="fa fa-list"></i></a>
   </div> --}}
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
    <div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12" >
     <div class="product__thumb" >
      <a class="first__img" href="{{ url('product/'.$key->id.'/detail') }}"  style="width: 269px;height: 210px;"><img src="{{url('uploads/product/'.$key->image)}}" alt="product image" style="height: 210px;width: auto; display: block;margin-left: auto;margin-right: auto;" ></a>
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


@endsection