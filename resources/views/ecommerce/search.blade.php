@extends('layouts.layout')
@section('content')
<div class="custom-product mt-5">
    <div class="row">
        <div class="col-sm-4">
                <a href="#">Filter</a>
        </div>
        <div class="col-sm-4 flex justify-center items-center ">
        <div class="trending-wrappper">
<h2 class=''>Result for Products</h2>
<div class="bg-success bar"></div>
    @foreach($products as $product)
      <a href="detail/{{$product['id']}}">
        <div class="searched-item" >
                <div>
                        <img src="{{$product['gallery']}}" alt="" class="trending-image">
                </div>
                <div class="name">
                        <h2>{{$product['name']}}</h2>
                        <h5>{{$product['description']}}</h5>
                </div>
            </div>
      </a>
    @endforeach
</div>
        </div>
        <div class="col-sm-4">


        </div>
        </div>
</div>
@endsection