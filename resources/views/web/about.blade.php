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
                        <p>Mecoson Pharmaceuticals Private Limited is one of the fastest growing pharmaceutical company located at Pipodara, Surat, India. The company engaged in manufacturing wide range of pharmaceutical formulation in forms Tablets, Capsules and Oral Liquid. We have all the major utilities to produce highest quality products.</p>
                        <p>Accumulated experience in marketing & manufacturing of pharmaceuticals products, innovative approach of managing &optimizing business processes allowed us to become actively present in domestic &international market. We offer a highest quality products, most competitive price & timely delivery to our valuable customers globally.</p>
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


@stop