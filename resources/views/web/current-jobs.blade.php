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
                    <p>{!! $item->description !!}</p>
                </div>	
            </div>
        </div>	<!-- END SECTION TITLE -->	


    </div>
</section>

@stop