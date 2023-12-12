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
                                  <a href="{{asset("faq")}}" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">FAQ</a>
                              </li>
                          </ul>
                      </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
              </nav>
				</div>
				<div class="col-lg-2 col-md-2 col-xs-12 col-sm-12 marginTop ">
					<ul class="list-inline centerMobil">
                        <li><a href="{{url('page3')}}"><img src="{{asset("layout/bag.png")}}" width="30px"></a></li>
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
						<div class="item active">
							<img src={{asset("layout/background1.png")}} alt="..." width="1350px" height="500px">
							<div class="carousel-caption myCaption">
{{--								Create The Best One Using 60 Different Design--}}
                                Come to your dream!!
							</div>
						</div>
						<div class="item">
							<img src={{asset("layout/background2.png")}} alt="..." width="1350px" height="500px">
							<div class="carousel-caption myCaption">
{{--								Create The Best One Using 60 Different Design--}}
                                Football is living peace!
							</div>
						</div>
						<div class="item">
							<img src={{asset("layout/background3.png")}} alt="..." width="1350px" height="500px">
							<div class="carousel-caption myCaption">
{{--								Create The Best One Using 60 Different Design--}}
                                No room for racism!
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

{{--                <div class="myContainerAbs col-md-8 col-md-offset-2 hidden-sm">--}}
{{--					<div class="row">--}}
{{--						<div class="col-md-3">--}}
{{--							<input type="text" class="form-control myInput" placeholder="First Name" aria-describedby="basic-addon1">--}}

{{--						</div>--}}
{{--						<div class="col-md-3">--}}
{{--							<input type="text" class="form-control myInput" placeholder="Last Name" aria-describedby="basic-addon1">--}}

{{--						</div>--}}
{{--						<div class="col-md-3">--}}
{{--							<input type="text" class="form-control myInput" placeholder="Email" aria-describedby="basic-addon1">--}}

{{--						</div>--}}
{{--						<div class="col-md-3">--}}
{{--							<button type="button" class="btn btn-default form-control myButton">Sign Up</button>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}
            </div>


			<div id="section2" class="col-md-12 noPadding text-center">
					<h1 class="mainText">We Love What We Do</h1>
					<img src={{asset("img/shapegreen.png")}}>
					<div class="col-md-12">
						<p class="col-md-8 col-md-offset-2 myTextMain">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
					</div>
					<div class="col-md-12">

						<button type="button" class="btn btn-default myButton">Contact Us</button>
					</div>
					<div class="col-md-8 col-md-offset-2 backGroundImage">
						<div id="carousel-example-generic-main" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<li data-target="#carousel-example-generic-main" data-slide-to="0" class="active"></li>
								<li data-target="#carousel-example-generic-main" data-slide-to="1"></li>
								<li data-target="#carousel-example-generic-main" data-slide-to="2"></li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">
								<div class="item active">
								<img src={{asset("layout/background2.png")}} alt="..." width="1340px" height="500">
								<div class="carousel-caption myCaption">
									Create The Best One Using 60 Different Design
								</div>
								</div>
								<div class="item">
								<img src="https://via.placeholder.com/1340x500" alt="...">
								<div class="carousel-caption myCaption">
									Create The Best One Using 60 Different Design
								</div>
								</div>
								<div class="item">
									<img src="https://via.placeholder.com/1340x500" alt="...">
									<div class="carousel-caption myCaption">
										Create The Best One Using 60 Different Design
									</div>
								</div>
							</div>

							<!-- Controls -->
							<a class="left carousel-control" href="#carousel-example-generic-main" role="button" data-slide="prev">
								<img class="img-responsive" src={{asset("img/left-arrow.png")}}>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#carousel-example-generic-main" role="button" data-slide="next">
								<img class="img-responsive" src={{asset("img/right.png")}}>
								<span class="sr-only">Next</span>
							</a>
						</div>
				</div>
			</div>
{{--			<div class="col-md-12 noPadding">--}}
{{--				<div class="filterBack"></div>--}}
{{--				<div class="abs text-center">--}}
{{--					<h2 class="absTitle">Fully Responsive</h2>--}}
{{--					<img src={{asset("img/shape.png")}}>--}}
{{--					<p class="absText">Create The Best One Using 60 Different Design</p>--}}
{{--				</div>--}}
{{--			</div>--}}
{{--			<div class="col-md-12 noPadding text-center">--}}
{{--				<h1 class="mainText">Best Seller</h1>--}}
{{--				<img class="withBottom" src={{asset("img/shapegreen.png")}}>--}}
{{--			</div>--}}
{{--			<div id="section3" class="col-md-12 noPadding text-center priceBackground">--}}
{{--				<div class="container pricePadd">--}}
{{--					<div class="col-md-3">--}}
{{--						<div  class="panel panel-default">--}}
{{--							<div id="blue" class="panel-heading">--}}
{{--								<h3 class="panel-title">Basic</h3>--}}
{{--								<span>$20</span>--}}
{{--							</div>--}}
{{--							<div class="panel-body">--}}
{{--								<h4>Yearly Membership</h4>--}}
{{--								<ul class="list-group">--}}
{{--									<li class="list-group-item">Cras justo odio</li>--}}
{{--									<li class="list-group-item">Dapibus ac facilisis in</li>--}}
{{--									<li class="list-group-item">Morbi leo risus</li>--}}
{{--									<li class="list-group-item">Porta ac consectetur ac</li>--}}
{{--									<li class="list-group-item">Vestibulum at eros</li>--}}
{{--								  </ul>--}}
{{--							</div>--}}

{{--						</div>--}}
{{--					</div>--}}
{{--					<div class="col-md-3">--}}
{{--						<div class="panel panel-default">--}}
{{--							<div id="light-blue" class="panel-heading">--}}
{{--								<h3 class="panel-title">Panel title</h3>--}}
{{--								<span>$40</span>--}}

{{--							</div>--}}
{{--							<div class="panel-body">--}}
{{--								<h4>Monthly Membership</h4>--}}
{{--								<ul class="list-group">--}}
{{--									<li class="list-group-item">Cras justo odio</li>--}}
{{--									<li class="list-group-item">Dapibus ac facilisis in</li>--}}
{{--									<li class="list-group-item">Morbi leo risus</li>--}}
{{--									<li class="list-group-item">Porta ac consectetur ac</li>--}}
{{--									<li class="list-group-item">Vestibulum at eros</li>--}}
{{--								  </ul>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--					<div class="col-md-3">--}}
{{--						<div  class="panel panel-default">--}}
{{--							<div id="orange" class="panel-heading">--}}
{{--								<h3 class="panel-title">Panel title</h3>--}}
{{--								<span>$60</span>--}}
{{--							</div>--}}
{{--							<div class="panel-body">--}}
{{--								<h4>Monthly Membership</h4>--}}
{{--								<ul class="list-group">--}}
{{--									<li class="list-group-item">Cras justo odio</li>--}}
{{--									<li class="list-group-item">Dapibus ac facilisis in</li>--}}
{{--									<li class="list-group-item">Morbi leo risus</li>--}}
{{--									<li class="list-group-item">Porta ac consectetur ac</li>--}}
{{--									<li class="list-group-item">Vestibulum at eros</li>--}}
{{--								  </ul>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--					<div class="col-md-3">--}}
{{--						<div  class="panel panel-default">--}}
{{--							<div id="green" class="panel-heading">--}}
{{--								<h3 class="panel-title">Panel title</h3>--}}
{{--								<span>$80</span>--}}

{{--							</div>--}}
{{--							<div class="panel-body">--}}
{{--								<h4>Free Account</h4>--}}
{{--								<ul class="list-group">--}}
{{--									<li class="list-group-item">Cras justo odio</li>--}}
{{--									<li class="list-group-item">Dapibus ac facilisis in</li>--}}
{{--									<li class="list-group-item">Morbi leo risus</li>--}}
{{--									<li class="list-group-item">Porta ac consectetur ac</li>--}}
{{--									<li class="list-group-item">Vestibulum at eros</li>--}}
{{--								  </ul>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}
{{--			<div id="section4" class="col-md-12 noPadding text-center">--}}
{{--			<div id="myCarouselNew">--}}
{{--				<h2 class="mainText">Testimonials</h2>--}}
{{--				<img src={{asset("img/shapegreen.png")}}>--}}
{{--				<div id="myCarousel" class="carousel slide" data-ride="carousel">--}}
{{--					<!-- Carousel indicators -->--}}
{{--					<ol class="carousel-indicators">--}}
{{--						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>--}}
{{--						<li data-target="#myCarousel" data-slide-to="1"></li>--}}
{{--						<li data-target="#myCarousel" data-slide-to="2"></li>--}}
{{--					</ol>--}}
					<!-- Wrapper for carousel items -->
{{--					<div class="carousel-inner">--}}
{{--						<div class="item carousel-item active">--}}
{{--							<div class="img-box"><img src={{asset("img/testimonial.png")}} alt=""></div>--}}
{{--							<p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>--}}
{{--							<p class="overview"><b>Michael Holz</b>Seo Analyst at <a href="#">OsCorp Tech.</a></p>--}}
{{--							<div class="star-rating">--}}
{{--								<ul class="list-inline">--}}
{{--									<li class="list-inline-item"><i class="fa fa-star"></i></li>--}}
{{--									<li class="list-inline-item"><i class="fa fa-star"></i></li>--}}
{{--									<li class="list-inline-item"><i class="fa fa-star"></i></li>--}}
{{--									<li class="list-inline-item"><i class="fa fa-star"></i></li>--}}
{{--									<li class="list-inline-item"><i class="fa fa-star-o"></i></li>--}}
{{--								</ul>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--						<div class="item carousel-item">--}}
{{--							<div class="img-box"><img src={{asset("img/testimonial.png")}} alt=""></div>--}}
{{--							<p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Vestibulum idac nisl bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>--}}
{{--							<p class="overview"><b>Paula Wilson</b>Media Analyst at <a href="#">SkyNet Inc.</a></p>--}}
{{--							<div class="star-rating">--}}
{{--								<ul class="list-inline">--}}
{{--									<li class="list-inline-item"><i class="fa fa-star"></i></li>--}}
{{--									<li class="list-inline-item"><i class="fa fa-star"></i></li>--}}
{{--									<li class="list-inline-item"><i class="fa fa-star"></i></li>--}}
{{--									<li class="list-inline-item"><i class="fa fa-star"></i></li>--}}
{{--									<li class="list-inline-item"><i class="fa fa-star-o"></i></li>--}}
{{--								</ul>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--						<div class="item carousel-item">--}}
{{--							<div class="img-box"><img src={{asset("img/testimonial.png")}} alt=""></div>--}}
{{--							<p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio. Phasellus auctor velit.</p>--}}
{{--							<p class="overview"><b>Antonio Moreno</b>Web Developer at <a href="#">Circle Ltd.</a></p>--}}
{{--							<div class="star-rating">--}}
{{--								<ul class="list-inline">--}}
{{--									<li class="list-inline-item"><i class="fa fa-star"></i></li>--}}
{{--									<li class="list-inline-item"><i class="fa fa-star"></i></li>--}}
{{--									<li class="list-inline-item"><i class="fa fa-star"></i></li>--}}
{{--									<li class="list-inline-item"><i class="fa fa-star"></i></li>--}}
{{--									<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>--}}
{{--								</ul>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--					<!-- Carousel controls -->--}}
{{--					<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">--}}
{{--						<i class="fa fa-angle-left"></i>--}}
{{--					</a>--}}
{{--					<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">--}}
{{--						<i class="fa fa-angle-right"></i>--}}
{{--					</a>--}}
{{--				</div>--}}
{{--			  </div>--}}
{{--		   </div>--}}
{{--			<div class="col-md-12 noPadding text-center backNewsletter">--}}
{{--				<div class="col-md-8 col-md-offset-2">--}}
{{--					<div class="row">--}}
{{--						<div class="col-md-4">--}}
{{--							<h3 class="noTop">Newsletter Sign Up</h3>--}}
{{--						</div>--}}
{{--						<div class="col-md-6">--}}
{{--							<input type="text" class="form-control myInputFooter" placeholder="Last Name" aria-describedby="basic-addon1">--}}

{{--						</div>--}}
{{--						<div class="col-md-2">--}}
{{--							<button type="button" class="btn btn-default form-control myButton">Sign Up</button>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}
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
