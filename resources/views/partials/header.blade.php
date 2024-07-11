  <!-- Header Container Start Here -->
  <div class="header">
      <div class="container">
          <div class="row">
              <div class="col-md-3 col-sm-6 col-xs-8">
                  <div class="logo"><a href="{{ route('dashboards.home') }}"><img src="{{ asset('dist/img/logo.jpg') }} "
                              alt="Plasma Spray" title="plasma spary" /></a></div>
              </div>
              <div class="col-md-9 col-sm-6 col-xs-4">
                  <div class="menu">
                      <nav id="navigation" class="navigation">
                          <div class="nav-header">
                              <div class="nav-toggle"></div>
                          </div>
                          <div class="nav-menus-wrapper">
                              <ul class="nav-menu">
                                  <li><a href="{{ route('dashboards.home') }}">Home</a></li>
                                  <li><a href="#">About us</a>
                                      <ul class="nav-dropdown">
                                          <li><a href="{{ route('about-us') }}">Company Profile</a></li>
                                          <li><a href="{{ route('catalogue') }}">Catalogue</a></li>
                                      </ul>
                                  </li>
                                  <li><a href="#">Services</a>
                                      <ul class="nav-dropdown">
                                          <li><a href="{{ route('scope') }}">Scope of Services</a></li>
                                          <li><a href="{{ route('range-of-products') }}">Range of Products</a></li>
                                      </ul>
                                  </li>
                                  <li><a href="#">Processes</a>
                                      <ul class="nav-dropdown">
                                          <li><a href="{{ route('plasma-trans-arc') }}">Plasma Transferred Arc</a></li>
                                          <li><a href="{{ route('powder-flame-spray') }}">Powder Flame Spraying</a></li>
                                          <li><a href="{{ route('arc-spraying') }}">Arc Spraying</a></li>
                                          <li><a href="{{ route('hvofs') }}">High Velocity Oxygen Fuel Spraying</a>
                                          </li>
                                          <li><a href="{{ route('plasma-spraying') }}">Plasma Spraying </a></li>
                                      </ul>
                                  </li>
                                  <li><a href="#">Industry</a>
                                      <ul class="nav-dropdown">
                                          <li><a href="{{ route('applications') }}">Applications</a></li>
                                          <li><a href="{{ route('photo-gallery') }}">Photo Gallery</a></li>
                                      </ul>
                                  </li>
                              </ul>
                          </div>
                      </nav>
                  </div>
              </div>
              <!--<div class="col-md-3 col-sm-12 col-xs-12 callinfo hidden-sm hidden-xs">
<div class="search">
<input type="text" placeholder="Search" id="txtSearch" /><button class="searchbtn" onclick="return Redirect();"><img src="img/search.png" alt="search"/></button>
</div>
</div>-->
          </div>
      </div>
  </div>
  <!-- Header Container Start Here -->
