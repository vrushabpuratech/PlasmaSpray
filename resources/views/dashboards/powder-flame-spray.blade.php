@extends('layouts.app')
@section('content')

<!--Inner Heading start here-->
<div class="innerheading">
    <div class="container"><h1>Processes</h1></div>    
    </div>  
    <!--Inner Heading end here-->
        
    <!--Middle content start here-->    
    <div class="whitecontarea">
    <div class="container">
    <div class="row">
    <div class="col-sm-7">
    <div class="mainheading"><h2>Powder Flame Spraying</h2></div> 
    <div class="row">
    <div class="col-sm-3"><img src="{{ asset('dist/img/powder_flame_spray_small.jpg') }}" class="img-responsive center-block"></div>
    <div class="col-sm-9 rowmargin10">
    <div class="textblack14cont">In powder flame spraying, the spraying consumables in powder form are melted in an acetylene-oxygen flame and are accelerated on to the prepared surface by means of expanding combustion. You distinguish the powder between self fluxing and self bonding spray powder. This melting process is mostly carried out with the suitable acetylene-oxygen torch.</div>    
    </div>    
    </div>    
    </div>
    <div class="col-sm-5 rowmargin">
    <div class="innerimgbox"><img src="{{ asset('dist/img/powder_flame_spray.jpg') }}" class="img-responsive"></div>    
    </div>        
    </div>
    </div>    
    </div>
    <!--Middle content end here-->
    


@endsection