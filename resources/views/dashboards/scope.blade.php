@extends('layouts.app')
@section('content')
<!-- Accordian css and script start--> 
<link href="{{ asset('dist/accordion/accordian.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ asset('dist/accordion/script.js') }}" type="text/javascript"></script>
<!-- Accordian css and script start-->  
<!--Inner Heading start here-->
<div class="innerheading">
    <div class="container"><h1>Scope of Services</h1></div>    
    </div>  
    <!--Inner Heading end here-->
        
    <!--We provide services start here-->    
    <div class="whitecontarea">
    <div class="container">
    <div class="row">
    <div class="col-sm-6">
    <div class="row">
    <div class="col-md-10">
    <div class="mainheading"><h2>We provide services of Thermal spray coating on machine parts or components. </h2></div>  
    <div class="textblack14cont">It involves the use of a torch to heat a material, in powder or wire form, to a molten or near-molten state, and the use of a gas to propel the material to the target substrate, creating a completely new surface. The coating material may be a single element, alloy or compound with unique physical properties that are, in most cases, achievable only through the thermal spray process.</div>    
    </div>    
    <div class="col-md-2"></div>    
    </div>        
    </div>
    
    <div class="col-sm-6 rowmargin"><img src="{{ asset('website/img/servicesimg.jpg') }}" class="img-responsive" alt="Typical problem and coating choices"></div>    
    </div>
    <div class="mainheading topmargin30"><h4>What are the typical problems and coating choices available to solve them?</h4></div>  
    <div class="row">
    <div class="col-sm-6"><img src="{{ asset('website/img/benefits_diagram01.jpg') }}" class="img-responsive" alt="Problems faced by Industry">
    <div class="textred13bold topmargin5"><em>Problems faced by Industry</em></div>    
    </div>
    <div class="col-sm-6 rowmargin20"><img src="{{ asset('website/img/benefits_diagram02.jpg') }}" alt="Types of Costing" class="img-responsive">
    <div class="textred13bold topmargin5"><em>Types of Coatings</em></div>    
    </div>    
    </div>    
    </div>    
    </div>
    <!--We provide services end here-->
        
<!--Accordion area start here-->    
<div class="graycontarea">
<div class="container">
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
<div class="serviceaccorionbox">
<div id="accordion3">
<dl class="accordion3" id="slider3">
<dt>How is thermal spray service performed on your components?</dt>
<dd>
<div class="content_hide">Our customers send their components or machine parts to our shop for application of coating films and refurbishment. Standard steps are <span style="font-weight: 700">1) Pre inspection 2) Pre-grinding / Machining 3) Masking 4) Blasting 5) Coating 6) Post grinding 7) Finishing/ Polishing/Lapping. After completion of the jobs Final Inspections are done and jobs are dispatched after getting customer approvals.</span>
</div>
</dd>
<dt>What is the price of thermal spray coatings?</dt>
<dd>
<div class="content_hide">Costs determined by many variable factors some of which are listed below: -<br>
<br>
<ul>
<li>Part drawing for understanding the geometry, overall dimensions, weight, base material, coating area diameters and length etc.</li>
<li>Coating thickness, Coating material, Coating surface finish</li>
<li>Material of construction and it is hardness</li>
<li>Part condition if not new, the amount of machining or grinding required for re-coating</li> 
<li>Normally thermal spray parts are 5x - 10x times more expensive then hard-chrome plated parts and provide 2x-5x life visa vi hard chrome plating</li>
</ul>
<br>    
It is important to provide above information to get quote for the project part.     
    
</div>
</dd>
<dt>What are the variables or customization available to our customers?</dt>
<dd>
<div class="content_hide">
<ul>
<li>Selection of Composition of coating as shown in below chart</li>
<li>Selection of Thickness of coating required in mm (0.08 - 3 mm)</li>
<li>Fixation of Surface Finish of coating required in Ra as shown below in benefits section.</li>
</ul>
</div>
</dd>
<dt>What are things to take care before sending the job?</dt>
<dd>
<div class="content_hide">
<ul>
<li>Job should be sent with proper packing and rust preventive applied</li>
<li>Job should be free of pin holes, dents, other surface defects</li>
<li>The job to be sent after performing pre grinding operation and undercut for the coating.</li>
<li>Wherever possible 3-5 mm collars to be kept of size up to 0.1+ than the final finished size</li>
<li>Job should not have sharp edges, and has to be deburred.</li>
</ul>
</div>
</dd>
</dl>
</div>
</div>    
</div>    
</div>
</div>    
</div>
<!--Accordion area end here-->
    @endsection