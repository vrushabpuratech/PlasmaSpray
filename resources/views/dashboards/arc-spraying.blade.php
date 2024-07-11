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
    <div class="mainheading"><h2>ARC Spraying</h2></div> 
    <div class="row">
    <div class="col-sm-3"><img src="{{ asset('dist/img/powder_flame_spray_small.jpg') }}" alt="Powder Flame Spray" class="img-responsive center-block"></div>
    <div class="col-sm-9 rowmargin10">
    <div class="textblack14cont">In Arc spraying two spraying wires of the same or different kind are melted in arc and are sprayed with atomizing gas i.e. compressed air on to the prepared surface. These metal wires are fed independently into the spray gun and are then charged to form an arc between them. The heat from this arc melts the incoming wire, which is then entrained in air jet from the gun. This entrained molten feedstock is then deposited onto a substrate. This process is commonly used for metallic, heavy coatings.Arc spraying is a high-performance spraying method with the use of wire. You can only spray electrically conductive materials. Use of nitrogen or argon as an atomizing gas will prevent oxidization of the materials to a large extent. </div>    
    </div>    
    </div>    
    </div>
    <div class="col-sm-5 rowmargin">
    <div class="innerimgbox"><img src="{{ asset('dist/img/arc_spraying.jpg') }}" alt="Arc Spraying" class="img-responsive"></div>    
    </div>        
    </div>
    </div>    
    </div>
    <!--Middle content end here-->
    

@endsection  