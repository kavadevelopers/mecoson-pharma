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
                    <p class="color--grey">Global presence in all our current and potential markets is an essential element of our business strategy. We are supplying our products in more than 30 countries worldwide and increasing the numbers day by day. Below is the list of some countries where we are supplying our products. </p>
                    <p class="color--grey">Sri Lanka, UAE, Kenya, Zimbabwe, Uganda, Ivoire Coast, Ghana, Nepal, Australia, Singapore, Malaysia, USA, Jamaica, Peru, Seychelles, Maldives, Saudi Arabia, Kuwait, Qatar, Iraq, Germany, Netherlands, Tanzania, Namibia, Botswana, Ethiopia, Etc.</p>     
                </div>	
            </div>
            <div class="col-md-12 col-lg-12">
                <img style="max-width: 100%;" src="{{ url('themes/web/img/world_blank.jpg') }}" />
            </div>
        </div>
    </div>
</section>



@stop