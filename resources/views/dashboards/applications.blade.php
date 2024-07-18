@extends('layouts.app')
@section('content')
<!-- Accordian css and script start-->
<link href="{{ asset('dist/accordion/accordian1.css') }}" rel="stylesheet" type="text/css" /> 
<script src="{{ asset('dist/accordion/script.js') }}" type="text/javascript"></script> 
<!-- Accordian css and script start-->

<!--Inner Heading start here-->
<div class="innerheading">
<div class="container"><h1>Industry</h1></div>    
</div>  
<!--Inner Heading end here-->
    
<!--We provide services start here-->    
<div class="whitecontarea">
<div class="container">
<div class="row">
<div class="col-sm-8">
<div class="mainheading"><h2>Coating Application Areas</h2></div>  
<div class="mainheading"><h5>General Areas where coatings are used for Protection of engineering components.</h5></div>  
<div class="textblack14cont">
<ul>
<li>When component is in relative motion with another and under load causing it to scuff or tear</li>
<li>When component is interacting with one another causing gouging or cutting of its surface.</li>
<li>When component is being impinged upon by liquid or gaseous stream containing particles causing erosion.</li>
<li>When component is being deformed because of cavitation.</li>
<li>When component has small oscillation or vibration motion causing it to fatigue</li>
<li>When a component is prone to corrosion</li>    
</ul>    
</div>    
<div class="mainheading topmargin30"><h5>General areas where coatings are used for providing functional properties to engineering component.</h5></div>  
<div class="textblack14cont">
<ul>
<li>When component requires enhanced electrical isolation (non-conductive coating)</li>
<li>When component requires enhanced electrical conduction (conductive coating)</li>
<li>When component requires modified emissivity (emissivity coating)</li>
<li>When component requires enhanced high temperature working ability (TBC i.e. Thermal Barrier Coating)</li>
<li>When component requires close clearance control fits to be maintained (CC coating)</li>
<li>When component required to be dimensionally restored (metal build up coating)</li>    
</ul>    
</div>
<hr>
<div class="mainheading"><h2>Application side</h2></div>  
<div class="mainheading"><h5>Physical Feasibility for Coating of components</h5></div>  
<div class="textblack14cont">
<ul>
<li>Coating is applied on components at our facility only. In -situ application not available.</li>
<li>Majorly coatings are applied on outer dimensions of the components.</li>
<li>Inner dimensions of components can only be coated provided the ratio of I.D to Length is around 1:1 at least.</li>
<li>Components with complex shapes having line of sight can be coated.</li>
<li>Coating thickness build up on component is recommend as 80 - 500 microns for ceramics and up to 2mm for metals.</li>
<li>New components to be sent for coating should have a ground surface for area to be coated.</li>
<li>Component's materials of construction like Mild steel, Stainless steels, Aluminium, Copper, Titanium can be coated only.</li>
<li>Component's materials hardness to be sent for coating should be less than 50 Hrc to avoid improper bonding of coating material.</li>
<li>Components especially old parts being sent for repair and remanufacture having wall thickness lesser than 5-10mm are not recommend for coating.</li>
<li>Components subject to impact loading are not recommended to be coated.</li>    
</ul>    
</div>        
</div>
<div class="col-sm-4 rowmargin">
<div class="applicationsbox">    
<div id="accordion3">
<dl class="accordion3" id="slider3">
<dt>Aviation</dt>
<dd>
<div class="content_hide">Flow path liners, compressor housings, split fan casings, convergent plates, turbine blades, liners.</div>
</dd>
<dt>Chemical</dt>
<dd>
<div class="content_hide">Oil and exploration shafts, plug valve, pump plunger, pump shafting and housing, shaft for mixer, pump sleeves, slurry pump casing, thermo wells.</div>
</dd>
<dt>Steel</dt>
<dd>
<div class="content_hide">Deflector rolls, bridle rolls, sink (pot) rolls, coil unwinder rolls.</div>
</dd>
<dt>Paper</dt>
<dd>
<div class="content_hide">Rewinder rolls.</div>
</dd>
<dt>Printing</dt>
<dd>
<div class="content_hide">Impression cylinders, grippers pads, inkduct rolls, draw rollers, draw journals, strips, blanket cylinders,</div>
</dd>
<dt>Power Plants</dt>
<dd>
<div class="content_hide">Boiler tubes, piston rods, pump sleeves, turbine blades.</div>
</dd>  
<dt>Oil Fields</dt>
<dd>
<div class="content_hide">Mandrels, knocker mandrels, spline mandrels, bearing mandrels, drive shafts, water pump shafts, ball valves, piston rods.</div>
</dd>    
<dt>Automotive</dt>
<dd>
<div class="content_hide">Crank shafts, piston rings, shifter forks, cylinder liner, connecting rods, pins.</div>
</dd>    
<dt>Glass</dt>
<dd>
<div class="content_hide">Moulds , plungers.</div>
</dd>    
<dt>Textile</dt>
<dd>
<div class="content_hide">Thread guides, godets, groove rolls, let down rolls, feed wheels, finish rolls, draw rolls, crimper rolls, friction discs, separator rolls.</div>
</dd>    
<dt>Pump</dt>
<dd>
<div class="content_hide">Pump sleeves, impellers, wear rings, plungers, casing rings, shaft sleeves.</div>
</dd>    
<dt>Shipping</dt>
<dd>
<div class="content_hide">Crank shafts, engine cylinders, valve stems.</div>
</dd>    
<dt>Cement</dt>
<dd>
<div class="content_hide">Agitator shafts, piston rods, pump plungers,.</div>
</dd>    
<dt>Compressor</dt>
<dd>
<div class="content_hide">Piston rods.</div>
</dd>    
</dl>
</div>
</div>    
</div>    
</div>
</div>    
</div>
<!--We provide services end here-->
    @endsection