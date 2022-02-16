 <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Game's latest</h2>
                        <span>Details to details is what makes CawOnlineStore different from the other themes.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                            @foreach ($games as $game)
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href=""><i class="fa fa-eye"></i></a></li>
                                            <li><a href=""><i class="fa fa-star"></i></a></li>
                                            <li><a href=""><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="{{ $game->image  }}" alt="">
                                </div>
                                <div class="down-content">
                                    <h4 style = "font-size:11px;">{{ $game->title }}</h4>
                                    <span>${{ $game->price }}</span>
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