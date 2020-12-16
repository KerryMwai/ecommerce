@extends('layouts.layout')
@section('content')
<div class="custom-product">
<div id="carouselExampleFade" class="carousel slide carousel-fade pad" data-bs-ride="carousel">
  <div class="carousel-inner">
            @foreach($products as $product)
            <div class="carousel-item {{$product['id']==1?'active':''}}">
                <div class="row  bg-secondary">
                    <div class="col-4 mx-4 py-2">  <img src="{{$product['gallery']}}" class="d-block w-100 slideimg rounded" alt="..."></div>
                    <div class="col-7 mx-4 py-2">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 class='text-center'>{{$product['name']}}</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <table class='table table-bordered'>
                                        <tr>
                                            <th>Category</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            
                                        </tr>
                                        <tr>
                                            <td> {{$product['category']}}</td>
                                            <td>Ksh. {{$product['description']}}</td>
                                            <td>Ksh. {{$product['price']}}</td>                               
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            @endforeach
  </div>

<div class="trending-wrappper">
<h3 class='titlemain'>Trending Products</h3>
<div class="underbar"></div>
    @foreach($products as $product)
        <div class="trending-item" >
            <div>
                    <img src="{{$product['gallery']}}" alt="" class="trending-image">
            </div>
            <div class="name">
                    {{$product['name']}}
            </div>
        </div>
    @endforeach
</div>
</div>
</div>
@endsection