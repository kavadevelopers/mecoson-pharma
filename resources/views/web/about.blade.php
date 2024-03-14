@extends('web.layouts.main')
@section('content')

<section class="ct-01 content-section division inner-page-hero pb-40">
    <div class="container">


        <!-- SECTION CONTENT (ROW) -->	
        <div class="row d-flex align-items-center">


            <!-- TEXT BLOCK -->	
            <div class="col-md-6 order-last order-md-2">
                <div class="txt-block left-column wow fadeInRight">


                    <!-- TEXT BOX -->	
                    <div class="txt-box">

                        <!-- Title -->	
                        <h3 class="s-24 w-700">{{ $_title }}</h3>

                        <!-- Text -->	
                        <p>Mecoson Pharmaceuticals Private Limited is one of the fastest growing pharmaceutical company located at Pipodara, Surat, India. The company engaged in manufacturing wide range of pharmaceutical formulation in forms Tablets, Capsules and Oral Liquid and having all the major utilities to produce highest quality of pharmaceutical products.</p>
                        <p>We are equipped with latest machines and facilities, granulation line, compression machines, costing machines, automatic capsule filling machine and fully automatic syrup manufacturing line to produce highest quality products with maximum output per day.</p>
                        <p>We are committed to the highest level of quality and so, we have independent quality control laboratory. The laboratory is equipped with latest testing and analyzing machines and instruments to tests raw materials, in process samples, finished products and packing materials.</p>
                    </div>	<!-- END TEXT BOX -->	

                </div>
            </div>	<!-- END TEXT BLOCK -->	


            <!-- IMAGE BLOCK -->
            <div class="col-md-6 order-first order-md-2">
                <div class="img-block right-column wow fadeInLeft">
                    <img class="img-fluid" src="{{ url('themes/images/about.jpg') }}" alt="content-image">
                </div>
            </div>


        </div>	<!-- END SECTION CONTENT (ROW) -->	


    </div>	   <!-- End container -->
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
                        {{-- <h3 class="s-24 w-700">ENVIRONMENT, HEALTH AND SAFETY</h3> --}}

                        <!-- Text -->	
                        <p>At the core of our operations is an unwavering commitment to quality. Following the current Good Manufacturing Practices (cGMP) we have implemented strict policies for Quality Control (QC) and Quality Assurance (QA) processes. Continuous improvement initiatives across products, processes, and skills ensure our offerings evolve to meet changing client needs.</p>
                        <p>Accumulated experience in marketing & manufacturing of pharmaceuticals products, innovative approach of managing &optimizing business processes allowed us to become actively present in domestic & international market. We offer a highest quality products, most competitive price & timely delivery to our valuable customers globally.</p>
                        
                    </div>	<!-- END TEXT BOX -->	

                </div>
            </div>


        </div>	<!-- END SECTION CONTENT (ROW) -->	


    </div>	   <!-- End container -->
</section>

@stop