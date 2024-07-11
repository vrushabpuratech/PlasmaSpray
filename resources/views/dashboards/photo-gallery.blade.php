@extends('layouts.app')
@section('content')

<!--fancyBox main JS and CSS files start-->
<script type="text/javascript" src="{{ asset('dist/fancybox/jquery.fancybox.js?v=2.1.5')  }}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('dist/fancybox/jquery.fancybox.css?v=2.1.5')  }}" media="screen" />
<script type="text/javascript">
    $(document).ready(function() {
        /*
         *  Simple image gallery. Uses default settings
         */

        $('.fancybox').fancybox();

        /*
         *  Different effects
         */

        // Change title type, overlay closing speed
        $(".fancybox-effects-a").fancybox({
            helpers: {
                title : {
                    type : 'outside'
                },
                overlay : {
                    speedOut : 0
                }
            }
        });

        // Disable opening and closing animations, change title type
        $(".fancybox-effects-b").fancybox({
            openEffect  : 'none',
            closeEffect : 'none',

            helpers : {
                title : {
                    type : 'over'
                }
            }
        });

        // Set custom style, close if clicked, change title type and overlay color
        $(".fancybox-effects-c").fancybox({
            wrapCSS    : 'fancybox-custom',
            closeClick : true,

            openEffect : 'none',

            helpers : {
                title : {
                    type : 'inside'
                },
                overlay : {
                    css : {
                        'background' : 'rgba(238,238,238,0.85)'
                    }
                }
            }
        });

        // Remove padding, set opening and closing animations, close if clicked and disable overlay
        $(".fancybox-effects-d").fancybox({
            padding: 0,

            openEffect : 'elastic',
            openSpeed  : 150,

            closeEffect : 'elastic',
            closeSpeed  : 150,

            closeClick : true,

            helpers : {
                overlay : null
            }
        });

        /*
         *  Button helper. Disable animations, hide close button, change title type and content
         */

        $('.fancybox-buttons').fancybox({
            openEffect  : 'none',
            closeEffect : 'none',

            prevEffect : 'none',
            nextEffect : 'none',

            closeBtn  : false,

            helpers : {
                title : {
                    type : 'inside'
                },
                buttons : {}
            },

            afterLoad : function() {
                this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
            }
        });


        /*
         *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
         */

        $('.fancybox-thumbs').fancybox({
            prevEffect : 'none',
            nextEffect : 'none',

            closeBtn  : false,
            arrows    : false,
            nextClick : true,

            helpers : {
                thumbs : {
                    width  : 50,
                    height : 50
                }
            }
        });

        /*
         *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
        */
        $('.fancybox-media')
            .attr('rel', 'media-gallery')
            .fancybox({
                openEffect : 'none',
                closeEffect : 'none',
                prevEffect : 'none',
                nextEffect : 'none',

                arrows : false,
                helpers : {
                    media : {},
                    buttons : {}
                }
            });

        /*
         *  Open manually
         */

        $("#fancybox-manual-a").click(function() {
            $.fancybox.open('1_b.jpg');
        });

        $("#fancybox-manual-b").click(function() {
            $.fancybox.open({
                href : 'iframe.html',
                type : 'iframe',
                padding : 5
            });
        });

        $("#fancybox-manual-c").click(function() {
            $.fancybox.open([
                {
                    href : '1_b.jpg',
                    title : 'My title'
                }, {
                    href : '2_b.jpg',
                    title : '2nd title'
                }, {
                    href : '3_b.jpg'
                }
            ], {
                helpers : {
                    thumbs : {
                        width: 75,
                        height: 50
                    }
                }
            });
        });


    });
</script>
<!--fancyBox main JS and CSS files end-->  

    <!--Inner Heading start here-->
    <div class="innerheading">
        <div class="container">
            <h1>Industry</h1>
        </div>
    </div>
    <!--Inner Heading end here-->

    <!--Middle content start here-->
    <div class="whitecontarea">
        <div class="container">
            <div class="mainheading">
                <h2>Photo Gallery</h2>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <div class="photogallerybox">
                        <a class="fancybox" href="{{ asset('website/img/pg001.jpg') }}" data-fancybox-group="gallery"
                            title="Gate Valve (petrochemical)"><img src="{{ asset('website/img/pg001.jpg') }}"></a>
                        <div class="photogalleryheading">
                            <h6>Gate Valve (petrochemical)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="photogallerybox">
                        <a class="fancybox" href="{{ asset('website/img/pg002.jpg') }}" data-fancybox-group="gallery"
                            title="Segments (gas power station)"><img src="{{ asset('website/img/pg002.jpg') }}"></a>
                        <div class="photogalleryheading">
                            <h6>Segments (gas power station)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="photogallerybox">
                        <a class="fancybox" href="{{ asset('website/img/pg003.jpg') }}" data-fancybox-group="gallery"
                            title="Turbine rotor (power generation)"><img src="{{ asset('website/img/pg003.jpg') }}"></a>
                        <div class="photogalleryheading">
                            <h6>Turbine rotor (power generation)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="photogallerybox">
                        <a class="fancybox" href="{{ asset('website/img/pg004.jpg') }}" data-fancybox-group="gallery"
                            title="Textile Component( textile)"><img src="{{ asset('website/img/pg004.jpg') }}"></a>
                        <div class="photogalleryheading">
                            <h6>Textile Component( textile)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="photogallerybox">
                        <a class="fancybox" href="{{ asset('website/img/pg005.jpg') }}" data-fancybox-group="gallery"
                            title="Metal Seated balls with Seats (fertilizers, petrochemicals)"><img
                                src="{{ asset('website/img/pg005.jpg') }}"></a>
                        <div class="photogalleryheading">
                            <h6>Metal Seated balls with Seats (fertilizers, petrochemicals)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="photogallerybox">
                        <a class="fancybox" href="{{ asset('website/img/pg006.jpg') }}" data-fancybox-group="gallery"
                            title="Impeller (pumps)"><img src="{{ asset('website/img/pg006.jpg') }}"></a>
                        <div class="photogalleryheading">
                            <h6>Impeller (pumps)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="photogallerybox">
                        <a class="fancybox" href="{{ asset('website/img/pg007.jpg') }}" data-fancybox-group="gallery"
                            title="Piston rod"><img src="{{ asset('website/img/pg007.jpg') }}"></a>
                        <div class="photogalleryheading">
                            <h6>Piston rod</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="photogallerybox">
                        <a class="fancybox" href="{{ asset('website/img/pg008.jpg') }}" data-fancybox-group="gallery"
                            title="Pump Sleeves (pump)"><img src="{{ asset('website/img/pg008.jpg') }}"></a>
                        <div class="photogalleryheading">
                            <h6>Pump Sleeves (pump)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="photogallerybox">
                        <a class="fancybox" href="{{ asset('website/img/pg009.jpg') }}" data-fancybox-group="gallery"
                            title="Aviation Component"><img src="{{ asset('website/img/pg009.jpg') }}"></a>
                        <div class="photogalleryheading">
                            <h6>Aviation Component</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="photogallerybox">
                        <a class="fancybox" href="{{ asset('website/img/pg010.jpg') }}" data-fancybox-group="gallery"
                            title="Bridle roll (steel industry)"><img src="{{ asset('website/img/pg010.jpg') }}"></a>
                        <div class="photogalleryheading">
                            <h6>Bridle roll (steel industry)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="photogallerybox">
                        <a class="fancybox" href="{{ asset('website/img/pg011.jpg') }}" data-fancybox-group="gallery"
                            title="Pan"><img src="{{ asset('website/img/pg011.jpg') }}"></a>
                        <div class="photogalleryheading">
                            <h6>Pan</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="photogallerybox">
                        <a class="fancybox" href="{{ asset('website/img/pg012.jpg') }}" data-fancybox-group="gallery"
                            title="Godets (textile)"><img src="{{ asset('website/img/pg012.jpg') }}"></a>
                        <div class="photogalleryheading">
                            <h6>Godets (textile)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="photogallerybox">
                        <a class="fancybox" href="{{ asset('website/img/pg013.jpg') }}" data-fancybox-group="gallery"
                            title="Step Cone Pulley (wire drawing)"><img src="{{ asset('website/img/pg013.jpg') }}"></a>
                        <div class="photogalleryheading">
                            <h6>Step Cone Pulley (wire drawing)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="photogallerybox">
                        <a class="fancybox" href="{{ asset('website/img/pg014.jpg') }}" data-fancybox-group="gallery"
                            title="Boiler Tubes (studded and non studded)"><img
                                src="{{ asset('website/img/pg014.jpg') }}"></a>
                        <div class="photogalleryheading">
                            <h6>Boiler Tubes (studded and non studded)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="photogallerybox">
                        <a class="fancybox" href="{{ asset('website/img/pg015.jpg') }}" data-fancybox-group="gallery"
                            title="Rewinder Rolls (paper and pulp)"><img src="{{ asset('website/img/pg015.jpg') }}"></a>
                        <div class="photogalleryheading">
                            <h6>Rewinder Rolls (paper and pulp)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="photogallerybox">
                        <a class="fancybox" href="{{ asset('website/img/pg016.jpg') }}" data-fancybox-group="gallery"
                            title="Suspension Body (sugar industry)"><img src="{{ asset('website/img/pg016.jpg') }}"></a>
                        <div class="photogalleryheading">
                            <h6>Suspension Body (sugar industry)</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Middle content end here-->
@endsection
