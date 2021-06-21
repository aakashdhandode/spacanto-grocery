@extends('layouts.app')
@section('content')
<!-- carousel slider -->
<section>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner benner-slider">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{!! asset('images/sli2.png') !!}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{!! asset('images/sli1.png') !!}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{!! asset('images/sli1.png') !!}" alt="Third slide">
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
</section>

<!-- products -->
<section class="mt-5">
    <div class="container mt-5">
        <h3 class="text-center font-weight-bold">Hot Deals</h3>
        <div class="row">
            <div class=" col-lg-3 col-sm-6 col-xs-6 col-md-6  card-space">
                <div class="product-box">
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
                            <div class="col-sm-7 product-quntity">
                                <span class="quntity">-</span>
                                <input type="number" class="input" value="1" min="1" />
                                <span class="quntity">+</span>
                            </div>
                        </div>
                        <button class="btn-addcart">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class=" col-lg-3 col-sm-6 col-xs-6 col-md-6 card-space">
                <div class="product-box">
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
                            <div class="col-sm-7 product-quntity">
                                <span class="quntity">-</span>
                                <input type="number" class="input" value="1" min="1" />
                                <span class="quntity">+</span>
                            </div>
                        </div>
                        <button class="btn-addcart">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-6  col-md-6  card-space">
                <div class="product-box">
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
                            <div class="col-sm-7 product-quntity">
                                <span class="quntity">-</span>
                                <input type="number" class="input" value="1" min="1" />
                                <span class="quntity">+</span>
                            </div>
                        </div>
                        <button class="btn-addcart">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-6 col-md-6  card-space">
                <div class="product-box">
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
                            <div class="col-sm-7 product-quntity">
                                <span class="quntity">-</span>
                                <input type="number" class="input" value="1" min="1" />
                                <span class="quntity">+</span>
                            </div>
                        </div>
                        <button class="btn-addcart">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-6 col-md-6  card-space">
                <div class="product-box">
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
                            <div class="col-sm-7 product-quntity">
                                <span class="quntity">-</span>
                                <input type="number" class="input" value="1" min="1" />
                                <span class="quntity">+</span>
                            </div>
                        </div>
                        <button class="btn-addcart">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-6 col-md-6  card-space">
                <div class="product-box">
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
                            <div class="col-sm-7 product-quntity">
                                <span class="quntity">-</span>
                                <input type="number" class="input" value="1" min="1" />
                                <span class="quntity">+</span>
                            </div>
                        </div>
                        <button class="btn-addcart">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-6 col-md-6  card-space">
                <div class="product-box">
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
                            <div class="col-sm-7 product-quntity">
                                <span class="quntity">-</span>
                                <input type="number" class="input" value="1" min="1" />
                                <span class="quntity">+</span>
                            </div>
                        </div>
                        <button class="btn-addcart">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-6 col-md-6  card-space">
                <div class="product-box">
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
                            <div class="col-sm-7 product-quntity">
                                <span class="quntity">-</span>
                                <input type="number" class="input" value="1" min="1" />
                                <span class="quntity">+</span>
                            </div>
                        </div>
                        <button class="btn-addcart">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="mtb-50">
    <div class="container mt-5">
        <h3 class="text-center font-weight-bold home-product-title">Grocery & Staples</h3>
        <div class="row">
            <div class=" col-lg-3 col-sm-6 col-xs-6 col-md-6 col-6 grocery-staples">
                <div class="pink-box-product">
                    <img class="img-fluid" src="{!! asset('images/pro.jpg') !!}" alt="">
                </div>
            </div>
            <div class=" col-lg-3 col-sm-6 col-xs-6 col-md-6 col-6 grocery-staples">
                <div class="pink-box-product">
                    <img class="img-fluid" src="{!! asset('images/pro.jpg') !!}" alt="">

                </div>
            </div>
            <div class=" col-lg-3 col-sm-6 col-xs-6 col-md-6 col-6 grocery-staples">
                <div class="pink-box-product">
                    <img class="img-fluid" src="{!! asset('images/pro.jpg') !!}" alt="">

                </div>
            </div>
            <div class=" col-lg-3 col-sm-6 col-xs-6 col-md-6 col-6 grocery-staples">
                <div class="pink-box-product">
                    <img class="img-fluid" src="{!! asset('images/pro.jpg') !!}" alt="">

                </div>
            </div>


        </div>
    </div>
</section>

<section class="mtb-50">
    <div class="container mt-5">
        <h3 class="text-center font-weight-bold home-product-title">Vegetables & Fruits</h3>
        <div class="row">
            <div class=" col-lg-3 col-sm-6 col-xs-6 col-md-6 col-6 grocery-staples">
                <div class="pink-box-product">
                    <img class="img-fluid" src="{!! asset('images/pro.jpg') !!}" alt="">
                </div>
            </div>
            <div class=" col-lg-3 col-sm-6 col-xs-6 col-md-6 col-6 grocery-staples">
                <div class="pink-box-product">
                    <img class="img-fluid" src="{!! asset('images/pro.jpg') !!}" alt="">

                </div>
            </div>
            <div class=" col-lg-3 col-sm-6 col-xs-6 col-md-6 col-6 grocery-staples">
                <div class="pink-box-product">
                    <img class="img-fluid" src="{!! asset('images/pro.jpg') !!}" alt="">

                </div>
            </div>
            <div class=" col-lg-3 col-sm-6 col-xs-6 col-md-6 col-6 grocery-staples">
                <div class="pink-box-product">
                    <img class="img-fluid" src="{!! asset('images/pro.jpg') !!}" alt="">

                </div>
            </div>


        </div>
    </div>
</section>

<section class="mtb-50">
    <div class="container mt-5">
        <h3 class="text-center font-weight-bold home-product-title">Vegetables & Fruits</h3>
        <div class="row">
            <div class=" col-lg-3 col-sm-6 col-xs-6 col-md-6 col-6 grocery-staples">
                <div class="pink-box-product">
                    <img class="img-fluid" src="{!! asset('images/pro.jpg') !!}" alt="">
                </div>
            </div>
            <div class=" col-lg-3 col-sm-6 col-xs-6 col-md-6 col-6 grocery-staples">
                <div class="pink-box-product">
                    <img class="img-fluid" src="{!! asset('images/pro.jpg') !!}" alt="">

                </div>
            </div>
            <div class=" col-lg-3 col-sm-6 col-xs-6 col-md-6 col-6 grocery-staples">
                <div class="pink-box-product">
                    <img class="img-fluid" src="{!! asset('images/pro.jpg') !!}" alt="">

                </div>
            </div>
            <div class=" col-lg-3 col-sm-6 col-xs-6 col-md-6 col-6 grocery-staples">
                <div class="pink-box-product">
                    <img class="img-fluid" src="{!! asset('images/pro.jpg') !!}" alt="">

                </div>
            </div>
        </div>
    </div>
</section>

<section class="mtb-50">
    <div class="container mt-5">
        <h3 class="text-center font-weight-bold home-product-title">Snacks & Beverages</h3>
        <div class="row">
            <div class=" col-lg-3 col-sm-6 col-xs-6 col-md-6 col-6 grocery-staples">
                <div class="pink-box-product">
                    <img class="img-fluid" src="{!! asset('images/pro.jpg') !!}" alt="">
                </div>
            </div>
            <div class=" col-lg-3 col-sm-6 col-xs-6 col-md-6 col-6 grocery-staples">
                <div class="pink-box-product">
                    <img class="img-fluid" src="{!! asset('images/pro.jpg') !!}" alt="">

                </div>
            </div>
            <div class=" col-lg-3 col-sm-6 col-xs-6 col-md-6 col-6 grocery-staples">
                <div class="pink-box-product">
                    <img class="img-fluid" src="{!! asset('images/pro.jpg') !!}" alt="">

                </div>
            </div>
            <div class=" col-lg-3 col-sm-6 col-xs-6 col-md-6 col-6 grocery-staples">
                <div class="pink-box-product">
                    <img class="img-fluid" src="{!! asset('images/pro.jpg') !!}" alt="">

                </div>
            </div>
        </div>
    </div>
</section>


<section class="mtb-50">
    <div class="container mt-5">
        <h3 class="text-center font-weight-bold home-product-title">Household Items</h3>
        <div class="row">
            <div class=" col-lg-3 col-sm-6 col-xs-6 col-md-6 col-6 grocery-staples">
                <div class="pink-box-product">
                    <img class="img-fluid" src="{!! asset('images/pro.jpg') !!}" alt="">
                </div>
            </div>
            <div class=" col-lg-3 col-sm-6 col-xs-6 col-md-6 col-6 grocery-staples">
                <div class="pink-box-product">
                    <img class="img-fluid" src="{!! asset('images/pro.jpg') !!}" alt="">

                </div>
            </div>
            <div class=" col-lg-3 col-sm-6 col-xs-6 col-md-6 col-6 grocery-staples">
                <div class="pink-box-product">
                    <img class="img-fluid" src="{!! asset('images/pro.jpg') !!}" alt="">

                </div>
            </div>
            <div class=" col-lg-3 col-sm-6 col-xs-6 col-md-6 col-6 grocery-staples">
                <div class="pink-box-product">
                    <img class="img-fluid" src="{!! asset('images/pro.jpg') !!}" alt="">

                </div>
            </div>
        </div>
    </div>
</section>

<section class="mtb-50">
    <div class="container mt-5">
        <h3 class="text-center font-weight-bold home-product-title">Kitchen and dining needs</h3>
        <div class="row">
            <div class=" col-lg-3 col-sm-6 col-xs-6 col-md-6 col-6 grocery-staples">
                <div class="pink-box-product">
                    <img class="img-fluid" src="{!! asset('images/pro.jpg') !!}" alt="">
                </div>
            </div>
            <div class=" col-lg-3 col-sm-6 col-xs-6 col-md-6 col-6 grocery-staples">
                <div class="pink-box-product">
                    <img class="img-fluid" src="{!! asset('images/pro.jpg') !!}" alt="">

                </div>
            </div>
            <div class=" col-lg-3 col-sm-6 col-xs-6 col-md-6 col-6 grocery-staples">
                <div class="pink-box-product">
                    <img class="img-fluid" src="{!! asset('images/pro.jpg') !!}" alt="">

                </div>
            </div>
            <div class=" col-lg-3 col-sm-6 col-xs-6 col-md-6 col-6 grocery-staples">
                <div class="pink-box-product">
                    <img class="img-fluid" src="{!! asset('images/pro.jpg') !!}" alt="">

                </div>
            </div>
        </div>
    </div>
</section>



<section class="p-60 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12"> `
                <h3 class="section-tital text-center">Our happy clients</h3>
                <div class="home-client-slick slick-initialized slick-slider"><button class="slick-prev slick-arrow"
                        aria-label="Previous" type="button" style="">Previous</button>
                    <div class="slick-list draggable">
                        <div class="slick-track"
                            style="opacity: 1; width: 5004px; transform: translate3d(-1112px, 0px, 0px);">
                            <div class="client-cart slick-slide slick-cloned" data-slick-index="-4" id=""
                                aria-hidden="true" style="width: 258px;" tabindex="-1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="client-icon">
                                            <img src="http://www.drillingmart.com/images/1.jpg" class="img-fluid"
                                                alt="">
                                        </div>
                                        <div class="client-info">
                                            <h5>John Carter</h5>
                                            <h6>Hyderbad</h6>
                                        </div>
                                    </div>
                                </div>
                                <ul>
                                    <li>4.0 &nbsp; </li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-no-fill"><i class="fa fa-star"></i></li>
                                </ul>
                                <div class="clearfix"></div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
                                </p>
                            </div>
                            <div class="client-cart slick-slide slick-cloned" data-slick-index="-3" id=""
                                aria-hidden="true" style="width: 258px;" tabindex="-1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="client-icon">
                                            <img src="http://www.drillingmart.com/images/1.jpg" class="img-fluid"
                                                alt="">
                                        </div>
                                        <div class="client-info">
                                            <h5>John Carter</h5>
                                            <h6>Hyderbad</h6>
                                        </div>
                                    </div>
                                </div>
                                <ul>
                                    <li>4.0 &nbsp; </li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-no-fill"><i class="fa fa-star"></i></li>
                                </ul>
                                <div class="clearfix"></div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
                                </p>
                            </div>
                            <div class="client-cart slick-slide slick-cloned" data-slick-index="-2" id=""
                                aria-hidden="true" style="width: 258px;" tabindex="-1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="client-icon">
                                            <img src="http://www.drillingmart.com/images/1.jpg" class="img-fluid"
                                                alt="">
                                        </div>
                                        <div class="client-info">
                                            <h5>John Carter</h5>
                                            <h6>Hyderbad</h6>
                                        </div>
                                    </div>
                                </div>
                                <ul>
                                    <li>4.0 &nbsp; </li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-no-fill"><i class="fa fa-star"></i></li>
                                </ul>
                                <div class="clearfix"></div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
                                </p>
                            </div>
                            <div class="client-cart slick-slide slick-cloned" data-slick-index="-1" id=""
                                aria-hidden="true" style="width: 258px;" tabindex="-1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="client-icon">
                                            <img src="http://www.drillingmart.com/images/1.jpg" class="img-fluid"
                                                alt="">
                                        </div>
                                        <div class="client-info">
                                            <h5>John Carter</h5>
                                            <h6>Hyderbad</h6>
                                        </div>
                                    </div>
                                </div>
                                <ul>
                                    <li>4.0 &nbsp; </li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-no-fill"><i class="fa fa-star"></i></li>
                                </ul>
                                <div class="clearfix"></div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
                                </p>
                            </div>
                            <div class="client-cart slick-slide slick-current slick-active" data-slick-index="0"
                                aria-hidden="false" style="width: 258px;" tabindex="0">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="client-icon">
                                            <img src="http://www.drillingmart.com/images/1.jpg" class="img-fluid"
                                                alt="">
                                        </div>
                                        <div class="client-info">
                                            <h5>John Carter</h5>
                                            <h6>Hyderbad</h6>
                                        </div>
                                    </div>
                                </div>
                                <ul>
                                    <li>4.0 &nbsp; </li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-no-fill"><i class="fa fa-star"></i></li>
                                </ul>
                                <div class="clearfix"></div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
                                </p>
                            </div>
                            <div class="client-cart slick-slide slick-active" data-slick-index="1" aria-hidden="false"
                                style="width: 258px;" tabindex="0">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="client-icon">
                                            <img src="http://www.drillingmart.com/images/1.jpg" class="img-fluid"
                                                alt="">
                                        </div>
                                        <div class="client-info">
                                            <h5>John Carter</h5>
                                            <h6>Hyderbad</h6>
                                        </div>
                                    </div>
                                </div>
                                <ul>
                                    <li>4.0 &nbsp; </li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-no-fill"><i class="fa fa-star"></i></li>
                                </ul>
                                <div class="clearfix"></div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
                                </p>
                            </div>
                            <div class="client-cart slick-slide slick-active" data-slick-index="2" aria-hidden="false"
                                style="width: 258px;" tabindex="0">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="client-icon">
                                            <img src="http://www.drillingmart.com/images/1.jpg" class="img-fluid"
                                                alt="">
                                        </div>
                                        <div class="client-info">
                                            <h5>John Carter</h5>
                                            <h6>Hyderbad</h6>
                                        </div>
                                    </div>
                                </div>
                                <ul>
                                    <li>4.0 &nbsp; </li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-no-fill"><i class="fa fa-star"></i></li>
                                </ul>
                                <div class="clearfix"></div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
                                </p>
                            </div>
                            <div class="client-cart slick-slide slick-active" data-slick-index="3" aria-hidden="false"
                                style="width: 258px;" tabindex="0">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="client-icon">
                                            <img src="http://www.drillingmart.com/images/1.jpg" class="img-fluid"
                                                alt="">
                                        </div>
                                        <div class="client-info">
                                            <h5>John Carter</h5>
                                            <h6>Hyderbad</h6>
                                        </div>
                                    </div>
                                </div>
                                <ul>
                                    <li>4.0 &nbsp; </li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-no-fill"><i class="fa fa-star"></i></li>
                                </ul>
                                <div class="clearfix"></div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
                                </p>
                            </div>
                            <div class="client-cart slick-slide" data-slick-index="4" aria-hidden="true"
                                style="width: 258px;" tabindex="-1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="client-icon">
                                            <img src="http://www.drillingmart.com/images/1.jpg" class="img-fluid"
                                                alt="">
                                        </div>
                                        <div class="client-info">
                                            <h5>John Carter</h5>
                                            <h6>Hyderbad</h6>
                                        </div>
                                    </div>
                                </div>
                                <ul>
                                    <li>4.0 &nbsp; </li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-no-fill"><i class="fa fa-star"></i></li>
                                </ul>
                                <div class="clearfix"></div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
                                </p>
                            </div>
                            <div class="client-cart slick-slide" data-slick-index="5" aria-hidden="true"
                                style="width: 258px;" tabindex="-1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="client-icon">
                                            <img src="http://www.drillingmart.com/images/1.jpg" class="img-fluid"
                                                alt="">
                                        </div>
                                        <div class="client-info">
                                            <h5>John Carter</h5>
                                            <h6>Hyderbad</h6>
                                        </div>
                                    </div>
                                </div>
                                <ul>
                                    <li>4.0 &nbsp; </li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-no-fill"><i class="fa fa-star"></i></li>
                                </ul>
                                <div class="clearfix"></div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
                                </p>
                            </div>
                            <div class="client-cart slick-slide" data-slick-index="6" aria-hidden="true"
                                style="width: 258px;" tabindex="-1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="client-icon">
                                            <img src="http://www.drillingmart.com/images/1.jpg" class="img-fluid"
                                                alt="">
                                        </div>
                                        <div class="client-info">
                                            <h5>John Carter</h5>
                                            <h6>Hyderbad</h6>
                                        </div>
                                    </div>
                                </div>
                                <ul>
                                    <li>4.0 &nbsp; </li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-no-fill"><i class="fa fa-star"></i></li>
                                </ul>
                                <div class="clearfix"></div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
                                </p>
                            </div>
                            <div class="client-cart slick-slide slick-cloned" data-slick-index="7" id=""
                                aria-hidden="true" style="width: 258px;" tabindex="-1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="client-icon">
                                            <img src="http://www.drillingmart.com/images/1.jpg" class="img-fluid"
                                                alt="">
                                        </div>
                                        <div class="client-info">
                                            <h5>John Carter</h5>
                                            <h6>Hyderbad</h6>
                                        </div>
                                    </div>
                                </div>
                                <ul>
                                    <li>4.0 &nbsp; </li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-no-fill"><i class="fa fa-star"></i></li>
                                </ul>
                                <div class="clearfix"></div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
                                </p>
                            </div>
                            <div class="client-cart slick-slide slick-cloned" data-slick-index="8" id=""
                                aria-hidden="true" style="width: 258px;" tabindex="-1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="client-icon">
                                            <img src="http://www.drillingmart.com/images/1.jpg" class="img-fluid"
                                                alt="">
                                        </div>
                                        <div class="client-info">
                                            <h5>John Carter</h5>
                                            <h6>Hyderbad</h6>
                                        </div>
                                    </div>
                                </div>
                                <ul>
                                    <li>4.0 &nbsp; </li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-no-fill"><i class="fa fa-star"></i></li>
                                </ul>
                                <div class="clearfix"></div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
                                </p>
                            </div>
                            <div class="client-cart slick-slide slick-cloned" data-slick-index="9" id=""
                                aria-hidden="true" style="width: 258px;" tabindex="-1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="client-icon">
                                            <img src="http://www.drillingmart.com/images/1.jpg" class="img-fluid"
                                                alt="">
                                        </div>
                                        <div class="client-info">
                                            <h5>John Carter</h5>
                                            <h6>Hyderbad</h6>
                                        </div>
                                    </div>
                                </div>
                                <ul>
                                    <li>4.0 &nbsp; </li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-no-fill"><i class="fa fa-star"></i></li>
                                </ul>
                                <div class="clearfix"></div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
                                </p>
                            </div>
                            <div class="client-cart slick-slide slick-cloned" data-slick-index="10" id=""
                                aria-hidden="true" style="width: 258px;" tabindex="-1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="client-icon">
                                            <img src="http://www.drillingmart.com/images/1.jpg" class="img-fluid"
                                                alt="">
                                        </div>
                                        <div class="client-info">
                                            <h5>John Carter</h5>
                                            <h6>Hyderbad</h6>
                                        </div>
                                    </div>
                                </div>
                                <ul>
                                    <li>4.0 &nbsp; </li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-no-fill"><i class="fa fa-star"></i></li>
                                </ul>
                                <div class="clearfix"></div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
                                </p>
                            </div>
                            <div class="client-cart slick-slide slick-cloned" data-slick-index="11" id=""
                                aria-hidden="true" style="width: 258px;" tabindex="-1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="client-icon">
                                            <img src="http://www.drillingmart.com/images/1.jpg" class="img-fluid"
                                                alt="">
                                        </div>
                                        <div class="client-info">
                                            <h5>John Carter</h5>
                                            <h6>Hyderbad</h6>
                                        </div>
                                    </div>
                                </div>
                                <ul>
                                    <li>4.0 &nbsp; </li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-no-fill"><i class="fa fa-star"></i></li>
                                </ul>
                                <div class="clearfix"></div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
                                </p>
                            </div>
                            <div class="client-cart slick-slide slick-cloned" data-slick-index="12" id=""
                                aria-hidden="true" style="width: 258px;" tabindex="-1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="client-icon">
                                            <img src="http://www.drillingmart.com/images/1.jpg" class="img-fluid"
                                                alt="">
                                        </div>
                                        <div class="client-info">
                                            <h5>John Carter</h5>
                                            <h6>Hyderbad</h6>
                                        </div>
                                    </div>
                                </div>
                                <ul>
                                    <li>4.0 &nbsp; </li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-no-fill"><i class="fa fa-star"></i></li>
                                </ul>
                                <div class="clearfix"></div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
                                </p>
                            </div>
                            <div class="client-cart slick-slide slick-cloned" data-slick-index="13" id=""
                                aria-hidden="true" style="width: 258px;" tabindex="-1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="client-icon">
                                            <img src="http://www.drillingmart.com/images/1.jpg" class="img-fluid"
                                                alt="">
                                        </div>
                                        <div class="client-info">
                                            <h5>John Carter</h5>
                                            <h6>Hyderbad</h6>
                                        </div>
                                    </div>
                                </div>
                                <ul>
                                    <li>4.0 &nbsp; </li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-fill"><i class="fa fa-star"></i></li>
                                    <li class="star star-no-fill"><i class="fa fa-star"></i></li>
                                </ul>
                                <div class="clearfix"></div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
                                </p>
                            </div>
                        </div>
                    </div>






                    <button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button>
                </div>
            </div>

        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="service-icon pt-2">
                <img class="img-fluid" src="{!! asset('images/delivery.svg') !!}" alt="">
                </div>
                <div class="service-info">
                    <h5>Free delivery</h5> 
                    <h6>Order above Rs. 1000</h6>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-icon">
                <img class="img-fluid" src="{!! asset('images/priority.svg') !!}" alt="">
                </div>
                <div class="service-info">
                    <h5>Priority Delivery</h5> 
                    <h6>Get within 2 days</h6>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-icon">
                <img class="img-fluid" src="{!! asset('images/support.svg') !!}" alt="">
                </div>
                <div class="service-info">
                    <h5>24/7 Customer Service</h5> 
                    <h6>Quick issue resolving</h6>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-icon">
                <img class="img-fluid" src="{!! asset('images/india.svg') !!}" alt="">
                </div>
                <div class="service-info">
                    <h5>PAN India </h5> 
                    <h6>Spreading happiness</h6>
                </div>
            </div>
         
        </div>
    </div>
</section>

@endsection
