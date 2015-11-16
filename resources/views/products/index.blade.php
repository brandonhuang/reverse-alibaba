@extends('layouts.main')

@section('css')
  <link rel="stylesheet" type="text/css" href="  https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
@stop

@section('content')
  <section>
    <div class="content">
      <h1>Products</h1>
    </div>
    </section>
    <section class="container-fluid">
                @foreach ($products as $product)
                <section>
                  <div class="card col-md-4 col-md-offset-1">
                  <div class="header text-center">
                    <h2 class="title">{{ $product->name }}</h2>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                    <img class="product-image" src="http://www.shmula.com/wp-content/uploads/2007/02/interface-is-product-ux-ui.jpg">
                  </div>
                  <div class="col-md-6 product-info">
                    <p class="product-brand">by {{ $product->brand }}</p>
                    <p>ID: {{ $product->id }}</p>
                    <p class="product-desc">{{ $product->description }}</p>
                    <p class="product-price">Price: {{ $product->price }}</p>
                    <p class="product-rating">Rating: {{ $product->rating }}/5</p>
                    <button class="green">Buy Now!</button>
                  </div>
                  </div>
                  <div class="col-md-1"></div>
                </section>
              @endforeach
            @stop                    
                </div>     
            </div>    
    </section>