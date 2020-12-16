@extends('layouts.layout')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-sm-6 py-3">
                <img src="{{$productdetails['gallery']}}" alt="" class='imageheight'>
            </div>
            <div class="col-sm-6">
               
                <h3>Name: {{$productdetails['name']}}</h3>
                <h3>Price: Ksh. {{$productdetails['price']}}</h3>
                <h4>Details: {{$productdetails['description']}}</h4>
                <h4>Category: {{$productdetails['category']}}</h4>
                <div class='mx-5'>
                <button class='btn btn-primary mx-3 my-3'>Add to Cart</button>
                <button class='btn btn-success mx-3 my-3'>Buy Now</button>
                <a href="/" class='btn btn-info mx-3 my-3'>Go Back</a>
                </div>
            </div>
        </div>
</div>
@endsection