<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ban Giay Store</title>
    <meta name="description" content="">
    <meta name="author" content="Cemre Tellioğlu Tunçay">
    <link rel="icon" type="image/png" href={{asset("layout/BanGiayStore.png")}} sizes="32x32" />
    <link rel="icon" type="image/png" href={{asset("layout/BanGiayStore.png")}} sizes="16x16" />
    <link href={{asset("https://fonts.googleapis.com/css?family=Montserrat&display=swap&subset=latin-ext")}} rel="stylesheet">
    <link href={{asset("https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css")}} rel="stylesheet">
    <link href={{asset("css/bootstrap.min.css")}} rel="stylesheet">
    <link href={{asset("css/style.css")}} rel="stylesheet">
    <link href={{asset("css/responsive.css")}} rel="stylesheet">

</head>
<body>
<div class="col-md-12 noPadding fixedArea">
    <div class="container topOff">
        <div class="col-lg-2 col-md-2 col-xs-4 col-sm-2">
            <img alt="Bootstrap Image Preview" src={{asset("layout/BanGiayStore1.png")}} width="90px" height="70px">
        </div>
        <div class="col-lg-8 col-md-8 col-xs-8 col-sm-10">
            <nav class="navbar navbar-expand-lg navbar-light bg-light myNavbar">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul id="top-menu-nav" class="nav navbar-nav myNavUl">
                            <li role="presentation" class="nav-item nav-btn">
                                <a href="{{url("page1")}} "class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Home</a>
                            </li>
                            <li role="presentation" class="nav-item nav-btn" >
                                <a href="#section1" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Football</a>
                                <div id="item-0"  class="nav-btn-content">
                                    <a href={{asset("index2")}}>Nike</a>
                                    <a href={{asset("index3")}}>Adidas</a>
                                    <a href={{asset("index4")}}>Puma</a>
                                    <a href={{asset("index5")}}>Mizuno</a>
                                    <a href="#">Umbro</a>
                                    <a href="#">New Balance</a>
                                    <a href="#">Thuong Dinh</a>
                                    <a href="#">Others</a>
                                </div>
                            </li>
                            <li role="presentation" class="nav-item nav-btn">
                                <a href="#section2" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Training</a>
                                <div id="item-0" class="nav-btn-content">
                                    <a href="#">Accessories</a>
                                    <a href="#">Training Shirts</a>
                                    <a href="#">Pants</a>
                                    <a href="#">Balls</a>
                                    <a href="#"></a>
                                    <a href="#"></a>
                                </div>
                            </li>
                            <li role="presentation" class="nav-item nav-btn">
                                <a href="#section3" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Fanshop</a>
                                <div id="item-0" class="nav-btn-content">
                                    <a href="#">Champions League 22/23</a>
                                    <a href="#">World Cup 2022</a>
                                    <a href="#">Chelsea Club 22/23</a>
                                    <a href="#">Real Madrid 22/23</a>
                                    <a href="#">National Team Fan</a>
                                </div>
                            </li>
                            <li role="presentation" class="nav-item nav-btn">
                                <a href="#section4" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Sale</a>
                                <div id="item-0" class="nav-btn-content">
                                    <a href="#">SummerSale</a>
                                    <a href="#">BlackFriday</a>
                                    <a href="#">WhiteMonday</a>
                                    <a href="#">LastYear</a>
                                    <a href="#"></a>
                                </div>
                            </li>
                            <li role="presentation" class="nav-item nav-btn">
                                <a href="{{url("faq")}}" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">FAQ</a>
                            </li>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>


        </div>
        <div class="col-lg-2 col-md-2 col-xs-12 col-sm-12 marginTop ">
            <ul class="list-inline centerMobil">
                <li><a href={{url("www.facebook.com")}}><img src="{{asset("img/face.png")}}"></a></li>
                <li><a href={{url("www.twitter.com")}}><img src="{{asset("img/twit.png")}}"></a></li>
                <li><a href={{url("account.google.com")}}><img src="{{asset("img/google-plus.png")}}"></a></li>
            </ul>
        </div>
    </div>
</div>
<div id="section1" class="col-md-12 noPadding">
{{--    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">--}}
{{--        <!-- Indicators -->--}}
{{--        <ol class="carousel-indicators">--}}
{{--            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>--}}
{{--            <li data-target="#carousel-example-generic" data-slide-to="1"></li>--}}
{{--            <li data-target="#carousel-example-generic" data-slide-to="2"></li>--}}
{{--        </ol>--}}

{{--        <!-- Wrapper for slides -->--}}
{{--        --}}{{--        --}}
{{--    </div>--}}
<h2>Product Bill</h2>
    @if(Session::has('error'))
        <div class="alert alert-danger" role="alert" style="width: 350px">
            {{Session::get('error')}}
        </div>
    @endif
    <form class="Material-contact-section section-dark" action="{{url('check-payment')}}" method="post">
        @csrf
        <h3>Product Details:</h3>
        <div class="find-widget">
            <label for="id">Product ID:</label>
            <input type="text" name="id" required>
            @error('id')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="find-widget">
            <label for="size">Size: </label>
            <select id="size" name="size" required>
                <option value="" disabled selected>...</option>
                <option>4.5</option>
                <option>5</option>
                <option>5.5</option>
                <option>6</option>
                <option>6.5</option>
                <option>7</option>
                <option>7.5</option>
                <option>8</option>
                <option>8.5</option>
                <option>9</option>
                <option>9.5</option>
                <option>10</option>
                <option>10.5</option>
                <option>11</option>
                <option>11.5</option>
            </select>
        </div>
        @error('size')
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
        @enderror
{{--        <div>--}}
{{--            <label for="product-quantity">Quantity:</label>--}}
{{--            <input type="number" id="product-quantity" name="product_quantity" required>--}}
{{--        </div>--}}
{{--        <div class="find-widget">--}}
{{--            <label for="price">Price:</label>--}}
{{--            <input type="number" id="price" name="price" min="1" step="1" required>--}}
{{--        </div>--}}

        <h3>Payment Details:</h3>
        <div class="find-widget">
            <label for="payment-method">Payment:</label>
            <select id="payment-method" name="pay_method" required>
                <option value="" disabled selected></option>
                <option>Credit Card</option>
                <option>Paypal</option>
                <option>Visa</option>
                <option>Momo</option>
            </select>
        </div>
        @error('payment-method')
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
        @enderror
{{--        <div class="find-widget">--}}
{{--            <label for="payment-amount">Amount:</label>--}}
{{--            <input type="number" id="payment-amount" name="payment_amount" min="1" step="1" required>--}}
{{--        </div>--}}
        <button type="submit" class="btn btn-primary" >Submit Bill</button>

    </form>


    <div id="section5" class="Material-contact-section section-dark">
        <div class="col-md-8 col-md-offset-2">
            <div class="row">
                <!-- Section Titile -->
                <div class="col-md-12 text-center marginBottom" data-wow-delay=".2s">
                    <h2 class="mainText">Contact</h2>
                    <img src={{asset("img/shapegreen.png")}}>
                </div>
            </div>
            <div class="row">
                <!-- Section Titile -->
                <div class="col-md-6 contact-widget-section2 wow animated fadeInLeft" data-wow-delay=".2s">
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content.</p>

                    <div class="find-widget">
                        Actors: <a href="#">TRUONG TRI KIET & DO THIEN AN</a>
                    </div>
                    <div class="find-widget">
                        Company:  <a href={{url("https://hostriver.ro")}}>HostRiver</a>
                    </div>
                    <div class="find-widget">
                        Address: <a href="#">20 Cong Hoa, Tan Binh District, HoChiMinh City, Vietnam</a>
                    </div>
                    <div class="find-widget">
                        Phone:  <a href="#">+ 879-890-9767</a>
                    </div>

                    <div class="find-widget">
                        Website:  <a href={{asset("https://www.unisportstore.com")}}>www.unisportstore.com</a>
                    </div>
                    <div class="find-widget">
                        Program: <a href="#">Mon to Sat: 09:30 AM - 10.30 PM</a>
                    </div>
                </div>
                <!-- contact form -->
                <div class="col-md-6 wow animated fadeInRight" data-wow-delay=".2s">
                    <form class="shake" role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator">
                        <!-- Name -->
                        <div class="form-group label-floating">
                            <label class="control-label" for="name">Name</label>
                            <input class="form-control myInputFooter" id="name" type="text" name="name" required data-error="Please enter your name">
                            <div class="help-block with-errors"></div>
                        </div>
                        <!-- email -->
                        <div class="form-group label-floating">
                            <label class="control-label" for="email">Email</label>
                            <input class="form-control myInputFooter" id="email" type="email" name="email" required data-error="Please enter your Email">
                            <div class="help-block with-errors"></div>
                        </div>
                        <!-- Subject -->
                        <div class="form-group label-floating">
                            <label class="control-label">Subject</label>
                            <input class="form-control myInputFooter" id="msg_subject" type="text" name="subject" required data-error="Please enter your message subject">
                            <div class="help-block with-errors"></div>
                        </div>
                        <!-- Message -->
                        <div class="form-group label-floating">
                            <label for="message" class="control-label">Message</label>
                            <textarea class="form-control myInputFooter" rows="3" id="message" name="message" required data-error="Write your message"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <!-- Form Submit -->
                        <div class="form-submit col-md-4 col-md-offset-4">
                            <button type="button" class="btn btn-default form-control myButton">Submit</button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 noPadding text-center backFooter">
        <div class="col-md-8 col-md-offset-2">
            <div class="row">
                <div class="col-md-4 col-xs-12 marginTop">
                    <h3 class="footertext">All Right Reserved@Cemreworks </h3>
                </div>

                <div class="col-md-4 col-xs-12 marginTop">
                    <img alt="Bootstrap Image Preview" src={{asset("layout/BanGiayStore1.png")}} width="120px" >
                </div>

                <div class="col-md-4 col-xs-12 marginTop ">
                    <ul class="list-inline centerMobile">
                        <li><a href={{url("www.facebook.com")}}><img src="{{asset("img/face.png")}}"></a></li>
                        <li><a href={{url("www.twitter.com")}}><img src="{{asset("img/twit.png")}}"></a></li>
                        <li><a href={{url("account.google.com")}}><img src="{{asset("img/google-plus.png")}}"></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
    <script src={{asset("js/jquery.min.js")}}></script>
    <script src={{asset("js/jquery-easing/jquery.easing.min.js")}}></script>
    <script src={{asset("js/bootstrap.min.js")}}></script>
    <script src={{asset("js/ajax-mail.js")}}></script>
    <script src={{asset("js/jquery.nicescroll.min.js")}}></script>
    <script src={{asset("js/scripts.js")}}></script>
 </body>
</html>
