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
                    <p class="color--grey">In the context of an increasingly challenging healthcare environment, we are reinforcing our culture, boosting our skills and building a diverse workforce. Quality in everything we do is integral to all our working practices. It is critical to the success of our business and our long term sustainability and profitability.</p>
                    <p class="color--grey">Products we supply are in compliance with global standards and which is globally approved and acceptable. Also, Mecoson Labs follows the standards in manufacturing which are given by FDA Approved facilities. We understand the need for high-quality drugs at convinient price and this is the reason, we are committed to fulfilling this demand with our quality products.</p> 
                    <p class="color--grey">Our products are made in well established and certified facilities having quality certificates like</p>
                </div>	
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="about-content">
                    <ul>
                        <li><span class="flaticon-check"></span> FDCA License</li>
                        <li><span class="flaticon-check"></span> WHO-GMP</li>
                        <li><span class="flaticon-check"></span> GLP</li>
                        <li><span class="flaticon-check"></span> ISO</li>
                        <li><span class="flaticon-check"></span> FSSAI</li>
                        <li><span class="flaticon-check"></span> HALAL</li>
                        <li><span class="flaticon-check"></span> AYUSH</li>
                        <li><span class="flaticon-check"></span> CE</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <img src="{{ url('themes/web/img/about-quality.png') }}" style="max-width: 100%"/>
            </div>
        </div>
        
    </div>
</section>


@stop