@extends('layouts.app')
@section('content')

<!--Inner Heading start here-->
<div class="innerheading">
    <div class="container"><h1>Processes</h1></div>    
    </div>  
<!--Middle content start here-->    
<div class="whitecontarea">
    <div class="container">
    <div class="row">
    <div class="col-sm-7">
    <div class="mainheading"><h2>Plasma Spraying Coating</h2></div> 
    <div class="row">
    <div class="col-sm-3"><img src="{{ asset('website/img/powder_flame_spray_small.jpg') }}" class="img-responsive center-block"></div>
    <div class="col-sm-9 rowmargin10">
    <div class="textblack14cont">In <u>plasma spray coating</u> process, the material to be deposited typically as a powder, is introduced into the plasma jet. In the jet, where the temperature is in the order of 10,000 K, the material is melted and propelled towards a substrate. There, the molten droplets flatten, rapidly solidify and form a deposit. Commonly, the deposits remain adherent to the substrate as coatings;</div>    
    </div>    
    </div>    
    </div>
    <div class="col-sm-5 rowmargin">
    <div class="innerimgbox"><img src="{{ asset('website/img/plasma_sparying.jpg') }}" class="img-responsive"></div>    
    </div>        
    </div>
    </div>    
    </div>
    <!--Middle content end here-->
    @endsection

 