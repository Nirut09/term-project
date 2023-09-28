@extends('master')
@section('content') 
<div class="custom-product">
    <div class="col-sm-10"> 
        <table class="table">
            <tbody>
                <tr>
                    <td>Amount</td>
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
                    <td>${{$total*$quantity+10}}</td>                
                </tr>
            </tbody>
        </table>
        <form action="/orderplace" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Your Name">
            </div>
            <div class="form-group">
                <textarea name="address" placeholder="Enter your Address" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="pwd">Payment Method</label><br>
                <input type="radio" value="cash" name="payment"><span>Online payment</span><br><br>
                <input type="radio" value="cash" name="payment"><span>EMI payment</span><br><br>
                <input type="radio" value="cash" name="payment"><span>Payment on delivery</span><br><br>
            </div>
            <button type="submit" class="btn btn-default">Order Now</button>
        </form>
    </div>
</div>
@endsection