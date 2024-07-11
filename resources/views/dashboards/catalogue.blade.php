@extends('layouts.app')
@section('content')
    <!--Inner Heading start here-->
    <div class="innerheading">
        <div class="container">
            <h1>About us</h1>
        </div>
    </div>
    <!--Inner Heading end here-->

    <!--Middle content start here-->
    <div class="whitecontarea">
        <div class="container">
            <div class="mainheading">
                <h2>Catalogue</h2>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <div class="cataloguebox"> <a class="fancybox" href="{{ asset('website/PSPSteelFlyer.pdf') }}"
                            target="_blank" data-fancybox-group="gallery" title=""><img
                                src="{{ asset('website/img/catalogue05.jpg') }}"></a> </div>
                </div>
                <div class="col-sm-3">
                    <div class="cataloguebox"> <a class="fancybox" href="{{ asset('website/img/catalogue01.jpg') }}"
                            data-fancybox-group="gallery" title=""><img
                                src="{{ asset('website/img/catalogue01.jpg') }}"></a> </div>
                </div>
                <div class="col-sm-3">
                    <div class="cataloguebox"> <a class="fancybox" href="{{ asset('website/img/catalogue02.jpg') }}"
                            data-fancybox-group="gallery" title=""><img
                                src="{{ asset('website/img/catalogue02.jpg') }}"></a> </div>
                </div>
                <div class="col-sm-3">
                    <div class="cataloguebox"> <a class="fancybox" href="{{ asset('website/img/catalogue03.jpg') }}"
                            data-fancybox-group="gallery" title=""><img
                                src="{{ asset('website/img/catalogue03.jpg') }}"></a> </div>
                </div>
                <div class="col-sm-3">
                    <div class="cataloguebox"> <a class="fancybox" href="{{ asset('website/img/catalogue04.jpg') }}"
                            data-fancybox-group="gallery" title=""><img
                                src="{{ asset('website/img/catalogue04.jpg') }}"></a> </div>
                </div>
            </div>
        </div>
    </div>
    <!--Middle content end here-->
@endsection
