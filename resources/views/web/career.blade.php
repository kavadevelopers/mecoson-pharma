@extends('web.layouts.main')
@section('content')


<section class="ct-01 content-section division pb-100 inner-page-hero">
    <div class="container">


        <!-- SECTION CONTENT (ROW) -->	
        <div class="row d-flex align-items-center">


            <!-- TEXT BLOCK -->	
            <div class="col-md-6 order-last order-md-2">
                <div class="txt-block left-column wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                    <!-- Title -->	
                    <h2 class="s-46 w-700">Let's Grow Together</h2>

                    <!-- Text -->	
                    <p>Empower yourself with the multifaceted work environment and get the chance to be a part of a workforce. Our employees are our assets and we are always in need of good employees who are looking for challenging & worthwhile career.</p>
                    <p>At Mecoson Pharma, we seek to discover and champion the latest, most promising advancements against the world’s greatest challenges in international business.</p>

                    <a href="{{ url('current-jobs') }}" class="btn r-04 btn--theme">We're Hiring</a>

                </div>
            </div>	<!-- END TEXT BLOCK -->	


            <!-- IMAGE BLOCK -->
            <div class="col-md-6 order-first order-md-2">
                <div class="img-block right-column wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                    <img class="img-fluid" src="{{ url('themes/web/img/career-banner.jpg') }}" alt="content-image">
                </div>
            </div>


        </div>	<!-- END SECTION CONTENT (ROW) -->	


    </div>	   <!-- End container -->
</section>


@stop