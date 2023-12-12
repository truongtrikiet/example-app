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
    <meta name="Adidas">

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
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            {{--            <div class="item active">--}}
            {{--                <img src={{asset("layout/background1.png")}} alt="..." width="1350px" height="500px">--}}
            {{--                <div class="carousel-caption myCaption">--}}
            {{--                    								Create The Best One Using 60 Different Design--}}
            {{--                </div>--}}
            {{--            </div>--}}
            <div class="item active">
                <img src={{asset("layout/background2.png")}} alt="..." width="1350px" height="500px">
                <div class="carousel-caption myCaption">
                    {{--								Create The Best One Using 60 Different Design--}}
                </div>
            </div>
            <div class="item">
                <img src={{asset("layout/background3.png")}} alt="..." width="1350px" height="500px">
                <div class="carousel-caption myCaption">
                    {{--								Create The Best One Using 60 Different Design--}}
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href={{asset("#carousel-example-generic")}} role="button" data-slide="prev">
            <img class="img-responsive" src={{asset("img/left-arrow.png")}}>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href={{asset("#carousel-example-generic")}} role="button" data-slide="next">
            <img class="img-responsive" src={{asset("img/right.png")}}>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="navbar-link">
    <a href="#">Nike</a> |
    <a href="#">Adidas</a> |
    <a href="#">Puma</a> |
    <a href="#">Balls</a> |
    <a href="#">T-Shirts</a> |
    <a href="#">Thuong Dinh</a> |
    <a href="#">Champion League 22/23</a> |
    <a href="#">World Cup 2022</a> |
    <a href="#">Chelsea Club FC</a>
</div>

{{--<div class="col-md-12 noPadding text-center">--}}
{{--    <h1 class="mainText">Best Seller</h1>--}}
{{--    <img class="withBottom" src={{asset("img/shapegreen.png")}}>--}}
{{--</div>--}}
<div id="section3" class="col-md-12 noPadding text-center priceBackground">
    <div class="container pricePadd">

        <div class="col-md-3">
            <div class="panel panel-default">
                <div id="white" class="panel-heading">
                    <h3 class="panel-title" >#605</h3>
                    <h3 class="panel-title" >Adidas Subasa</h3>
                    <img src="{{asset("img/adidas/AdidasXSFBlack.jpeg")}}" width="140px" height="140px">
                    <span>170$</span>
                </div>
{{--                <ul class="list-group">--}}
{{--                    <li class="list-group-item"><a href="#">Watch Now<a/></li>--}}
{{--                </ul>--}}
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div id="white" class="panel-heading">
                    <h3 class="panel-title" >#606</h3>
                    <h3 class="panel-title" >Adidas Predator</h3>
                    <img src="{{asset("img/adidas/AdidasXSFBlue.webp")}}" width="140px" height="140px">
                    <span>225$</span>
                </div>
{{--                <ul class="list-group">--}}
{{--                    <li class="list-group-item"><a href="#">Watch Now<a/></li>--}}
{{--                </ul>--}}
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div id="white" class="panel-heading">
                    <h3 class="panel-title" >#607</h3>
                    <h3 class="panel-title" >Adidas Kroos</h3>
                    <img src="{{asset("img/adidas/AdidasXSFC1.webp")}}" width="140px" height="140px">
                    <span>$250</span>
                </div>
{{--                <ul class="list-group">--}}
{{--                    <li class="list-group-item"><a href="#">Watch Now<a/></li>--}}
{{--                </ul>--}}
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div id="white" class="panel-heading">
                    <h3 class="panel-title" >#608</h3>
                    <h3 class="panel-title" >Adidas Copa</h3>
                    <img src="{{asset("img/adidas/AdidasXSFGrey.webp")}}" width="140px" height="140px">
                    <span>170$</span>
                </div>
{{--                <ul class="list-group">--}}
{{--                    <li class="list-group-item"><a href="#">Watch Now<a/></li>--}}
{{--                </ul>--}}
            </div>
        </div>
{{--        <div class="col-md-3">--}}
{{--            <div class="panel panel-default">--}}
{{--                <div id="white" class="panel-heading">--}}
{{--                    <h3 class="panel-title" >#613</h3>--}}
{{--                    <h3 class="panel-title" >Adidas X Speedflow.1 Rainbow</h3>--}}
{{--                    <img src="{{asset("img/adidas/AdidasXSFRainbow.webp")}}" width="140px" height="140px">--}}
{{--                    <span>$270</span>--}}
{{--                </div>--}}
{{--                <ul class="list-group">--}}
{{--                    <li class="list-group-item"><a href="#">Watch Now<a/></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-3">--}}
{{--            <div class="panel panel-default">--}}
{{--                <div id="white" class="panel-heading">--}}
{{--                    <h3 class="panel-title" >#614</h3>--}}
{{--                    <h3 class="panel-title" >Adidas X Speedflow.1 Red</h3>--}}
{{--                    <img src="{{asset("img/adidas/AdidasXSFRed.webp")}}" width="140px" height="140px">--}}
{{--                    <span>$270</span>--}}
{{--                </div>--}}
{{--                <ul class="list-group">--}}
{{--                    <li class="list-group-item"><a href="#">Watch Now<a/></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}

    </div>
</div>

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

<script src={{asset("js/jquery.min.js")}}></script>
<script src={{asset("js/jquery-easing/jquery.easing.min.js")}}></script>
<script src={{asset("js/bootstrap.min.js")}}></script>
<script src={{asset("js/ajax-mail.js")}}></script>
<script src={{asset("js/jquery.nicescroll.min.js")}}></script>
<script src={{asset("js/scripts.js")}}></script>
</body>
</html>
