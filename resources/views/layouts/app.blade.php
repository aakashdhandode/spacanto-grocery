<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Vegitable') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Styles -->
</head>


<body>
    <div class="">
        <div class="overlay"></div>
        <div class="utility-nav d-none d-md-block header-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="about-menu">
                            <li><a href="#"> About Us</a></li>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 text-right">
                        <p class="small">Customer Care 1800 208 1800</p>
                    </div>
                </div>
            </div>
        </div>
        <header class="section-header">
            <section class="header-main">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-2"> <a href="/" class="brand-wrap" data-abc="true">

                                <span class="logo colr"><b>LOGO</b></span> </a>
                        </div>
                        <div class="col-lg-6 d-md-block">
                            <div class="row">
                                <div class="col-sm-3 p-0 pt-2">
                                    <form>
                                        <i class="fa fa-location"></i>
                                        <select name="" id="" class="select-city">
                                            <option value="volvo">Hyderabad</option>
                                            <option value="saab">Saab</option>
                                            <option value="opel">Opel</option>
                                            <option value="audi">Audi</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="col-sm-9">
                                    <form action="">
                                        <div class="">
                                            <input type="text" class="form-control search-form"
                                                style="background: #F4F4F4;" placeholder="Search">
                                            <button class="search-btn-icon" type="submit"> <i
                                                    class="fa fa-search"></i></button>

                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 p-0">
                            <div class="d-flex justify-content-end drop">
                                <a class="nav-link nav-user-img" href="{{('/cart-page')}}"> <i
                                        class="far fa-heart"></i><span>Wishlist</span> </a>

                                <!-- <div class="dropdown btn-group"> <a class="nav-link nav-icons padd" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-abc="true">
                                <i class="far fa-user-circle"></i><span>Sign up | Sign in</span></a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{('/myprofile') }}">My Profile</a>
                                        <a class="dropdown-item" href="{{('/myprofile') }}">My Orders</a>
                                        <a class="dropdown-item" href="{{('/myprofile') }}">My Booking</a>
                                        <a class="dropdown-item" href="#{{('/myprofile') }}">Change Password</a>
                                        <a class="dropdown-item" href="{{('/address') }}">My Address</a>
                                        <a class="dropdown-item" href="#">Logout</a>

                                    </div>
                                </div> -->
                                <a class="nav-link nav-user-img" href="{{('/cart-page')}}"><i
                                        class="far fa-user-circle"></i><span>Sign up | Sign in</span> </a>

                                <a class="nav-link nav-user-img" href="{{('/cart-page')}}"><i
                                        class="fa fa-shopping-cart"></i><span>my cart</span> </a>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <nav class="navbar navbar-expand-md navbar-main pt-2 mb-3">
                <div class="container">
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                        data-target="#dropdown6" aria-expanded="false"> <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-collapse collapse" id="dropdown6" style="">
                        <ul class="navbar-nav mr-auto navbar-center">
                            <li class="nav-item"> <a class="nav-link" href="">All Products</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="{{('/categories')}}">Vegetables & fruits
                                    units</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="{{('/categories')}}">Grocery & Staples
                                    units</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="{{('/categories')}}">Non-veg</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="{{('/categories')}}">Grocery & Staples</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="{{('/categories')}}">Household items</a>
                            </li>
                           
                        </ul>
                    </div>
                </div>
            </nav>
        </header>


    </div>

    <main class="">
        @yield('content')
    </main>


    <footer class="mt-5 ">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 main-footer">
                    <div>
                        <!-- <img class="img-fluid" src="{!! asset('images/support.svg') !!}" alt=""> -->
                        <h2>Logo</h2>
                        <a href="">+999-999-999</a>
                        <ul class="dm-social pt-3">
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a href=""><i class="fab fa-youtube"></i></a></li>
                            <li><a href=""><i class="fab fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 footer-sercer-ul">
                        <h4 class="footer-h4">Customer Service</h4>
                    <ul class="pt-3">
                        <li><a href="">My Orders</a></li>
                        <li><a href="">My Account</a></li>
                        <li><a href="">Return Policy</a></li>
                        <li><a href="">Support</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 footer-sercer-ul">
                <h4 class="footer-h4">Company</h4>
                    <ul class="pt-3">
                        <li><a href="">About Us</a></li>
                        <li><a href="">FAQs</a></li>
                        <li><a href="">Terms & Conditions</a></li>
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>

                </div>
            </div>

        
                <div class="text-center pt-5">
                    <p>Copyrights 2020 Reseverd to abcd</p>
                </div>
           
        </div>
    </footer>



</body>

</html>
