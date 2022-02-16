@extends('layouts.navbar')
@section('content')
@include('css')
 <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Check Our Products</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Products Area Starts ***** -->
    <section class="section" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Our Latest Products</h2>
                        <span>Check out all of our products.</span>
                    </div>
                </div>
            </div>
        </div>
        <div style = "text-align:center;margin-left: 909px;">
            <form id = "" method = "get" action ="{{url('search')}}">
                 <li><input type = "search" name = "search" placeholder = "search product" style = "border-radius: 10px; margin: 12px;font-size: 26px;background: #d8d8d8;margin-top: -32px;border: 2px solid gray;" required autofocus></li>
                 <li> <button type="submit" href = "{{url('search')}}"class="btn btn-primary" style = "margin-top: -99px;margin-left: 232px;width: 71px;padding: 2px;font-size: 28px;"><i class="fas fa-search"></i> </button><li> 
                 </li>

            <form>
        </div>
        <div class="container">
            <div class="row">
            @foreach($products as $product1)
                <div class="col-lg-4">
                    <div class="item">
                    
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <img src="{{ $product1->image  }}" alt="productsimage">
                        </div>
                        <div class="down-content">
                            <h4 style = "font-size:11px;">{{$product1->title}}</h4>
                            <span>${{$product1->price}}</span>
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                      
                    </div>
                </div>
                  @endforeach  
                
            </div>
        </div>
    </section>
     {{$products->links()}} 
@endsection
