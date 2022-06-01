@extends('layouts.get-theme')
@section('content')
<br>
<br>
<br>
<br>
<br>
<br>
<form action="{{route('led.order.payment')}}" method="POST">
@csrf
<div class="container bg-light">
    <div class="col-md-12 text-center">
        <h1>Total Price : {{$order->total_price}}</h1>
        <button type="submit" class="btn btn-primary">Pay Now</button>
        <input type="hidden" name="order_id" value="{{$order->id}}">
    </div>
</div>
</form>

@endsection

@section('Styles')
<link rel="stylesheet" href="{{asset('assets/Bootstrap-4-1/bootstrap.min.css')}}">
@endsection

@section('pageScripts')
<script src="{{asset('assets/Bootstrap-4-1/jquery-3.3.1.slim.min.js')}}"></script>
<script src="{{asset('assets/Bootstrap-4-1/popper.min.js')}}"></script>
<script src="{{asset('assets/Bootstrap-4-1/bootstrap.min.js')}}"></script>
@endsection