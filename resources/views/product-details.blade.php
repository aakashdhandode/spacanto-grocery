@extends('layouts.app')
@section('content')
<section >
    <div class="container mt-5">
        <p>Home / Grocery / Chakki Atta</p>
        <div class="row">
            <div class="col-sm-5 product-detail-img mt-3">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block" src="{!! asset('images/pro.jpg') !!}" alt="" class="">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block" src="{!! asset('images/pro.jpg') !!}" alt="" class="img-fluid">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block" src="{!! asset('images/pro.jpg') !!}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-sm-5 product-details">
                <div class="product-details-title">
                    <h2>Chakki Atta</h2>
                    <h6>10 kg</h6>
                </div>
                <div class="avaible">
                    <h6>Available in</h6>
                    <button type="button" class="btn">10 kg</button>
                    <button type="button" class="btn">15 kg</button>

                    <h6>Price</h6>
                    <h3>Rs 180</h3>
                    <p>Inclusive of all taxes</p>
                    <div class="product-quntity p-0">
                        <span class="quntity">-</span>
                        <input type="number" class="input" value="1" min="1">
                        <span class="quntity">+</span>
                    </div>
                    <button class="btn-addcart col-5 text-white" style="    background: #F76263;"> Add to Cart</button>
                    <p>Estimated delivery by 16 Dec 2020</p>
                </div>


            </div>
            <div class="col-sm-2 hart-shere">
                <i class="far fa-heart"></i>
                <i class="fas fa-share-alt"></i>
            </div>
        </div>1
        <div class="mt-4">
                <h4><b>Product Description</b></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo et quod error velit illo
                    laudantium accusantium aliquid magni suscipit. Labore voluptatum ipsum tenetur magni, fugiat
                    incidunt autem eveniet veniam officia.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim perspiciatis odit possimus, numquam
                    est, nemo dignissimos voluptates tempora eum facere nisi ipsam nihil, laborum nesciunt consequatur
                    ab officia natus nulla.
                </p>
        </div>

        <h4 class="mt-5"><b> More like this</b></h4>
        <div class="row">
            <div class=" col-lg-3 col-sm-6 col-xs-6 col-md-6  card-space">
                <a href="{{('/product-details')}}" style="color:black">
                    <div class="product-box-cat-page">
                        <div class="product-discunt"><span>20% off</span></div>
                        <img class="img-fluid" src="{!! asset('images/pro.jpg') !!}" alt="">
                        <div class="">
                            <h5>Chakki Atta</h5>
                            <p>10 kg</p>
                            <div class="row">
                                <div class="col-sm-5">
                                    <h3>Rs 180</h3>
                                    <del>Rs 220</del>
                                </div>
                                <div class="col-sm-7 product-quntity p-0">
                                    <span class="quntity">-</span>
                                    <input type="number" class="input" value="1" min="1" />
                                    <span class="quntity">+</span>
                                </div>
                            </div>
                            <button class="btn-addcart">Add to Cart</button>
                        </div>
                    </div>
                </a>
            </div>
            <div class=" col-lg-3 col-sm-6 col-xs-6 col-md-6  card-space">
                <a href="{{('/product-details')}}" style="color:black">
                    <div class="product-box-cat-page">
                        <div class="product-discunt"><span>20% off</span></div>
                        <img class="img-fluid" src="{!! asset('images/pro.jpg') !!}" alt="">
                        <div class="">
                            <h5>Chakki Atta</h5>
                            <p>10 kg</p>
                            <div class="row">
                                <div class="col-sm-5">
                                    <h3>Rs 180</h3>
                                    <del>Rs 220</del>
                                </div>
                                <div class="col-sm-7 product-quntity p-0">
                                    <span class="quntity">-</span>
                                    <input type="number" class="input" value="1" min="1" />
                                    <span class="quntity">+</span>
                                </div>
                            </div>
                            <button class="btn-addcart">Add to Cart</button>
                        </div>
                    </div>
                </a>
            </div>
            <div class=" col-lg-3 col-sm-6 col-xs-6 col-md-6  card-space">
                <a href="{{('/product-details')}}" style="color:black">
                    <div class="product-box-cat-page">
                        <div class="product-discunt"><span>20% off</span></div>
                        <img class="img-fluid" src="{!! asset('images/pro.jpg') !!}" alt="">
                        <div class="">
                            <h5>Chakki Atta</h5>
                            <p>10 kg</p>
                            <div class="row">
                                <div class="col-sm-5">
                                    <h3>Rs 180</h3>
                                    <del>Rs 220</del>
                                </div>
                                <div class="col-sm-7 product-quntity p-0">
                                    <span class="quntity">-</span>
                                    <input type="number" class="input" value="1" min="1" />
                                    <span class="quntity">+</span>
                                </div>
                            </div>
                            <button class="btn-addcart">Add to Cart</button>
                        </div>
                    </div>
                </a>
            </div>
            <div class=" col-lg-3 col-sm-6 col-xs-6 col-md-6  card-space">
                <a href="{{('/product-details')}}" style="color:black">
                    <div class="product-box-cat-page">
                        <div class="product-discunt"><span>20% off</span></div>
                        <img class="img-fluid" src="{!! asset('images/pro.jpg') !!}" alt="">
                        <div class="">
                            <h5>Chakki Atta</h5>
                            <p>10 kg</p>
                            <div class="row">
                                <div class="col-sm-5">
                                    <h3>Rs 180</h3>
                                    <del>Rs 220</del>
                                </div>
                                <div class="col-sm-7 product-quntity p-0">
                                    <span class="quntity">-</span>
                                    <input type="number" class="input" value="1" min="1" />
                                    <span class="quntity">+</span>
                                </div>
                            </div>
                            <button class="btn-addcart">Add to Cart</button>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div>
</section>






@endsection
