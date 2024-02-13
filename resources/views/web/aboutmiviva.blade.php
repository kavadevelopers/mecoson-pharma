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
            {{-- <div class="col-md-12 col-lg-12">
                <div>
                    <p class="color--grey">Mecoson has been started as a local pharmaceutical trading company and through the years, our business has developed from a trading company to global company with the help of our visionary leaders and expert team. The company is having privilege of availing his valuable guidance from time to time.</p>
                    <p class="color--grey">Step by step the company has progressed very fast and expanded its business from trading and marketing to manufacturing and exporting of pharmaceutical products and become one of the leading pharmaceutical company in India and made its name in Medical and Healthcare Sector. </p>     
                </div>	
            </div> --}}
        </div>	<!-- END SECTION TITLE -->	

        
        <div class="pricing-1-wrapper">
            <div class="row row-cols-2 row-cols-md-12">


                
                <div class="col">
                    <div id="pt-1-1" class="p-table pricing-1-table bg--white-100 block-shadow r-12 wow fadeInUp">
                        <div class="pricing-table-header">
                            <h5 class="s-24 w-700">Our Vision</h5>
                            <div class="price">								
                                <p class="color--grey justify-text">To become one of the top pharmaceutical company providing highest quality medical and healthcare products and services and also committed to serve humanity, honouring social and environmental responsibilities.<br><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div id="pt-1-1" class="p-table pricing-1-table bg--white-100 block-shadow r-12 wow fadeInUp">
                        <div class="pricing-table-header">
                            <h5 class="s-24 w-700">Our Mission</h5>
                            <div class="price">								
                                <p class="color--grey justify-text">To preserve and improve human health by consistently delivering high quality, safe and effective pharmaceutical products and services that meet customer expectations across the globe through good manufacturing practices, state of the art technology, competent workforce and efficient management.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    
    </div>	   <!-- End container -->
</section>



@stop