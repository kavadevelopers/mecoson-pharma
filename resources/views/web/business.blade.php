@extends('web.layouts.main')
@section('content')

<section id="contacts-1" class="pb-50 inner-page-hero contacts-section division">
    <div class="container">
        <div class="row justify-content-center">
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
        </div>
        <!-- END CONTACT FORM -->
    </div>
    <!-- End container -->	
</section>



@stop