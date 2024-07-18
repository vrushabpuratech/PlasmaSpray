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
    <div class="mainheading"><h2>Plasma Transferred ARC</h2></div> 
    <div class="row">
    <div class="col-sm-2"><img src="{{ asset('dist/img/plasma_trans_arc_small.jpg') }}" class="img-responsive center-block"></div>
    <div class="col-sm-10 rowmargin10">
    <div class="textblack14cont">Coating material in powder form is fed into a heat source created by ionization of a gas in an electric arc between two electrodes. The substrate and coating material is locally melted to form a metallurgically bonded coating. The coating has very low dilution compared to conventional welding.</div>    
    </div>    
    </div>    
    </div>
    <div class="col-sm-5 rowmargin">
    <div class="innerimgbox"><img src="{{ asset('dist/img/plasma_trans_arc.jpg') }}" class="img-responsive"></div>    
    </div>        
    </div>
    </div>    
    </div>
    <!--Middle content end here-->
    @endsection

    
    