@extends('master')
@section('content') 
<div class=" custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h2>Cart</h2>
            <a class="btn btn-success" href="ordernow">Order Now</a><br><br>
            @foreach ($products as $item)
            <div class="row searched-item cart-list-divider">
                <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <img class="trending-image" src="{{$item->image}}">
                    </a>
                </div>
                <div class="col-sm-3">
                        <div class="">
                            <h3>{{$item->name}}</h3>
                            <h5>{{$item->description}}</h5>
                            <h5>Amount : {{$item->quantity}}</h5>
                        </div>
                </div>
                <div class="col-sm-3">
                    <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove</a>
                </div>
            </div>
            @endforeach
        </div>
        <a class="btn btn-success" href="ordernow">Order Now</a>
    </div>
</div>
@endsection