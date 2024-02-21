@extends('web.layouts.main')
@section('content')

<section id="pricing-1" class="gr--whitesmoke pb-40 inner-page-hero pricing-section">
    <div class="container">


        <!-- SECTION TITLE -->	
        <div class="row justify-content-center">	
            <div class="col-md-10 col-lg-8">
                <div class="section-title mb-70">	

                    <!-- Title -->	
                    <h4 class="s-40 w-700">{{ $_title }}</h4>

                </div>	
            </div>
        </div>	<!-- END SECTION TITLE -->	


        <!-- PRICING TABLES -->
        <div class="pricing-1-wrapper">
            <div class="row products_page">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="category b-gray">
                        <h3 class="t-blue fonarto text-center m-0">Category</h3>
                        <ul>
                            <li class="active">
                                <a href="{{ url('products') }}">All</a>
                            </li>
    
                            @foreach ($categories as $category)
                                <li class=""><a href="{{ url('category/'.$category->slug) }}">{{ $category->name }}</a></li>    
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="inline-block-100 float-100">
                        <div class="form-group">
                            <input type="text" id="searchProd" class="form-control" placeholder="Search product" autocomplete="off">
                        </div>
                    </div>
                    <div class="inline-block-100 float-100" style="margin-top: 20px;">
                        <ul class="list" id="prodList">
                            @foreach ($list->get() as $product)
                                <li><div class="text"><a href="{{ url('product/'.$product->slug) }}">{{ $product->name }}</a></div></li>
                            @endforeach
                            <li style="display:none;" id="nodata"><div class="text">No products found</div></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>	<!-- PRICING TABLES -->

    
    </div>	   <!-- End container -->
</section>


<script>
    $(function(){
        $("#searchProd").on("keyup", function() {
            var value = this.value.toLowerCase().trim();
            $("#prodList li").show().filter(function() {
                return $(this).text().toLowerCase().trim().indexOf(value) == -1;
            }).hide();

            if($('#prodList li:not([style*="display: none"])').length == 0){
                $('#nodata').show();
            }else{
                $('#nodata').hide();
            }
        });
    })
</script>
@stop