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
<div class="textblack14cont">It involves using a torch to heat material, in powder or wire form, to a molten or near-molten state. A gas propels this material to the target surface, creating a new layer. The coating can be a single element, alloy, or compound with unique properties that are often only possible through thermal spraying.</div>    
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
<dt>How We Perform Thermal Spray Services on Your Components?</dt>
<dd>
<div class="content_hide">Customers send us their parts for coating and refurbishment. Our process includes thorough inspection, pre-grinding or machining, masking, blasting, coating application, and post-finishing. After these steps, we perform final inspections and send the parts upon customer approval.
</div>
</dd>
<dt>What is the price of thermal spray coatings?</dt>
<dd>
<div class="content_hide">The price of thermal spray coatings varies based on several factors<br>
<br>
<ul>
<li>Part drawing detailing geometry, dimensions, weight, base material, and coating area.</li>
<li>Coating thickness, material, and surface finish.</li>
<li>Material construction and its hardness.</li>
<li>Part condition; additional machining or grinding for recoating if not new.</li></li>
<li>Thermal spray parts typically cost 5 to 10 times more than hard-chrome plated parts but
offer 2 to 5 times longer lifespan.</li>
</ul>
    
</div>
</dd>
<dt>What are the variables or customization available to our customers?</dt>
<dd>
<div class="content_hide">
<ul>
<li>Selection of coating composition, as indicated in the chart provided.</li>
<li>Choice of coating thickness, ranging from 0.08 mm to 3 mm.</li>
<li>Specification of desired surface finish for the coating, measured in Ra (roughness
average), as outlined in the benefits section.</li>
</ul>
</div>
</dd>
<dt>What are things to take care before sending the job?</dt>
<dd>
<div class="content_hide">
<ul>
<li>Ensure the job is properly packed and rust-preventive measures are applied.</li>
<li>Verify the job is free of pinholes, dents, and other surface defects.</li>
<li>Perform pre-grinding operations and undercutting for the coating where necessary.</li>
<li>Maintain 3-5 mm collars larger than the final finished size where possible.</li>
<li>Remove sharp edges and debur the job before sending.</li>
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