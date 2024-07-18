@extends('layouts.app')

@section('content')
<!-- Accordian css and script start-->
<link href="{{ asset('dist/accordion/accordian1.css') }}" rel="stylesheet" type="text/css" /> 
<script src="{{ asset('dist/accordion/script.js') }}" type="text/javascript"></script> 
  
  <!--Collage start here-->
  <div class="collage">
    <div id="main-slider">
      <div id="content-slider">
        <ul>
          <li data-transition="fade" data-slotamount="5" data-masterspeed="700"><img src="{{ asset('dist/img/08.jpg') }}" alt="Slider Image 1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" /> 
            
            
            <!-- LAYER NR. 3 -->
            <div class="caption caption-black"
data-x="0"
data-y="200"
data-speed="600"
data-start="1500"
data-easing="Power4.easeOut"
data-endspeed="500"
data-endeasing="Power1.easeIn"
data-captionhidden="off">Top Tier Auxillary Rolls Coating<br>
 Mills Solution</div>
          </li>
          <li data-transition="fade" data-slotamount="5" data-masterspeed="700"><img src="{{ asset('dist/img/07.jpg') }}" alt="Slider Image 1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" /> 
            
            <!-- LAYER NR. 3 -->
            <div class="caption caption-black"
data-x="0"
data-y="200"
data-speed="600"
data-start="1500"
data-easing="Power4.easeOut"
data-endspeed="500"
data-endeasing="Power1.easeIn"
data-captionhidden="off"> Helping Steel Lines Running<br>
Unabridged</div>
          </li>
          <li data-transition="fade" data-slotamount="5" data-masterspeed="700"><img src="{{ asset('dist/img/05.jpg') }}" alt="Slider Image 1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" /> 
            
            <!-- LAYER NR. 3 -->
            <div class="caption caption-black"
data-x="0"
data-y="200"
data-speed="600"
data-start="1500"
data-easing="Power4.easeOut"
data-endspeed="500"
data-endeasing="Power1.easeIn"
data-captionhidden="off">Rolling Mill Life Enhancement<br>
Begins at the surface</div>
          </li>
          <li data-transition="fade" data-slotamount="5" data-masterspeed="700"><img src="{{ asset('dist/img/06.jpg') }}" alt="Slider Image 1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" /> 
            
            <!-- LAYER NR. 3 -->
            <div class="caption caption-black"
data-x="0"
data-y="200"
data-speed="600"
data-start="1500"
data-easing="Power4.easeOut"
data-endspeed="500"
data-endeasing="Power1.easeIn"
data-captionhidden="off">With over 40+ years of<br>
experience we have coated<br class="hidden-md">
over 2000+ Rolls</div>
          </li>
          <li data-transition="fade" data-slotamount="5" data-masterspeed="700"><img src="{{ asset('dist/img/02.jpg') }}" alt="Slider Image 1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" /> 

            
            <!-- LAYER NR. 3 -->
            <div class="caption caption-black"
data-x="0"
data-y="200"
data-speed="600"
data-start="1500"
data-easing="Power4.easeOut"
data-endspeed="500"
data-endeasing="Power1.easeIn"
data-captionhidden="off">Improve Hardness with coatings<br>
 up to 72hrc</div>
          </li>
      
      
      
      
      <li data-transition="fade" data-slotamount="5" data-masterspeed="700"><img src="{{ asset('dist/img/01.jpg') }}" alt="Slider Image 1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" /> 
          
            
            <!-- LAYER NR. 3 -->
            <div class="caption caption-black"
data-x="0"
data-y="200"
data-speed="600"
data-start="1500"
data-easing="Power4.easeOut"
data-endspeed="500"
data-endeasing="Power1.easeIn"
data-captionhidden="off">Wear Resistant Tungsten Carbide Coating<br>
for variety of user defined application</div>
          </li>
      
      
      
      <li data-transition="fade" data-slotamount="5" data-masterspeed="700"><img src="{{ asset('dist/img/04.jpg') }}" alt="Slider Image 1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" /> 
            
            
            <!-- LAYER NR. 3 -->
            <div class="caption caption-black"
data-x="0"
data-y="200"
data-speed="600"
data-start="1500"
data-easing="Power4.easeOut"
data-endspeed="500"
data-endeasing="Power1.easeIn"
data-captionhidden="off">Complex Part Geometries can be<br>
Coated Easily</div>
          </li>
      
      
      <li data-transition="fade" data-slotamount="5" data-masterspeed="700"><img src="{{ asset('dist/img/03.jpg') }}" alt="Slider Image 1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" /> 
            
          
            <div class="caption caption-black"
data-x="0"
data-y="200"
data-speed="600"
data-start="1500"
data-easing="Power4.easeOut"
data-endspeed="500"
data-endeasing="Power1.easeIn"
data-captionhidden="off">Achieve Diamond Like Hardness &amp;<br>
Mirror like Finish on your parts</div>
          </li>
      
      
        </ul>
      </div>
      <!--<div id="slider-overlay"></div>--> 
    </div>
  </div>
  <!--Collage end here--> 
  
  <!-- Middle Container Start Here -->
  <div class="whitecontainer">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-12">
          <h1>We are in the Business of
            Life Enhancement of Parts
            or Components</h1>
          <p style="height: 10px;"></p>
          We offer thermal spray services like Plasma Spray Coating, Tungsten Carbide Coating, and HVOF Coating.These coatings protect industrial parts and give them special properties by applying a thin layer on the surface.
          <p style="height: 30px;"></p>
          <div class="row">
      <div class="col-xs-5"><div class="readmore"><a href="{{ route('scope') }}">Read More</a></div></div>
        <div class="col-xs-7"><div class="readmore"><a href="{{ route('photo-gallery') }}">Photo Gallery</a></div></div>
      </div>
        </div>
        <div class="col-md-1 col-sm-12">&nbsp;</div>
        <div class="col-md-7 col-sm-12 rowmargin">
          <div class="textred14px">This is the right place if you are looking for coatings films like</div>
          <div class="compboxes">
            <div class="row">
              <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="solutionbox"> <a href="{{ route ('range-of-products')}}#Tungsten">
                  <div class="solutionname">Tungsten <br/>
                    Carbide</div>
                  <img src="{{ asset('dist/img/tungsten.jpg') }}" alt="Tungsten Carbide"/> </a> </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="solutionbox"> <a href="{{ route ('range-of-products')}}#Ceramic">
                  <div class="solutionname">Ceramic <br/>
                    Coating</div>
                  <img src="{{ asset('dist/img/ceramic_coating.jpg') }}" alt="Ceramic Coating"/> </a> </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="solutionbox"> <a href="{{ route ('range-of-products')}}#Chrome">
                  <div class="solutionname">Chrome <br/>
                    Oxide</div>
                  <img src="{{ asset('dist/img/chrome.jpg') }}" alt="Chrome Oxide"/> </a> </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="solutionbox"> <a href="{{ route ('range-of-products')}}#Stellite">
                  <div class="solutionname">Stellite</div>
                  <img src="{{ asset('dist/img/stellite.jpg') }}" alt="Stellite"/> </a> </div>
              </div>
            </div>
          </div>
          <div>Our multipurpose <u>coating spray</u> films are a superior alternative to Hard chrome plating, Rubberizing, Weld overlays, Nitriding and other heat treatments in many applications.</div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="casestudy">
      <marquee behavior="scroll" onMouseOver="this.stop()" onMouseOut="this.start()">
      <a href="BridleRollCaseStudy.pdf" download target="_blank">Download Case study to see how PSP enhances your Steel Components</a>
      </marquee>
    </div>
  </div>
  <div class="greycontainer">
    <div class="container">
      <div class="row topmargin20">
        <div class="col-md-7 col-sm-8">
      <h2>Processes</h2>
          <div class="row topmargin15">
            <div class="col-sm-6">
              <div class="productcatbox">
                <h3><a href="{{ route('plasma-spraying')}}">Plasma Spray Coating</a></h3>
                <div class="procontent">In contrast to the thermal spray techniques with flame or arc where the temperature reach between 3000 and 40000C plasma spraying...</div>
                <div class="topmargin10"><a href="{{ route('plasma-spraying')}}"><img src="{{ asset('dist/img/arrow_btn.png') }}" alt="read more"/></a></div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="productcatbox">
                <h3><a href="{{ route('hvofs')}}">HVOF Coating
                  <div class="productcatboxspan"> High Velocity Oxygen Fuel
                    Spraying</div>
                  </a></h3>
                <div class="procontent">In the HVOF coating process a continuous gas combustion with high pressure is carried out in the combustion chamber...</div>
                <div class="topmargin10"><a href="{{ route('hvofs')}}"><img src="{{ asset('dist/img/arrow_btn.png') }}" alt="read more"/></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5 col-sm-4">
      <h2>Industries Served</h2>
          <div class="applicationsbox topmargin15">
            <div id="accordion3">
              <dl class="accordion3" id="slider3">
                <dt>Aviation</dt>
                <dd>
                  <div class="content_hide">Flow path liners, compressor housings, split fan casings, convergent plates, turbine blades, liners.</div>
                </dd>
                <dt>Steel</dt>
                <dd>
                  <div class="content_hide">Deflector rolls, bridle rolls, sink (pot) rolls, coil unwinder rolls.</div>
                </dd>
                <dt>Oil Fields</dt>
                <dd>
                  <div class="content_hide">Mandrels, knocker mandrels, spline mandrels, bearing mandrels, drive shafts, water pump shafts, ball valves, piston rods.</div>
                </dd>
                <dt>Textile</dt>
                <dd>
                  <div class="content_hide">Thread guides, godets, groove rolls, let down rolls, feed wheels, finish rolls, draw rolls, crimper rolls, friction discs, separator rolls.</div>
                </dd>
                <dt>Power Plants</dt>
                <dd>
                  <div class="content_hide">Boiler tubes, piston rods, pump sleeves, turbine blades.</div>
                </dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="whyusbox">
      <div class="row">
        <div class="col-md-5 col-sm-8">
          <h2>Why Choose Us</h2>
          <h3>to be Part of Your Supply Chain</h3>
          <div class="whyuspoints">
            <ul>
              <li>Competitive pricing</li>
<li>Free consultations with site visits</li>
<li>No minimum order requirements</li>
<li>State-of-the-art USA and German coating systems</li>
<li>Dedicated after-sales support</li>
            </ul>
          </div>
        </div>
        <div class="col-md-7 col-sm-4"> &nbsp; </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="getmore">
      <h4>Get more Life for Your Parts</h4>
      by using any of our choice of standard wear and corrosion protective coating films.
      <div class="readmore topmargin30"><a href="{{ route('applications')}}">To Know More Click Here</a></div>
    </div>
    <div class="row nopaddingarea">
      <div class="col-sm-6 nopadding">
        <div class="blackbox">
          <h4>Are you facing below problems with machine
            parts?</h4>
          <ul>
            <li>High maintenance costs</li>
            <li>Worn out parts causing machine stoppage</li>
            <li>Necessity to change and check parts frequently</li>
            <li>Unstable product quality due to bad parts</li>
            <li>Excessive stockpile of change parts</li>
            <li>Long delivery lead times</li>
            <li>Lots of scrap parts</li>
            <li>Premature part failures during demanding runs</li>
            <li>Rising costs of new replacement parts</li>
          </ul>
        </div>
      </div>
      <div class="col-sm-6 nopadding">
        <div class="greybox">
          <div class="arrowright"></div>
          <h4>Our Coatings Films can provide solutions
            to some of your problems</h4>
          <ul>
            <li>We can provide increased Part Life </li>
            <li>We can remanufacture your old parts and put them back in production
              instead of you scrapping them. </li>
            <li>We help you avoid purchase of new parts by allowing you to recoat and
              reuse old parts for multiple part life cycles. </li>
            <li>We provide short delivery periods and also express turnarounds for
              breakdown jobs </li>
            <li>We provide new parts with enhanced coating film protection to ensure
              incremental improvement in performance. </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="getmore"> We cater customers pan India and across verticals.<br>
      Our solutions are used by below industries<br>
      <br>
      <span>Steel <span>|</span> Paper and Pulp <span>|</span> Pumps <span>|</span> Oil and Gas <span>|</span> Power Utilities <span>|</span> Aerospace <span>|</span> Cable and Wire <span>|</span> Automotive <span>|</span> Compressors <span>|</span> Textiles <span>|</span> Government</span> </div>
  </div>
  
  <!-- Middle Container End Here --> 
  
 @endsection 