@extends('web.layouts.main')
@section('content')


			<div id="carouselExampleCaptions" class="carousel slide" style="padding-top: 70px;">
				<div class="carousel-indicators">
					@foreach ($banners as $key => $banner)
						<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $key }}" class="active" aria-current="true" aria-label="Slide 1"></button>
					@endforeach
				</div>
				<div class="carousel-inner">
					@foreach ($banners as $key => $banner)
						<div class="carousel-item {{ $key==0?'active':'' }}">
							<img src="{{ CommonHelper::getHomeBanner($banner->image) }}" class="d-block w-100" alt="...">
						</div>
					@endforeach
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
				</button>
			</div>


			{{-- <section id="hero-1" class="bg--scroll hero-section">
				<div class="container">	
					<div class="row d-flex align-items-center">


						<!-- HERO TEXT -->
						<div class="col-md-6">
							<div class="hero-1-txt color--white wow fadeInRight">

								<!-- Title -->
								<h2 class="s-58 w-700">Content is the key to building an audience</h2>

								<!-- Text -->
								<p class="p-xl">Mauris donec turpis suscipit sapien ociis sagittis sapien tempor a volute 
									ligula and aliquet tortor
								</p>

								<!-- Button -->	
								<a href="#banner-3" class="btn r-04 btn--theme hover--tra-white">Get started for free</a>
								<p class="p-sm btn-txt ico-15">
									<span class="flaticon-check"></span> No credit card needed, free 14-day trial
								</p>

							</div>
						</div>	<!-- END HERO TEXT -->	


						<!-- HERO IMAGE -->
						<div class="col-md-6">	
							<div class="hero-1-img wow fadeInLeft">	
								<img class="img-fluid" src="{{ url('themes/pharma/images/hero-1-img.png') }}" alt="hero-image">					
							</div>
						</div>	
						

					</div>    <!-- End row --> 	
				</div>	   <!-- End container --> 	
			</section> --}}




			<!-- FEATURES-6
			============================================= -->
			<section id="features-6" class="py-100 features-section division">
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row justify-content-center">	
						<div class="col-md-10 col-lg-9">
							<div class="section-title mb-70">	

								<!-- Title -->	
								<h2 class="s-40 w-700">Manufacturer of Pharmaceutical Finished Formulations </h2>	

								<!-- Text -->	
								{{-- <p class="s-21 color--grey">Ligula risus auctor tempus magna feugiat lacinia.</p> --}}
									
							</div>	
						</div>
					</div>


					<!-- FEATURES-6 WRAPPER -->
					<div class="fbox-wrapper text-center">
						<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">


							<!-- FEATURE BOX #1 -->
		 					<div class="col">
		 						<div class="fbox-6 fb-1 wow fadeInUp">

		 							<!-- Icon -->
									<div class="fbox-ico ico-55">
										<div class="shape-ico color--theme">

											<!-- Vector Icon -->
											{{-- <span class="flaticon-graphics"></span> --}}
											<!-- Shape -->
											{{-- <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
												<path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
											</svg> --}}
											<img src="{{ url('themes/images/product-tablets.png') }}" />

										</div>
									</div>	<!-- End Icon -->

									<!-- Text -->
									<div class="fbox-txt">
										<h6 class="s-20 w-700">Tablets</h6>
										<p>Multiple Shape and Sizes Tablet Manufacturing Facility</p>
									</div>

		 						</div>
		 					</div>	<!-- END FEATURE BOX #1 -->	


		 					<!-- FEATURE BOX #2 -->
		 					<div class="col">
		 						<div class="fbox-6 fb-2 wow fadeInUp">

		 							<!-- Icon -->
									<div class="fbox-ico ico-55">
										<div class="shape-ico color--theme">

											{{-- <!-- Vector Icon -->
											<span class="flaticon-idea"></span>

											<!-- Shape -->
											<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
											  <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
											</svg> --}}
											<img src="{{ url('themes/images/product-capsules.png') }}" style="width:auto;"/>

										</div>
									</div>	<!-- End Icon -->

									<!-- Text -->
									<div class="fbox-txt">
										<h6 class="s-20 w-700">Capsules</h6>
										<p>Automatic machines for Capsule filling </p>
									</div>

		 						</div>
		 					</div>	<!-- END FEATURE BOX #2 -->	


		 					<!-- FEATURE BOX #3 -->
		 					<div class="col">
		 						<div class="fbox-6 fb-3 wow fadeInUp">

		 							<!-- Icon -->
									<div class="fbox-ico ico-55">
										<div class="shape-ico color--theme">

											{{-- <!-- Vector Icon -->
											<span class="flaticon-graphic"></span>

											<!-- Shape -->
											<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
											  <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
											</svg> --}}

											<img src="{{ url('themes/images/product-syrup.png') }}" style="width:auto;"/>

										</div>
									</div>	<!-- End Icon -->

									<!-- Text -->
									<div class="fbox-txt">
										<h6 class="s-20 w-700">Syrup</h6>
										<p>Fully automatic syrup manufacturing facility</p>
									</div>

		 						</div>
		 					</div>	<!-- END FEATURE BOX #3 -->	


		 					<!-- FEATURE BOX #4 -->
		 					<div class="col">
		 						<div class="fbox-6 fb-4 wow fadeInUp">

		 							<!-- Icon -->
									<div class="fbox-ico ico-55">
										<div class="shape-ico color--theme">

											{{-- <!-- Vector Icon -->
											<span class="flaticon-doc"></span>

											<!-- Shape -->
											<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
											  <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
											</svg> --}}

											<img src="{{ url('themes/images/handshake.png') }}" style="width:auto;"/>

										</div>
									</div>	<!-- End Icon -->

									<!-- Text -->
									<div class="fbox-txt">
										<h6 class="s-20 w-700">Third Party Manufacturing</h6>
										<p>Wide range of products with best service and prices</p>
									</div>

		 						</div>
		 					</div>	<!-- END FEATURE BOX #4 -->	


						</div>  <!-- End row -->  
					</div>	<!-- END FEATURES-6 WRAPPER -->


				</div>     <!-- End container -->
			</section>	<!-- END FEATURES-6 -->




			<!-- DIVIDER LINE -->
			<hr class="divider">




			<!-- TEXT CONTENT
			============================================= -->
			<section id="lnk-1" class="pt-100 ct-02 content-section division">
				<div class="container">


					<!-- SECTION CONTENT (ROW) -->	
					<div class="row d-flex align-items-center">


						<!-- IMAGE BLOCK -->
						<div class="col-md-6">
							<div class="img-block left-column wow fadeInRight">
								<img class="img-fluid" src="{{ url('themes/images/our-company.png') }}" alt="content-image">
							</div>
						</div>


						<!-- TEXT BLOCK -->	
						<div class="col-md-6">
							<div class="txt-block right-column wow fadeInLeft">

								<!-- Section ID -->	
						 		<span class="section-id">OUR COMPANY</span>

								<!-- Title -->	
								<h2 class="s-46 w-700">Make your most valuable products</h2>

								<!-- Text -->	
								<p>Accumulated experience in marketing & manufacturing of pharma products, innovative approach of managing & optimizing business processes allowed us to become actively present in the market. We offer a highest quality products, most competitive prices & timely delivery to our valuable customers</p>

								<!-- Small Title -->	
								<h5 class="s-24 w-700">Quality that define products</h5>

								<!-- List -->	
								<ul class="simple-list">

									<li class="list-item">
										<p>We are committed to highest level of quality and so, we have inde-pendent Quality Control laboratory to make best quality products.</p>
									</li>

									{{-- <li class="list-item">
										<p class="mb-0">Purus suscipit cursus vitae cubilia magnis volute egestas vitae 
										   sapien turpis ultrice auctor congue magna placerat
										</p>
									</li> --}}

								</ul>

							</div>
						</div>	<!-- END TEXT BLOCK -->	


					</div>	<!-- END SECTION CONTENT (ROW) -->	


				</div>	   <!-- End container -->
			</section>	<!-- END TEXT CONTENT -->




			<!-- TEXT CONTENT
			============================================= -->
			<section class="pt-100 ct-01 content-section division">
				<div class="container">


					<!-- SECTION CONTENT (ROW) -->	
					<div class="row d-flex align-items-center">


						<!-- TEXT BLOCK -->	
						<div class="col-md-6 order-last order-md-2">
							<div class="txt-block left-column wow fadeInRight">


								<!-- TEXT BOX -->	
								<div class="txt-box">

									<!-- Title -->	
									<h5 class="s-24 w-700">Third Party Manufacturing of Finished Formulations</h5>

									<!-- Text -->	
									<p>We are one of the most promising contract manufacturers in India, with 12 years of core experience in pharma industry. State of the art manufacturing facilities producing formulations in various dosages forms (Tablets, Capsules and Oral Liquid) and therapeutic segments for many pharma companies</p>

								</div>	<!-- END TEXT BOX -->	


								<!-- TEXT BOX -->	
								<div class="txt-box mb-0">

									{{-- <!-- Title -->	
									<h5 class="s-24 w-700">Connect your data sources</h5>

									<!-- Text -->	
									<p>Tempor sapien sodales quaerat ipsum undo congue laoreet turpis neque auctor turpis 
										vitae dolor luctus placerat magna and ligula cursus purus an ipsum vitae suscipit 
										purus  
									</p> --}}

									<!-- List -->	
									<ul class="simple-list">

										<li class="list-item">
											<p class="mb-0">Wide Range of Quality Product</p>
										</li>

										<li class="list-item">
											<p class="mb-0">Timely Delivery</p>
										</li>
										<li class="list-item">
											<p class="mb-0">Lowest Rates</p>
										</li>

									</ul>

								</div>	<!-- END TEXT BOX -->	

	
							</div>
						</div>	<!-- END TEXT BLOCK -->	


						<!-- IMAGE BLOCK -->
						<div class="col-md-6 order-first order-md-2">
							<div class="img-block right-column wow fadeInLeft">
								<img class="img-fluid" src="{{ url('themes/images/third-party.png') }}" alt="content-image">
							</div>
						</div>


					</div>	<!-- END SECTION CONTENT (ROW) -->	


				</div>	   <!-- End container -->
			</section>	<!-- END TEXT CONTENT -->





			<!-- STATISTIC-1
			============================================= -->
			<div id="statistic-1" class="py-100 statistic-section division">
				<div class="container">


					<!-- STATISTIC-1 WRAPPER -->
					<div class="statistic-1-wrapper">
						<div class="row justify-content-md-center row-cols-1 row-cols-md-3">


							<!-- STATISTIC BLOCK #1 -->
							<div class="col">							
								<div id="sb-1-1" class="wow fadeInUp">
									<div class="statistic-block">	

										<!-- Digit -->
										<div class="statistic-block-digit text-center">
											<h2 class="s-46 statistic-number"><span class="count-element">180</span>+</h2>
										</div>

										<!-- Text -->
										<div class="statistic-block-txt color--grey">
											<p class="p-md">Product <br>Permissions</p>
										</div>

									</div>
								</div>								
							</div>	<!-- END STATISTIC BLOCK #1 -->


							<!-- STATISTIC BLOCK #2 -->
							<div class="col">							
								<div id="sb-1-2" class="wow fadeInUp">
									<div class="statistic-block">		

										<!-- Digit -->
										<div class="statistic-block-digit text-center">
											<h2 class="s-46 statistic-number"><span class="count-element">125</span>+</h2>
										</div>

										<!-- Text -->
										<div class="statistic-block-txt color--grey">
											<p class="p-md">Product <br>Brands</p>
										</div>

									</div>
								</div>								
							</div>	<!-- END STATISTIC BLOCK #2 -->


							<!-- STATISTIC BLOCK #3 -->
							<div class="col">							
								<div id="sb-1-3" class="wow fadeInUp">
									<div class="statistic-block">		

										<!-- Digit -->
										<div class="statistic-block-digit text-center">
											<h2 class="s-46 statistic-number">
												<span class="count-element">35</span>+
											</h2>
										</div>

										<!-- Text -->
										<div class="statistic-block-txt color--grey">
											<p class="p-md">Our  <br>Customers</p>
										</div>

									</div>
								</div>								
							</div>	<!-- END STATISTIC BLOCK #3 -->


						</div>  <!-- End row -->
					</div>	<!-- END STATISTIC-1 WRAPPER -->


				</div>	 <!-- End container -->		
			</div>	 <!-- END STATISTIC-1 -->	




			<!-- DIVIDER LINE -->
			<hr class="divider">	



			<!-- BRANDS-1
			============================================= -->
			<div id="brands-1" class="pt-80 pb-100 brands-section">
				<div class="container">	


					<!-- BRANDS TITLE -->
					<div class="row justify-content-center">	
						<div class="col-md-10 col-lg-9">
							<div class="brands-title mb-50">
								<h5 class="s-40">Our Products</h5>
							</div>
						</div>
					</div>


					<!-- BRANDS CAROUSEL -->				
					<div class="row">
						<div class="col text-center">	
							<div class="owl-carousel brands-carousel-5">

								@foreach ($products as $key => $banner)
									<div class="brand-logo">
										<a href="#"><img class="img-fluid" src="{{ CommonHelper::getHomeBanner($banner->image) }}" alt="brand-logo"></a>
									</div>
								@endforeach
								<!-- BRAND LOGO IMAGE -->
								

							</div>	
						</div>
					</div>  <!-- END BRANDS CAROUSEL -->


				</div>	<!-- End container -->
			</div>	<!-- END BRANDS-1 -->




			<!-- DIVIDER LINE -->
			<hr class="divider">




			<!-- FEATURES-2
			============================================= -->
			<section id="features-2" class="py-100 features-section division">
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row justify-content-center">	
						<div class="col-md-10 col-lg-9">
							<div class="section-title mb-80">	

								<!-- Title -->	
								<h2 class="s-50 w-700">The Complete Solutions</h2>	

								<!-- Text -->	
								{{-- <p class="s-21 color--grey">Ligula risus auctor tempus magna feugiat lacinia.</p> --}}
									
							</div>	
						</div>
					</div>


					<!-- FEATURES-2 WRAPPER -->
					<div class="fbox-wrapper text-center">
						<div class="row row-cols-1 row-cols-md-3">


							<!-- FEATURE BOX #1 -->
		 					<div class="col">
		 						<div class="fbox-2 fb-1 wow fadeInUp">

		 							<!-- Image -->
									<div class="fbox-img gr--whitesmoke h-175">
										<img class="img-fluid" src="{{ url('themes/images/medicine-small.png') }}" alt="feature-image">
									</div>

									<!-- Text -->
									<div class="fbox-txt">
										<h6 class="s-22 w-700">Tablets Manufacturing</h6>
										{{-- <p>Luctus egestas augue undo ultrice aliquam in lacus congue dapibus</p> --}}
									</div>

		 						</div>
		 					</div>	<!-- END FEATURE BOX #1 -->	


		 					<!-- FEATURE BOX #2 -->
		 					<div class="col">
		 						<div class="fbox-2 fb-2 wow fadeInUp">

		 							<!-- Image -->
									<div class="fbox-img gr--whitesmoke h-175">
										<img class="img-fluid" src="{{ url('themes/images/capsule-small.png') }}" alt="feature-image">
									</div>

									<!-- Text -->
									<div class="fbox-txt">
										<h6 class="s-22 w-700">Capsules Manufacturing</h6>
										{{-- <p>Tempor laoreet augue undo ultrice aliquam in lacusq luctus feugiat</p> --}}
									</div>

		 						</div>
		 					</div>	<!-- END FEATURE BOX #2 -->		


		 					<!-- FEATURE BOX #3 -->
		 					<div class="col">
		 						<div class="fbox-2 fb-3 wow fadeInUp">

		 							<!-- Image -->
									<div class="fbox-img gr--whitesmoke h-175">
										<img class="img-fluid" src="{{ url('themes/images/syrup-small.png') }}" alt="feature-image">
									</div>

									<!-- Text -->
									<div class="fbox-txt">
										<h6 class="s-22 w-700">Oral Liquid Manufacturing</h6>
										{{-- <p>Egestas luctus augue undo ultrice aliquam in lacus feugiat cursus</p> --}}
									</div>

		 						</div>
		 					</div>	<!-- END FEATURE BOX #3 -->	


						</div>  <!-- End row -->  
					</div>	<!-- END FEATURES-2 WRAPPER -->


				</div>     <!-- End container -->
			</section>	<!-- END FEATURES-2 -->




			<!-- DIVIDER LINE -->
			<hr class="divider">






			


@stop