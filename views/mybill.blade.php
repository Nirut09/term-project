@extends('master')
@section('content') 
<div class="custom-product">
    <div class="col-sm-10"> 
        <table class="table">
            <h1>Bill</h1>
            <tbody>
                @foreach ($orders as $item)
                <tr>
                    <td>Name</td>
                    <td>{{$item->ctm_name}}</td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>{{$item->address}}</td>
                </tr>
                <tr>
                    <td>{{$item->name}}</td>
                    <td>$ {{$total}}</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$ 0</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>$ 10</td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td>{{$total+10}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection