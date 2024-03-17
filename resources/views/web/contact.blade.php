@extends('web.layouts.main')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<section id="contacts-1" class="gr--whitesmoke pb-50 inner-page-hero contacts-section division">
    <div class="container">
        <!-- SECTION TITLE -->	
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
                <div class="section-title text-center mb-80">
                    <!-- Title -->	
                    <h2 class="s-52 w-700">Contact Us</h2>
                </div>
            </div>
        </div>
        <!-- CONTACT FORM -->
        <div class="row justify-content-center">
            <div class="col">
                <div id="rw-2-1" class="review-2 bg--white-100 block-shadow r-08">

                    <!-- Quote Icon -->
                    <div class="ico-65 icon-kava text-center mb-10">
                        <span class="fa fa-phone"></span>
                    </div>

                    <!-- Text -->
                    <div class="text-center">
                        <h5 class="text-center">Sales</h5>
                        <p class="text-center" style="margin-bottom: 0;"><a href="tel:{{ CommonHelper::setting('pcd_phone') }}">{{ CommonHelper::setting('pcd_phone') }}</a></p>
                        <p class="text-center"><a href="mailto:{{ CommonHelper::setting('pcd_email') }}">{{ CommonHelper::setting('pcd_email') }}</a></p>
                    </div>
                    <div class="text-center">
                        <h5 class="text-center">Account & Logistics</h5>
                        <p class="text-center" style="margin-bottom: 0;"><a href="tel:{{ CommonHelper::setting('acc_phone') }}">{{ CommonHelper::setting('acc_phone') }}</a></p>
                        <p class="text-center"><a href="mailto:{{ CommonHelper::setting('acc_email') }}">{{ CommonHelper::setting('acc_email') }}</a></p>
                    </div>

                </div>
            </div>
            <div class="col">
                <div id="rw-2-1" class="review-2 bg--white-100 block-shadow r-08">

                    <!-- Quote Icon -->
                    <div class="ico-65 icon-kava text-center mb-10">
                        <span class="fa fa-map-marker"></span>
                    </div>

                    <!-- Text -->
                    <div class="text-center">
                        <p class="text-center" style="margin-bottom: 0;">{!! nl2br(CommonHelper::setting('web_address')) !!}</p>
                    </div>
                    <div class="text-center">
                        <h5 class="text-center"></h5>
                        <p class="text-center" style="margin-bottom: 0;"><a href="tel:{{ CommonHelper::setting('web_mobile') }}">{{ CommonHelper::setting('web_mobile') }}</a></p>
                        <p class="text-center" style="margin-bottom: 0;"><a href="tel:{{ CommonHelper::setting('web_mobile2') }}">{{ CommonHelper::setting('web_mobile2') }}</a></p>
                        <p class="text-center"><a href="mailto:{{ CommonHelper::setting('web_email') }}">{{ CommonHelper::setting('web_email') }}</a></p>
                    </div>

                </div>
            </div>

            <div class="col-md-12">
                <iframe src="{{ CommonHelper::setting('web_google_map_url') }}" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        <!-- END CONTACT FORM -->
    </div>
    <!-- End container -->	
</section>

<section class="ct-01 content-section division pb-40">
    <div class="container">


        <!-- SECTION CONTENT (ROW) -->	
        <div class="row d-flex align-items-center">


            <!-- TEXT BLOCK -->	
            <div class="col-md-12 order-last order-md-2">
                <div class="txt-block left-column wow fadeInRight">


                    <!-- TEXT BOX -->	
                    <div class="txt-box">

                        <!-- Title -->	
                        <h3 class="s-24 w-700">Drop Us A Message</h3>

                        <form method="post" action="" class="row contact-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Your Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                                    </div>
                                </div>
        
                                <div class="col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Your Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                                    </div>
                                </div>
        
                                <div class="col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Your Phone</label>
                                        <input type="text" name="phone" maxlength="10" minlength="10" class="form-control numbers" placeholder="Phone" required>
                                    </div>
                                </div>
        
                                <div class="col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                                    </div>
                                </div>
        
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Your Message</label>
                                        <textarea name="message" class="form-control" cols="30" rows="8" placeholder="Message" required></textarea>
                                    </div>
                                </div>
        
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="btn r-04 btn--theme">
                                        Send Message
                                    </button>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                        
                    </div>	<!-- END TEXT BOX -->	

                </div>
            </div>


        </div>	<!-- END SECTION CONTENT (ROW) -->	


    </div>	   <!-- End container -->
</section>

@stop