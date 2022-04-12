@extends('layouts.app')


@section('title','tieu da trang con')


@section('content')
<p>noi dung trang con</p>
<p>người làm :{{$name}}</p>
<!-- lay dc the trong html -->
<p>Địa chỉ:{!!$address!!}</p>

@if($number %2 == 0)
<p>number la so chan :{{$number}}</p>
@else
<p>number la so le :{{$number}}</p> 
@endif
@endsection