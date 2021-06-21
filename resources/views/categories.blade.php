@extends('layouts.app')
@section('content')
<section>
    <div class="container mt-5 mb-5">
        <div class="row">
            <!-- side filter -->
            <div class="col-sm-2 side-filter-vertical-border">
                <div class="side-filters">
                    <h5>FILTERS</h5>
                </div>

                <div class="product-price">
                    <h5 class="filter-product-title" data-toggle="collapse" data-target="#cagtegories">Brand</h5>
                    <i class="fas fa-angle-down font-down-icon-price" data-toggle="collapse"
                        data-target="#cagtegories"></i>
                    <div id="cagtegories" class="collapse show">

                        <form action="" class="brand-filter">
                            <input type="checkbox" id="" name="" value="">
                            <label>Bonnies</label><br>
                            <input type="checkbox" id="" name="" value="">
                            <label>FunMunch Wafers</label><br>
                            <input type="checkbox" id="" name="" value="">
                            <label>FunMunch Bourbon</label><br>
                            <input type="checkbox" id="" name="" value="">
                            <label>FunMunch Bourbon</label><br>
                            <input type="checkbox" id="" name="" value="">
                            <label>Bonnies</label><br>
                        </form>
                    </div>
                </div>






                <div class="product-price">
                    <h5 class="filter-product-title" data-toggle="collapse" data-target="#productprice">Price</h5>
                    <i class="fas fa-angle-down font-down-icon-price" data-toggle="collapse"
                        data-target="#productprice"></i>
                    <div id="productprice" class="collapse show">
                        <div class="">
                            <input type="checkbox" id="" name="" value="">
                            <label>₹0 - ₹10</label><br>
                            <input type="checkbox" id="" name="" value="">
                            <label>₹10 - ₹50</label><br>
                            <input type="checkbox" id="" name="" value="">
                            <label>₹50 - ₹100</label><br>
                            <input type="checkbox" id="" name="" value="">
                            <label>₹100 - ₹150</label><br>
                            <input type="checkbox" id="" name="" value="">
                            <label>₹150 - ₹200</label><br>
                        </div>
                    </div>
                </div>


                <div class="product-price">
                    <h5 class="filter-product-title" data-toggle="collapse" data-target="#productavlble">Pack Size
                    </h5>
                    <i class="fas fa-angle-down font-down-icon-price" data-toggle="collapse"
                        data-target="#productavlble"></i>
                    <div id="productavlble" class="collapse show">
                        <form action="" class="brand-filter">
                            <input type="checkbox" id="" name="" value="">
                            <label>Lorem Ipsum</label><br>
                            <input type="checkbox" id="" name="" value="">
                            <label>Lorem Ipsum</label><br>

                            <input type="checkbox" id="" name="" value="">
                            <label>Lorem Ipsum</label><br>
                            <input type="checkbox" id="" name="" value="">
                            <label>Lorem Ipsum</label><br>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end side filter -->
            <div class="col-sm-10">
                <div class="row" style="margin-bottom: -10px;">
                    <div class="col-sm-6 side-filters">
                        <h5 class="line-height-0 product-item-title">Grocery & Staples(324)</h5>
                    </div>
                    <div class="col-sm-6 search-menus-option text-right">

                        <label for="shortitem"><b>Short by : </b></label>
                        <select class="shortby" name="shortitem" id="shortitem">
                            <option value="">Popularity</option>
                            <option value="">Low to High Price</option>
                            <option value="">High to Low Price</option>
                        </select>
                    </div>
                </div>
                <hr />
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
        </div>
    </div>
</section>


@endsection
