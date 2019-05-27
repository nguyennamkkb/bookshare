
@extends('layouts.index2')

@section('content')
<h1 style="margin-left: 10px; margin-bottom: 20px">Danh mục sách đã mua</h1>

<div class="col-md-12 col-sm-12 ol-lg-12">
  <form action="#">               
    <div class="table-content wnro__table table-responsive">
      <table>
        <thead>
          <tr class="title-top">
            <th class="product-name">Sản phẩm</th>
            <th class="product-price">Giá</th>
          </tr>
        </thead>
        <tbody>
          
          @foreach ($book as $key)
          <tr>
            
            <td class="product-name" style="text-align: left;"><a href="{{ url('uploads/bookfull/'.$key->product->bookfull) }}">{{$key->product->name}}</a></td>
            <td class="product-name"><a href="#">{{number_format($key->product->price) }}</a></td>
          </tr>

          @endforeach
        </tbody>
      </table>
    </div>
  </form> 
  

@endsection