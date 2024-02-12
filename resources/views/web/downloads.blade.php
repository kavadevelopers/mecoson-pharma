@extends('web.layouts.main')
@section('content')
<section id="download-1" class="gr--whitesmoke inner-page-hero download-section division">
    <div class="container">
        <div class="row justify-content-center">	
            <div class="col-lg-11 col-xl-10">
                <div class="inner-page-title">	
                    <h2 class="s-52 w-700">{{ $_title }}</h2>
                </div>	
            </div>
        </div>
        <div class="row justify-content-center">	
            <div class="col-lg-11 col-xl-10">

                <!-- VERSION RELEASE -->
                <div class="version-release">

                    @foreach ($list as $item)
                    <div class="release-data">
                        <!-- Version Data -->
                        <div class="rel">
                            <span class="version-data">{{ $item->item }}</span>
                            <span class="release-date"><span></span></span>
                            <a href="{{ url('uploads/cms/downloads/'.$item->value) }}" download="{{ $item->item.'.'.explode('.',$item->value)[2] }}" class="btn btn--tra-grey hover--theme ico-20 ico-left release-download">
                                <span class="flaticon-down-arrow-1"></span> Download
                            </a>
                        </div>

                    </div>
                    @endforeach
                </div>

            </div>
        </div>    <!-- End row -->
    </div>     <!-- End container -->	
</section>

@stop