@extends('layouts.index2')
@section('content')

<div class="row">
    <h1>
        Chi tiết đơn hàng
    </h1>

            
                <div class="col-md-12">
                    <div class="container123  col-md-6"   style="">
                        <h4></h4>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="col-md-4" colspan="2">Thông tin khách hàng</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Thông tin người đặt hàng</td>
                                    <td>{{ $billInfo->user->name }}</td>
                                </tr>
                                <tr>
                                    <td>Ngày đặt hàng</td>
                                    <td>{{ $billInfo->created_at }}</td>
                                </tr>
                                <tr>
                                    <td>Số điện thoại</td>
                                    <td>{{ $billInfo->customers->phone_number }}</td>
                                </tr>
                                <tr>
                                    <td>Địa chỉ</td>
                                    <td>{{ $billInfo->customers->address }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{ $billInfo->customers->email }}</td>
                                </tr>
                                <tr>
                                    <td>Ghi chú</td>
                                    <td>{{ $billInfo->bill_note }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <table id="myTable" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info" style="margin-left: 15px;">
                        <thead>
                            <tr role="row">
                                <th  >STT</th>
                                <th >Tên sản phẩm</th>
                                <th >Số lượng</th>
                                <th >Giá tiền</th>
                            </thead>
                            <tbody>
                                @foreach($billDetail as $key => $bill)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $bill->product->name }}</td>
                                    <td>{{ $bill->quantily }}</td>
                                    <td>{{ number_format($bill->price) }} VNĐ</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="3"><b>Tổng tiền</b></td>
                                    <td colspan="1"><b class="text-red">{{ number_format($billInfo->total) }} VNĐ</b></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    @endsection