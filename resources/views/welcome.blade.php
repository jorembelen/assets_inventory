<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{asset('frontEnd')}}/img/favicon.png" type="image/png">
        <title>RCL | Assets V 1.0</title>
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/bootstrap.css">
        <link rel="stylesheet" href="{{asset('frontEnd')}}/vendors/linericon/style.css">
        <link rel="stylesheet" href="{{asset('frontEnd')}}/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('frontEnd')}}/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="{{asset('frontEnd')}}/vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="{{asset('frontEnd')}}/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="{{asset('frontEnd')}}/vendors/animate-css/animate.css">
        <link rel="stylesheet" href="{{asset('frontEnd')}}/vendors/popup/magnific-popup.css">
        <link rel="stylesheet" href="{{asset('frontEnd')}}/vendors/flaticon/flaticon.css">
        <!-- main css -->
        <link rel="stylesheet" href="{{asset('frontEnd')}}/css/style.css">
        <link rel="stylesheet" href="{{asset('frontEnd')}}/css/responsive.css">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="#"><img src="/admin/assets/images/logo.png" height="40" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item"><a class="nav-link" href="{!! url('/') !!}">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="#">About Us</a></li> 
								<li class="nav-item"><a class="nav-link" href="#">Services</a>
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="#">Projects</a>
										<li class="nav-item"><a class="nav-link" href="#">Elements</a></li>
									</ul>
								</li> 
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
										<li class="nav-item"><a class="nav-link" href="{{asset('frontEnd')}}/single-blog.html">Blog Details</a></li>
									</ul>
								</li> 
                                <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                                <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
            <div class="banner_inner">
				<div class="container">
					<div class="banner_content text-center">
						<h2>Welcome to Jubail IT</h2>
						<p></p>
						<a class="banner_btn" href="/login">Get Started</a>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
       
        <footer class="footer-area p_120">
            <div class="container">
				<div class="single-footer-widget footer_middle">
					<h6 class="footer_title">Newsletter</h6>
					<p>Stay updated with our latest trends</p>		
					<div id="mc_embed_signup">
						<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
							<div class="input-group d-flex flex-row">
								<input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
								<button class="btn sub-btn"><span class="lnr lnr-location"></span></button>		
							</div>									
							<div class="mt-10 info"></div>
						</form>
					</div>
				</div>
                <div class="footer-bottom footer_copy">
                    <p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Rezayat Company <i class="fa fa-heart-o" aria-hidden="true"></i> Ltd. <a href="{!! url('main') !!}" target="_blank">RCL</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    <div class="footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->
        
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{asset('frontEnd')}}/js/jquery-3.2.1.min.js"></script>
        <script src="{{asset('frontEnd')}}/js/popper.js"></script>
        <script src="{{asset('frontEnd')}}/js/bootstrap.min.js"></script>
        <script src="{{asset('frontEnd')}}/js/stellar.js"></script>
        <script src="{{asset('frontEnd')}}/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="{{asset('frontEnd')}}/vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="{{asset('frontEnd')}}/vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="{{asset('frontEnd')}}/vendors/isotope/isotope-min.js"></script>
        <script src="{{asset('frontEnd')}}/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="{{asset('frontEnd')}}/js/jquery.ajaxchimp.min.js"></script>
        <script src="{{asset('frontEnd')}}/vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="{{asset('frontEnd')}}/vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="{{asset('frontEnd')}}/js/mail-script.js"></script>
        <script src="{{asset('frontEnd')}}/vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="{{asset('frontEnd')}}/vendors/scroll/jquery.nicescroll.min.js"></script>
        <script src="{{asset('frontEnd')}}/js/theme.js"></script>
    </body>
</html>