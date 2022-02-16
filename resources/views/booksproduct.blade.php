<section class="section" id="kids">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Books Latest</h2>
                    <span>Details to details is what makes Hexashop different from the other themes.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="kid-item-carousel">
                    <div class="owl-kid-item owl-carousel">
                        @foreach ($book as $books)
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href=""><i class="fa fa-eye"></i></a></li>
                                        <li><a href=""><i class="fa fa-star"></i></a></li>
                                        <li><a href=""><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <img src="{{ $books->image  }}" alt="">
                            </div>
                            <div class="down-content">
                                <h4 style = "font-size:11px;">{{$books->title}}</h4>
                                <span>${{$books->price}}</span>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>