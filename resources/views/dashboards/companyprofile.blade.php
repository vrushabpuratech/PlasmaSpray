@extends('layouts.app')
@section('content')

<!-- Our Timeline css and script start-->
<link rel="stylesheet" href="{{ asset('dist/pan_scroll/css/main.minf378.css?ver=bd8dba80600ef1d3acbe1cf136350177') }}">
<link rel="Stylesheet" type="text/css" href="{{ asset('dist/pan_scroll/css/smoothDivScroll.css') }}" />
<script src="{{ asset('dist/pan_scroll/js/jquery-ui-1.8.23.custom.min.js') }}" type="text/javascript"></script> 
<script src="{{ asset('dist/pan_scroll/js/jquery.mousewheel.min.js') }}" type="text/javascript"></script> 
<script src="{{ asset('dist/pan_scroll/js/jquery.kinetic.js') }}" type="text/javascript"></script> 
<script src="{{ asset('dist/pan_scroll/js/jquery.smoothdivscroll-1.3-min.js') }}" type="text/javascript"></script> 
<script type="text/javascript">
	$(document).ready(function () {
		$(".miz-timeline").smoothDivScroll({
			touchScrolling: true,
			visibleHotSpotBackgrounds: "always"
		});
	});
</script> 
<!-- Our Timeline css and script end-->

<!--Inner Heading start here-->
<div class="innerheading">
    <div class="container">
      <h1>About us</h1>
    </div>
  </div>
  <!--Inner Heading end here--> 
  
  <!--Who we are start here-->
  <div class="whitecontarea">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="aboutusimgbg">
            <h2>Let us first address a very commonly asked question by our customers.</h2>
          </div>
          <div class="aboutusredboxarrow"></div>
          <div class="aboutusredbox"><span>Where does the name Plasma Spray Processors come from?</span><br>
            <br>
            In 1984 we started the company operations with our purchase of Plasma Spray processing machinery, the first in the private sector in India at the time. The name is derived from the process of Plasma Spraying. </div>
        </div>
        <div class="col-sm-6 rowmargin">
          <div class="mainheading">
            <h2>Who We Are?</h2>
          </div>
          <div class="textblack14cont">Plasma Spray Processors is a coating job shop engaged in providing different type
            of  "Surface Coating and Re - furbishing of components by thermal spray process"
            across Aerospace, Steel, Paper, Pump, Printing, Power, Textiles, Wire drawing,
            Valves, Oil &amp; Gas, Compressors and other industrial sectors.</div>
          <hr style="margin: 30px 0px;">
          <div class="mainheading">
            <h2>Where We Are</h2>
          </div>
          <div class="textblack14cont">PLASMA SPRAY PROCESSORS was established in 1984. The company is located at
            Taloja M.I.D.C which is 50 kms from Mumbai city centre and just about 125 kms
            away from Pune.</div>
        </div>
      </div>
    </div>
  </div>
  <!--Who we are end here--> 
  
  <!--Our Team start here-->
  <div class="graycontarea">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="mainheading">
            <h2>Our Team</h2>
          </div>
          <div class="textblack14cont">Dhimant Doshi is the founder and senior most partner of Plasma Spray Processors. Dhimant has graduated with a degree in Bachelor of Science (B.Sc) from Mumbai in year 1978.<br>
            <br>
            Dhaval Doshi joined Plasma Spray Processors in July 2016 and is a partner at Plasma Spray Processors. Dhaval has a bachelor's degree in Production Engineering (B.E. Prod) from D. J. Sanghvi C.O.E. Prior to joining Plasma Spray Processors, Dhaval worked at Texspares Machine Works for about seven years.<br>
            <br>
            Harsh Doshi joined Plasma Spray Processors in year 2011 as a partner. Harsh has a bachelor's degree in Commerce (B. Com) from S.I.E.S College of Commerce. Prior to joining Plasma Spray Processors, Harsh worked at CA firm. </div>
        </div>
        <div class="col-sm-6 rowmargin"><img src="{{ asset('dist/img/ourteamimg.jpg') }}" alt="team" class="img-responsive"></div>
      </div>
    </div>
  </div>
  <!--Our Team end here--> 
  
  <!--Our Timeline start here-->
  <div class="whitecontarea">
    <div class="container">
      <div class="mainheading text-center">
        <h2>Our Timeline</h2>
      </div>
      <div id="page-main" class="topmargin30" role="main">
        <div class="miz-timeline">
          <ul>
            <li>
              <div class="timelineborder">
                <div class="timelinecircle">
                  <h6>20th <span>Century</span></h6>
                </div>
              </div>
              <div class="timelinebullet"><img src="{{ asset('dist/img/timeline_bullet.png') }}" alt=""></div>
              <div class="timelinetext"><span>20th Century</span><br>
                <br>
                The year in which Plasma Spray Processors was
                established. Mr. Dhimant N. Doshi</div>
            </li>
            <li>
              <div class="timelineborder">
                <div class="timelinecircle">
                  <h6>1984</h6>
                </div>
              </div>
              <div class="timelinebullet"><img src="{{ asset('dist/img/timeline_bullet.png') }}" alt=""></div>
              <div class="timelinetext">Installation of Plasma System</div>
            </li>
            <li>
              <div class="timelineborder">
                <div class="timelinecircle">
                  <h6>1990s</h6>
                </div>
              </div>
              <div class="timelinebullet"><img src="{{ asset('dist/img/timeline_bullet.png') }}" alt=""></div>
              <div class="timelinetext">Installation of HVOF System<br>
                <br>
                Coating developed for HAL, DRDO lab</div>
            </li>
            <li>
              <div class="timelineborder">
                <div class="timelinecircle">
                  <h6>21th <span>Century</span></h6>
                </div>
              </div>
              <div class="timelinebullet"><img src="{{ asset('dist/img/timeline_bullet.png') }}" alt=""></div>
              <div class="timelinetext"><span>21th Century</span><br>
                <br>
                Joining of second generation in the family business. Reemphasizing our commitment to our customers, suppliers, employees to develop a sustainable, dependable, and beneficial organization and partnership.</div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!--Our Timeline end here--> 
  
  <!--Certification Quality Policy start here-->
  <div class="graycontarea">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="mainheading">
            <h2>Certification</h2>
          </div>
          <div><img src="{{ asset('dist/img/isologo.png') }}" alt="ISO 9001:2015"></div>
          <div class="textblack18light topmargin15">Plasma Spray Processors is a <br class="hidden-sm hidden-xs">
            <strong>ISO 9001:2015</strong> Certified Company</div>
        </div>
        <div class="col-sm-8 rowmargin">
          <div class="qualitypolicyarea">
            <div class="mainheading">
              <h2>Quality Policy</h2>
            </div>
            <div class="row padding5pxarea">
              <div class="col-md-10 col-sm-9 col-xs-8 padding5px">
                <div class="textblack14cont">At Plasma Spray Processors our <br class="hidden-xs">
                  motto is <span class="textred16bold">"Customer Satisfaction is Our Satisfaction"</span> <br class="hidden-xs">
                  by promoting the credo <br class="hidden-xs">
                  <span class="textred16bold">"Do It Right the First Time".</span> </div>
              </div>
              <div class="col-md-2 col-sm-3 col-xs-4 padding5px"><img src="{{ asset('dist/img/qualitypolicylogo.png') }}" alt="Quality" class="img-responsive center-block"></div>
            </div>
            <div class="textblack14cont topmargin30"><span class="textblack16bold">Plasma Spray Processors will achieve this by:</span><br>
              a) Upgrading processes and equipment to cope with changing technology and to improve performance.<br>
              b) Regular training to upgrade the skills of all the team members to keep pace with modern trends in
              spray processing and customer requirements.<br>
              c) Creating an organization with a vision for the future. </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Certification Quality Policy end here--> 
  @endsection
  