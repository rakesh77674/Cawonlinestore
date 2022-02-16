<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Hexashop - Product Listing Page</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--





-->
    </head>
    
    <body>
  
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
  
      @include('layouts.navbar')
    
   

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Check Our Products</h2>
                        <span>Awesome &amp; Creative HTML CSS layout by TemplateMo</span>
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
            @foreach($products as $products1)
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href=""><i class="fa fa-eye"></i></a></li>
                                    <li><a href=""><i class="fa fa-star"></i></a></li>
                                    <li><a href=""><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <img src="{{ $products1->image }}" alt="">
                        </div>
                        <div class="down-content">
                            <h4 style = "font-size:11px;">{{$products1->title}}</h4>
                            <span>${{$products1->price}}</span>
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
 
    
    <!-- ***** Footer Start ***** -->
    @include('footer')

    <!-- jQuery -->
    @include('script')

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>

</html>
