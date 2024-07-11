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
    <div class="mainheading"><h2>High Velocity Oxygen Fuel Spraying ( HVOF )</h2></div> 
    <div class="row">
    <div class="col-sm-3"><img src="{{ asset('website/img/hvofs_small.jpg') }}" alt="HVOF" class="img-responsive center-block"></div>
    <div class="col-sm-9 rowmargin10">
    <div class="textblack14cont">In <u>HVOF Coating Process</u>, a mixture of gaseous or liquid fuel and oxygen is fed into a combustion chamber, where they are ignited and combusted continuously. The fuels can be gases (hydrogen, methane, propane, propylene, acetylene, natural gas, etc.) or liquids (kerosene, etc.). The jet velocity at the exit of the barrel (>1000 m/s) exceeds the speed of sound. A powder feed stock is injected into the gas stream, which accelerates the powder up to 800 m/s.</div>    
    </div>    
    </div>    
    </div>
    <div class="col-sm-5 rowmargin">
    <div class="innerimgbox"><img src="{{ asset('website/img/hvofs.jpg') }}" alt="HVOFS" class="img-responsive"></div>    
    </div>        
    </div>
    </div>    
    </div>
    <!--Middle content end here-->
@endsection
"