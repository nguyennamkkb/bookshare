@extends('layouts.index2')
@section('content')
<a href="{{url('customer/profile/'.Auth::user()->id.'/edit')}}" class="btn btn-warning">Hãy nhập thông tin của bạn trước đã!</a>

@endsection
