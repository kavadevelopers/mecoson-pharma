@extends('web.layouts.main')
@section('content')

<section id="pricing-1" class="gr--whitesmoke pb-40 inner-page-hero pricing-section">
    <div class="container">


        <!-- SECTION TITLE -->	
        <div class="row justify-content-center">	
            <div class="col-md-10 col-lg-8">
                <div class="section-title mb-70">	

                    <!-- Title -->	
                    <h2 class="s-52 w-700">{{ $_title }}</h2>
                    
                </div>
            </div>
            <div class="col-md-12 col-lg-12">
                <div>
                    <p class="color--grey">Mecoson has been started as a local pharmaceutical trading company and through the years, our business has developed from a trading company to global company with the help of our visionary leaders and expert team. The company is having privilege of availing his valuable guidance from time to time.</p>
                    <p class="color--grey">Step by step the company has progressed very fast and expanded its business from trading and marketing to manufacturing and exporting of pharmaceutical products and become one of the leading pharmaceutical company in India and made its name in Medical and Healthcare Sector. </p>     
                </div>	
            </div>
            {{-- <div class="col-md-12 col-lg-12">
                <img style="max-width: 100%;" src="{{ url('themes/web/img/world_blank.jpg') }}" />
            </div> --}}
        </div>
    </div>
</section>

<section id="faqs-3" class="gr--whitesmoke pt-100 faqs-section">				
    <div class="container">


        <!-- SECTION TITLE -->	
        <div class="row justify-content-center">	
            <div class="col-md-10 col-lg-9">
                <div class="section-title mb-70">	

                    <!-- Title -->	
                    <h2 class="s-52 w-700">Milestones Reached</h2>	

                </div>	
            </div>
        </div>


        <!-- FAQs-3 QUESTIONS -->	
        <div class="faqs-3-questions">
            <div class="row">

                <div class="about-time-line">
                    <ul style="margin-top: 50px;">
                        <li style="--accent-color:#41516C">
                            <div class="date">2010</div>
                            <div class="title">Wholesale Trading of Pharma Products</div>
                        </li>
                        <li style="--accent-color:#FBCA3E">
                            <div class="date">2014</div>
                            <div class="title">Established Marketing Company</div>
                        </li>
                        <li style="--accent-color:#E24A68">
                            <div class="date">2017</div>
                            <div class="title">Started Export of Pharma Products</div>
                        </li>
                        <li style="--accent-color:#1B5F8C">
                            <div class="date">2021</div>
                            <div class="title">Manufacturing Unit of Tablet, Capsule & Syrup</div>
                        </li>
                    </ul>
                </div>

            </div>  <!-- End row -->	
        </div>	<!-- END FAQs-3 QUESTIONS -->	


    </div>	   <!-- End container -->		
</section>

@stop