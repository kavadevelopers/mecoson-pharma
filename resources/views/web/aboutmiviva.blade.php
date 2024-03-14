@extends('web.layouts.main')
@section('content')

<section class="ct-01 content-section division inner-page-hero pb-40">
    <div class="container">
        <div class="row d-flex align-items-center">


            <!-- TEXT BLOCK -->	
            <div class="col-md-6 order-last order-md-2">
                <div class="txt-block left-column wow fadeInRight">


                    <!-- TEXT BOX -->	
                    <div class="txt-box">

                        <!-- Title -->	
                        <h3 class="s-24 w-700">Our Vision</h3>

                        <!-- Text -->	
                        <p>To become one of the top pharmaceutical company providing highest quality medical and healthcare products and services and also committed to serve humanity, honouring social and environmental responsibilities.</p>
                    </div>	<!-- END TEXT BOX -->	

                </div>
            </div>	<!-- END TEXT BLOCK -->	


            <!-- IMAGE BLOCK -->
            <div class="col-md-6 order-first order-md-2">
                <div class="img-block right-column wow fadeInLeft">
                    <img class="img-fluid" src="{{ url('themes/images/vision.jpg') }}" alt="content-image">
                </div>
            </div>


        </div>
    </div>	   <!-- End container -->
</section>

<section class="ct-01 content-section division pb-40">
    <div class="container">


        <!-- SECTION CONTENT (ROW) -->	
        <div class="row d-flex align-items-center">


            <!-- TEXT BLOCK -->	
            <div class="col-md-6 order-last order-md-2">
                <div class="img-block wow fadeInRight">
                    <img class="img-fluid" src="{{ url('themes/images/mission.jpg') }}" alt="content-image">
                </div>
            </div>
            <div class="col-md-6 order-last order-md-2">
                <div class="txt-block left-column right-column wow fadeInLeft">


                    <!-- TEXT BOX -->	
                    <div class="txt-box">

                        <!-- Title -->	
                        <h3 class="s-24 w-700">Our Mission</h3>

                        <!-- Text -->	
                        <p>To preserve and improve human health by consistently delivering high quality, safe and effective pharmaceutical products and services that meet customer expectations across the globe through good manufacturing practices, state of the art technology, competent workforce and efficient management.</p>
                    </div>	<!-- END TEXT BOX -->	

                </div>
            </div>

        </div>	<!-- END SECTION CONTENT (ROW) -->	


    </div>	   <!-- End container -->
</section>




@stop