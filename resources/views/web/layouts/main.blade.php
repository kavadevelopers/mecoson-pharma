<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
				
  		<!-- SITE TITLE -->
		<title>{{ isset($_title) ? $_title.' | ':'' }}{{ CommonHelper::setting('app_name') }}</title>
							
		<!-- FAVICON AND TOUCH ICONS -->
		<link rel="shortcut icon" href="{{ url('themes/logos/favicon.png') }}" type="image/x-icon">
		<link rel="icon" href="{{ url('themes/logos/favicon.png') }}" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="152x152" href="{{ url('themes/logos/favicon.png') }}">
		<link rel="apple-touch-icon" sizes="120x120" href="{{ url('themes/logos/favicon.png') }}">
		<link rel="apple-touch-icon" sizes="76x76" href="{{ url('themes/logos/favicon.png') }}">
		<link rel="apple-touch-icon" href="{{ url('themes/logos/favicon.png') }}">
		<link rel="icon" href="{{ url('themes/logos/favicon.png') }}" type="image/x-icon">

		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">
		
		<!-- BOOTSTRAP CSS -->
		<link href="{{ url('themes/pharma/css/bootstrap.min.css') }}" rel="stylesheet">
				
		<!-- FONT ICONS -->
		<link href="{{ url('themes/pharma/css/flaticon.css') }}" rel="stylesheet">

		<!-- PLUGINS STYLESHEET -->
		<link href="{{ url('themes/pharma/css/menu.css') }}" rel="stylesheet">	
		<link id="effect" href="{{ url('themes/pharma/css/dropdown-effects/fade-down.css') }}" media="all" rel="stylesheet">
		<link href="{{ url('themes/pharma/css/magnific-popup.css') }}" rel="stylesheet">	
		<link href="{{ url('themes/pharma/css/owl.carousel.min.css') }}" rel="stylesheet">
		<link href="{{ url('themes/pharma/css/owl.theme.default.min.css') }}" rel="stylesheet">
		<link href="{{ url('themes/pharma/css/lunar.css') }}" rel="stylesheet">

		<!-- ON SCROLL ANIMATION -->
		<link href="{{ url('themes/pharma/css/animate.css') }}" rel="stylesheet">
		<link href="{{ url('themes/pharma/css/pink-theme.css') }}" rel="stylesheet">
		<link href="{{ url('themes/pharma/css/responsive.css') }}" rel="stylesheet">
		@include('web.layouts.style')
	</head>




	<body> 
		@php
			$categories = App\Models\MasterCategories::select('name','id','slug')->where('is_deleted','0')->orderby('sort','asc')->get();
		@endphp



		<!-- PRELOADER SPINNER
		============================================= -->	
		<div id="loading" class="loading--theme">
			<div id="loading-center"><span class="loader"></span></div>
		</div>




		<!-- PAGE CONTENT
		============================================= -->	
		<div id="page" class="page font--jakarta">




			<!-- HEADER
			============================================= -->
			<header id="header" class="tra-menu navbar-dark inner-page-header white-scroll">
				<div class="header-wrapper">


					<!-- MOBILE HEADER -->
				    <div class="wsmobileheader clearfix">	  	
				    	<span class="smllogo"><img src="{{ url('themes/logos/logo.png') }}" alt="mobile-logo"></span>
				    	<a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>	
				 	</div>


				 	<!-- NAVIGATION MENU -->
				  	<div class="wsmainfull menu clearfix scroll">
	    				<div class="wsmainwp clearfix">


	    					<!-- HEADER BLACK LOGO -->
	    					<div class="desktoplogo">
	    						<a href="#hero-1" class="logo-black"><img src="{{ url('themes/logos/logo.png') }}" alt="logo"></a>
	    					</div>


	    					<!-- HEADER WHITE LOGO -->
	    					<div class="desktoplogo">
	    						<a href="#hero-1" class="logo-white"><img src="{{ url('themes/logos/logo-footer	.png') }}" alt="logo"></a>
	    					</div>


	    					<!-- MAIN MENU -->
	      					<nav class="wsmenu clearfix">
	        					<ul class="wsmenu-list nav-theme">

									<li class="nl-simple" aria-haspopup="true"><a href="{{ url('home') }}" class="h-link">Home</a></li>
	        						<!-- DROPDOWN SUB MENU -->
						          	<li aria-haspopup="true"><a href="{{ url('about-us') }}" class="h-link">About Us <span class="wsarrow"></span></a>
	            						<ul class="sub-menu">
	            							<li aria-haspopup="true"><a href="{{ url('about-us') }}">About company</a></li>
	            							<li aria-haspopup="true"><a href="{{ url('mission-vision-values') }}">Vision & Mission</a></li>
	            							{{-- <li aria-haspopup="true"><a href="{{ url('quality-policy') }}">Quality Policy</a></li> --}}
	            							<li aria-haspopup="true"><a href="{{ url('history-development') }}">History & Development</a></li>	
						           		</ul>
								    </li>
									@if(count($categories) > 0)
										<li aria-haspopup="true"><a href="{{ url('products') }}" class="h-link">Products <span class="wsarrow"></span></a>
											<ul class="sub-menu">
												@foreach ($categories as $category)
													<li aria-haspopup="true"><a href="{{ url('category/'.$category->slug) }}">{{ $category->name }}</a></li>
												@endforeach
											</ul>
										</li>
									@endif
									<li aria-haspopup="true"><a href="{{ url('career') }}" class="h-link">Career <span class="wsarrow"></span></a>
	            						<ul class="sub-menu">
	            							<li aria-haspopup="true"><a href="{{ url('career') }}">Career with {{ CommonHelper::setting('app_name') }}</a></li>
	            							<li aria-haspopup="true"><a href="{{ url('current-jobs') }}">Current Job Openings</a></li>
						           		</ul>
								    </li>


								    <!-- SIMPLE NAVIGATION LINK -->
							    	<li class="nl-simple" aria-haspopup="true"><a href="{{ url('quality-policy') }}" class="h-link">Quality Policy</a></li>
							    	{{-- <li class="nl-simple" aria-haspopup="true"><a href="{{ url('downloads') }}" class="h-link">Downloads</a></li> --}}

						          	<!-- SIMPLE NAVIGATION LINK -->
							    	{{-- <li class="nl-simple" aria-haspopup="true"><a href="{{ url('contact-us') }}" class="h-link">Contact Us</a></li> --}}

								    <!-- SIGN UP BUTTON -->
								    <li class="nl-simple" aria-haspopup="true">
								    	<a href="{{ url('business-enquiry') }}" class="btn r-04 btn--theme hover--tra-white last-link">Business Inquiry</a>
								    </li> 


	        					</ul>
	        				</nav>	<!-- END MAIN MENU -->


	    				</div>
	    			</div>	<!-- END NAVIGATION MENU -->


				</div>     <!-- End header-wrapper -->
			</header>	<!-- END HEADER -->




			@yield('content')




			<!-- FOOTER-3
			============================================= -->
			<footer id="footer-3" class="pt-100 footer ft-3-ntr" style="background: #FAF9F6;">
				<div class="container">


					<!-- FOOTER CONTENT -->
					<div class="row">


						<!-- FOOTER LOGO -->
						<div class="col-xl-4">
							<div class="footer-info" style="margin-bottom: 10px;">
								<img class="footer-logo" src="{{ url('themes/logos/logo.png') }}" alt="footer-logo">
							</div>	
							<p style="text-align: justify;margin-top: 10px;">A reputed pharmaceutical manufacturer and exporter, dedicated to producing and supplying high-quality pharmaceutical products. With a strong focus on research, innovation and compliance with international standards, cater to global markets, supplying safe and effective medications.</p>
						</div>	


						<!-- FOOTER LINKS -->
						<div class="col-sm-4 col-lg-3 col-xl-2">
							<div class="footer-links fl-1">
							
								<!-- Title -->
								<h6 class="s-17 w-700">Navigation</h6>

								<!-- Links -->
								<ul class="foo-links clearfix">
									<li><p><a href="{{ url('home') }}">Home</a></p></li>
									<li><p><a href="{{ url('about-us') }}">About Company</a></p></li>						
									<li><p><a href="{{ url('mission-vision-values') }}">Vision & Mission</a></p></li>	
									<li><p><a href="{{ url('quality-policy') }}">Quality Assurance</a></p></li>					
									<li><p><a href="{{ url('products') }}">Products</a></p></li>			
									{{-- <li><p><a href="{{ url('downloads') }}">Downloads</a></p></li>			 --}}
									<li><p><a href="{{ url('career') }}">Career</a></p></li>			
									<li><p><a href="{{ url('contact-us') }}">Contact Us</a></p></li>	
								</ul>

							</div>
						</div>	<!-- END FOOTER LINKS -->	



						<!-- FOOTER LINKS -->
						<div class="col-sm-4 col-lg-4 col-xl-3">
							<div class="footer-links fl-3">
												
								<!-- Title -->
								<h6 class="s-17 w-700">Product Category</h6>

								<!-- Links -->
								<ul class="foo-links clearfix">
									@foreach ($categories as $category)
										<li><p><a href="{{ url('category/'.$category->slug) }}">{{ $category->name }}</a></p></li>										
									@endforeach
								</ul>

							</div>	
						</div>	<!-- END FOOTER LINKS -->	


						<!-- FOOTER NEWSLETTER FORM -->
						<div class="col-sm-10 col-md-8 col-lg-3 col-xl-3">
							<div class="footer-links fl-3">
												
								<!-- Title -->
								<h6 class="s-17 w-700">Get In Touch</h6>

								<ul class="footer-contact-us">
									<li>
										<span class="flaticon-mobile-search"></span>
										<a href="tel:{{ CommonHelper::setting('web_mobile') }}">
											{{ CommonHelper::setting('web_mobile') }}
										</a><br>
										<a href="tel:{{ CommonHelper::setting('web_mobile2') }}">
											{{ CommonHelper::setting('web_mobile2') }}
										</a>
									</li>
									<li>
										<span class="flaticon-email"></span>
										<a href="mailto:{{ CommonHelper::setting('web_email') }}">
											{{ CommonHelper::setting('web_email') }}
										</a>
									</li>
									<li>
										<span class="flaticon-global"></span>
										{!! nl2br(CommonHelper::setting('web_address')) !!}
									</li>
								</ul>

							</div>	
						</div>	<!-- END FOOTER NEWSLETTER FORM -->


					</div>	<!-- END FOOTER CONTENT -->


					<hr>	<!-- FOOTER DIVIDER LINE -->


					<!-- BOTTOM FOOTER -->
					<div class="bottom-footer">
						<div class="row row-cols-1 row-cols-md-2 d-flex align-items-center">


							<!-- FOOTER COPYRIGHT -->
							<div class="col">
								<div class="footer-copyright">
									<p class="p-sm">&copy; {{ date('Y') }} {{ CommonHelper::setting('app_name') }}. <span>All Rights Reserved.</span>  Powered By <a href="https://www.kavadevelopers.com/" target="_blank">Kava Developers</a></p>
								</div>
							</div>


							<!-- FOOTER SOCIALS -->
							<div class="col">
								<ul class="bottom-footer-socials ico-20 text-end">
									@if (CommonHelper::setting('so_facebook_url') != "")
										<li><a href="{{ CommonHelper::setting('so_facebook_url') }}"><span class="flaticon-facebook"></span></a></li>
									@endif
									@if (CommonHelper::setting('so_instagram_url') != "")
										<li><a href="{{ CommonHelper::setting('so_instagram_url') }}"><span class="flaticon-instagram"></span></a></li>
									@endif
									@if (CommonHelper::setting('so_linkedin_url') != "")
										<li><a href="{{ CommonHelper::setting('so_linkedin_url') }}"><span class="flaticon-linkedin-logo"></span></a></li>
									@endif
									@if (CommonHelper::setting('so_youtube_url') != "")
										<li><a href="{{ CommonHelper::setting('so_youtube_url') }}"><span class="flaticon-youtube"></span></a></li>
									@endif
									@if (CommonHelper::setting('so_twitter_url') != "")
										<li><a href="{{ CommonHelper::setting('so_twitter_url') }}"><span class="flaticon-twitter"></span></a></li>
									@endif
									@if (CommonHelper::setting('so_skype_url') != "")
										<li><a href="{{ CommonHelper::setting('so_skype_url') }}"><span class="flaticon-skype"></span></a></li>
									@endif
								</ul>
							</div>


						</div>  <!-- End row -->
					</div>	<!-- END BOTTOM FOOTER -->


				</div>     <!-- End container -->	
			</footer>   <!-- END FOOTER-3 -->	




		</div>	<!-- END PAGE CONTENT -->	




		<!-- EXTERNAL SCRIPTS
		============================================= -->	
		<script src="{{ url('themes/pharma/js/jquery-3.7.0.min.js') }}"></script>
		<script src="{{ url('themes/pharma/js/bootstrap.min.js') }}"></script>	
		<script src="{{ url('themes/pharma/js/modernizr.custom.js') }}"></script>
		<script src="{{ url('themes/pharma/js/jquery.easing.js') }}"></script>
		<script src="{{ url('themes/pharma/js/jquery.appear.js') }}"></script>
		<script src="{{ url('themes/pharma/js/menu.js') }}"></script>
		<script src="{{ url('themes/pharma/js/owl.carousel.min.js') }}"></script>
		<script src="{{ url('themes/pharma/js/pricing-toggle.js') }}"></script>
		<script src="{{ url('themes/pharma/js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ url('themes/pharma/js/request-form.js') }}"></script>	
		<script src="{{ url('themes/pharma/js/jquery.validate.min.js') }}"></script>
		<script src="{{ url('themes/pharma/js/jquery.ajaxchimp.min.js') }}"></script>	
		<script src="{{ url('themes/pharma/js/popper.min.js') }}"></script>
		<script src="{{ url('themes/pharma/js/lunar.js') }}"></script>
		<script src="{{ url('themes/pharma/js/wow.js') }}"></script>
				
		<!-- Custom Script -->		
		<script src="{{ url('themes/pharma/js/custom.js') }}"></script>

		@include('web.layouts.script')

		<script type="text/javascript">
            @if(Session::has('error'))
                notifyF("{{ Session::get('error') }}",'error');
            @endif
            @if(Session::has('success'))
                notifyF("{{ Session::get('success') }}",'msg');
            @endif
        </script>
	</body>
</html>