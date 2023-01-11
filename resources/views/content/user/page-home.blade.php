@extends('layouts/user/layoutMaster')

@section('content')

<!-- Start .about-section  -->
<div id="about" class="about-section section pb-90 white-bg">
  <div class="container tab-fix">
    <div class="section-head text-center">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h2 class="heading">About <span>AppsLand</span></h2>
          <p>Nam et sagittis diam. Sed tempor augue sit amet egestas scelerisque. Orci varius natoque penatibus et
            magnis dis parturient montes, nascetur ridiculus mus.</p>
        </div>
      </div>
    </div><!-- .section-head -->
    <div class="row tab-center mobile-center">
      <div class="col-md-6">
        <div class="video wow fadeInLeft" data-wow-duration=".5s">
          <img src="images/about-video.jpg" alt="about-video" />
          <div class="video-overlay gradiant-background"></div>
          <a href="https://www.youtube.com/watch?v=kuceVNBTJio" class="video-play" data-effect="mfp-3d-unfold"><i
              class="fa fa-play"></i></a>
        </div>
      </div><!-- .col -->
      <div class="col-md-6">
        <div class="txt-entry">
          <h3>Take a Look Around our App</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor.</p>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
            aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
          <a href="#" class="button">Download</a>
        </div>
      </div><!-- .col -->
    </div><!-- .row -->
  </div><!-- .container -->
</div><!-- .about-section  -->


<!-- Start .features-section  -->
<div id="features" class="features-section section gradiant-background overflowvisible">
  <div class="container tab-fix">
    <div class="features-content pt-10">
      <div class="row">
        <div class="col-md-7 pull-right">
          <div class="section-head heading-light mobile-center tab-center">
            <div class="row">
              <div class="col-md-12">
                <h2 class="heading heading-light">Amazing Features</h2>
                <p>Nam et sagittis diam. Sed tempor augue sit amet egestas scelerisque. Orci varius natoque penatibus et
                  magnis dis parturient montes, nascetur ridiculus mus.</p>
              </div>
            </div>
          </div><!-- .section-head -->
          <div class="row">
            <div class="col-sm-6">
              <div class="single-features">
                <em class="ti ti-user"></em>
                <h4>User Friendly</h4>
                <p>Lorem ipsum dolor sit amet consect etur adipi sicing elited do eiusmod tempor.</p>
              </div>
            </div><!-- .col -->
            <div class="col-sm-6">
              <div class="single-features">
                <em class="ti ti-bolt"></em>
                <h4>Super Fast Speed</h4>
                <p>Amet consect etur adipis icing elited do eiu smod tempor incidi dout labore.</p>
              </div>
            </div><!-- .col -->
            <div class="col-sm-6">
              <div class="single-features">
                <em class="ti ti-video-camera"></em>
                <h4>Height Resolation</h4>
                <p>Dolor sit ipsum amet consect etur adipis icing elited do eiusmod dout.</p>
              </div>
            </div><!-- .col -->
            <div class="col-sm-6">
              <div class="single-features">
                <em class="ti ti-infinite"></em>
                <h4>Unlimited Posibility</h4>
                <p>Consect etur adipis icing elited do eius mod tempor incidi dout labore magna.</p>
              </div>
            </div><!-- .col -->
          </div><!-- .row -->
        </div><!-- .col -->
        <div class="col-md-5 pt-100 text-center">
          <div class="fearures-software-mockup wow fadeInLeft" data-wow-duration=".5s">
            <img src="images/software-screen-b.jpg" alt="software-screen" />
          </div>
        </div><!-- .col -->
      </div><!-- .row -->
    </div><!-- .features-content -->
  </div><!-- .container -->
</div><!-- .features-section  -->


<!-- Start .screenshots-section  -->
<div id="screenshots" class="screenshots-section section grey-background">
  <div class="container">
    <div class="section-head text-center">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
          <h2 class="heading">Preview <span>Our Products</span></h2>
          <p>Nam et sagittis diam. Sed tempor augue sit amet egestas scelerisque. Orci varius natoque penatibus et
            magnis dis parturient montes.</p>
        </div>
      </div>
    </div><!-- .section-head  -->
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="tab-fix">
          <div class="has-carousel software-screens owl-carousel owl-theme" data-items="1" data-loop="true"
            data-auto="true" data-dots="false" data-navs="true">
            <div class="item"><img src="images/software-screen-a.jpg" alt="software-screen" /></div>
            <div class="item"><img src="images/software-screen-b.jpg" alt="software-screen" /></div>
            <div class="item"><img src="images/software-screen-c.jpg" alt="software-screen" /></div>
            <div class="item"><img src="images/software-screen-d.jpg" alt="software-screen" /></div>
          </div>
        </div><!-- .tab-fix -->
      </div><!-- .col -->
    </div><!-- .row -->
  </div><!-- .container-fluid -->
</div><!-- .screenshots-section  -->


<!-- Start .steps-section  -->
<div class="section steps-section pb-90">
  <div class="container">
    <div class="section-head text-center">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h2 class="heading">Step by Step <span>of AppsLand</span></h2>
          <p>Nam et sagittis diam. Sed tempor augue sit amet egestas scelerisque. Orci varius natoque penatibus et
            magnis dis parturient montes, nascetur ridiculus mus.</p>
        </div>
      </div>
    </div><!-- .section-head  -->
    <div class="row">
      <div class="col-md-5 col-md-offset-0 col-sm-8 col-sm-offset-2">
        <ul class="nav nav-tabs">
          <li class="active" data-toggle="tab" data-target="#tab1">
            <div class="steps">
              <h4>Get Started</h4>
              <p>Consec tetur adip iscing elit labore et tempor incid.</p>
            </div>
          </li>
          <li data-toggle="tab" data-target="#tab2">
            <div class="steps">
              <h4>Install AppsLand</h4>
              <p>Install dolor sit amet, conse ctetur adipis cing elit.</p>
            </div>
          </li>
          <li data-toggle="tab" data-target="#tab3">
            <div class="steps">
              <h4>Start Using AppsLand</h4>
              <p>Adipiscing elit, sed do eiusmod temport ut labore.</p>
            </div>
          </li>
          <li data-toggle="tab" data-target="#tab4">
            <div class="steps">
              <h4>Get Advanced Options</h4>
              <p>Options psum dolor sitan ditiis neque reprehe.</p>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-md-7 col-sm-12 col-md-offset-0 text-center">
        <div class="tab-content no-pd steps-screen">
          <div class="tab-pane fade in active" id="tab1">
            <img src="images/software-screen-a.jpg" alt="step-screen">
          </div>
          <div class="tab-pane fade" id="tab2">
            <img src="images/software-screen-b.jpg" alt="step-screen">
          </div>
          <div class="tab-pane fade" id="tab3">
            <img src="images/software-screen-c.jpg" alt="step-screen">
          </div>
          <div class="tab-pane fade" id="tab4">
            <img src="images/software-screen-d.jpg" alt="step-screen">
          </div>
        </div>
      </div>
    </div><!-- .row  -->
  </div><!-- .container  -->
</div><!-- Start .statistics-section  -->


<!-- Start .pricing-section  -->
<div id="pricing" class="pricing-section section pb-80">
  <div class="imagebg">
    <img src="images/pricing-bg.jpg" alt="pricing-bg">
  </div>
  <div class="gradiant-background gradiant-overlay gradiant-light"></div>
  <!-- .gradiant-background  /exta div for transparent gradiant overlay /  -->
  <div class="container tab-fix">
    <div class="section-head heading-light text-center">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h2 class="heading heading-light">Choose your plan</h2>
          <p>Nam et sagittis diam. Sed tempor augue sit amet egestas scelerisque. Orci varius natoque penatibus et
            magnis dis parturient montes, nascetur ridiculus mus.</p>
        </div>
      </div>
    </div><!-- .col -->
    <div class="row text-center">
      <div class="col-md-4 col-sm-12">
        <div class="pricing-box pricing-box-curbed wow fadeIn" data-wow-duration="1s">
          <div class="pricing-top gradiant-background">
            <h5>Basic Plan</h5>
            <h2>$19.99</h2>
          </div>
          <div class="pricing-bottom">
            <ul class="text-left">
              <li><em class="ti ti-check"></em>Always Open</li>
              <li><em class="ti ti-check"></em>Free Tutorial</li>
              <li><em class="ti ti-close"></em>24/7 Live Support</li>
              <li><em class="ti ti-close"></em>Free Subscription</li>
              <li><em class="ti ti-close"></em>12 Videos</li>
            </ul>
            <a href="#" class="button button-uppercase"> Sign Up</a>
          </div>
        </div>
      </div><!-- .col  -->
      <div class="col-md-4 col-sm-12">
        <div class="pricing-box pricing-box-curbed wow fadeIn" data-wow-duration="1s">
          <div class="pricing-top gradiant-background">
            <span class="pricing-badge">Most Popular</span>
            <h5>Premium plan</h5>
            <h2>$31.99</h2>
          </div>
          <div class="pricing-bottom">
            <ul class="text-left">
              <li><em class="ti ti-check"></em>Always Open</li>
              <li><em class="ti ti-check"></em>Free Tutorial</li>
              <li><em class="ti ti-check"></em>24/7 Live Support</li>
              <li><em class="ti ti-close"></em>Free Subscription</li>
              <li><em class="ti ti-close"></em>12 Videos</li>
            </ul>
            <a href="#" class="button button-uppercase"> Sign Up</a>
          </div>
        </div>
      </div><!-- .col  -->
      <div class="col-md-4 col-sm-12">
        <div class="pricing-box pricing-box-curbed wow fadeIn" data-wow-duration="1s">
          <div class="pricing-top gradiant-background">
            <h5>Business Plan</h5>
            <h2>$49.99</h2>
          </div>
          <div class="pricing-bottom">
            <ul class="text-left">
              <li><em class="ti ti-check"></em>Always Open</li>
              <li><em class="ti ti-check"></em>Free Tutorial</li>
              <li><em class="ti ti-check"></em>24/7 Live Support</li>
              <li><em class="ti ti-check"></em>Free Subscription</li>
              <li><em class="ti ti-check"></em>12 Videos</li>
            </ul>
            <a href="#" class="button button-uppercase"> Sign Up</a>
          </div>
        </div>
      </div><!-- .col  -->
    </div><!-- .row -->
  </div><!-- .container -->
</div><!-- .pricing-section  -->


<!-- Start .faq-section  -->
<div class="faq-section section white-bg pt-120 pb-100">
  <div class="container">
    <div class="faq-alt">
      <div class="row tab-fix">
        <div class="col-md-4 tab-center mobile-center col-md-offset-1">
          <div class="side-heading">
            <h2 class="heading">AppsLand <span>FAQ</span></h2>
            <p>We got you coverd, check those faq if its not there just <a class="nav-item" href="#contacts">ask</a> us.
            </p>
          </div>
        </div><!-- .col  -->
        <div class="col-md-6">
          <!-- Accordion -->
          <div class="panel-group accordion" id="another" role="tablist" aria-multiselectable="true">
            <!-- each panel for accordion -->
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="accordion-i1">
                <h6 class="panel-title">
                  <a role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i1"
                    aria-expanded="false">
                    Is this app free to use for business or commercial use ?
                    <span class="plus-minus"><span></span></span>
                  </a>
                </h6>
              </div>
              <div id="accordion-pane-i1" class="panel-collapse collapse in" role="tabpanel"
                aria-labelledby="accordion-i1">
                <div class="panel-body">
                  <p>Internal audit is an independent, objective assurance and consulting activity designed to add value
                    and improve an organization an independent, objective assurance and consulting activity.</p>
                </div>
              </div>
            </div>
            <!-- each panel for accordion -->
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="accordion-i2">
                <h6 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#another"
                    href="#accordion-pane-i2" aria-expanded="false">
                    How do i make a support request with this app?
                    <span class="plus-minus"><span></span></span>
                  </a>
                </h6>
              </div>
              <div id="accordion-pane-i2" class="panel-collapse collapse" role="tabpanel"
                aria-labelledby="accordion-i2">
                <div class="panel-body">
                  <p>Internal audit is an independent, objective assurance and consulting activity designed to add value
                    and improve an organization an independent, objective assurance and consulting activity.</p>
                </div>
              </div>
            </div>
            <!-- each panel for accordion -->
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="accordion-i3">
                <h6 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#another"
                    href="#accordion-pane-i3" aria-expanded="false">
                    How and where can we download latest update ?
                    <span class="plus-minus"><span></span></span>
                  </a>
                </h6>
              </div>
              <div id="accordion-pane-i3" class="panel-collapse collapse" role="tabpanel"
                aria-labelledby="accordion-i3">
                <div class="panel-body">
                  <p>Internal audit is an independent, objective assurance and consulting activity designed to add value
                    and improve an organization an independent, objective assurance and consulting activity.</p>
                </div>
              </div>
            </div>
            <!-- each panel for accordion -->
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="accordion-i4">
                <h6 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#another"
                    href="#accordion-pane-i4" aria-expanded="false">
                    Is there any premium version with extended features ?
                    <span class="plus-minus"><span></span></span>
                  </a>
                </h6>
              </div>
              <div id="accordion-pane-i4" class="panel-collapse collapse" role="tabpanel"
                aria-labelledby="accordion-i4">
                <div class="panel-body">
                  <p>Internal audit is an independent, objective assurance and consulting activity designed to add value
                    and improve an organization an independent, objective assurance and consulting activity.</p>
                </div>
              </div>
            </div><!-- end each panel -->
            <!-- each panel for accordion -->
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="accordion-i5">
                <h6 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#another"
                    href="#accordion-pane-i5" aria-expanded="false">
                    Where do i find any details documentation ?
                    <span class="plus-minus"><span></span></span>
                  </a>
                </h6>
              </div>
              <div id="accordion-pane-i5" class="panel-collapse collapse" role="tabpanel"
                aria-labelledby="accordion-i5">
                <div class="panel-body">
                  <p>Internal audit is an independent, objective assurance and consulting activity designed to add value
                    and improve an organization an independent, objective assurance and consulting activity.</p>
                </div>
              </div>
            </div><!-- end each panel -->
            <!-- each panel for accordion -->
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="accordion-i6">
                <h6 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#another"
                    href="#accordion-pane-i6" aria-expanded="false">
                    Are you gays aviable for making custom apps ?
                    <span class="plus-minus"><span></span></span>
                  </a>
                </h6>
              </div>
              <div id="accordion-pane-i6" class="panel-collapse collapse" role="tabpanel"
                aria-labelledby="accordion-i6">
                <div class="panel-body">
                  <p>Internal audit is an independent, objective assurance and consulting activity designed to add value
                    and improve an organization an independent, objective assurance and consulting activity.</p>
                </div>
              </div>
            </div><!-- end each panel -->
          </div><!-- Accordion #end -->
        </div><!-- .col  -->
      </div><!-- .row  -->
    </div><!-- .faq  -->
  </div><!-- .container  -->
</div><!-- .faq-section  -->


<!-- Start .team-section  -->
<div class="team-section section grey-background pb-90" id="team">
  <div class="container">
    <div class="section-head text-center">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h2 class="heading">Our <span>Team</span></h2>
          <p>Nam et sagittis diam. Sed tempor augue sit amet egestas scelerisque. Orci varius natoque penatibus et
            magnis dis parturient montes, nascetur ridiculus mus.</p>
        </div>
      </div>
    </div><!-- .section-head  -->
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="team-member">
          <div class="team-photo">
            <img src="images/team-a.jpg" alt="team" />
            <a href="#team-profile-1" class="expand-trigger content-popup"><span class="ti ti-plus"></span></a>
          </div>
          <div class="team-info">
            <h4 class="name">Robert Miller</h4>
            <p class="sub-title">UI/UX Designer</p>
          </div>
          <!-- Start .team-profile  -->
          <div id="team-profile-1" class="team-profile mfp-hide">
            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
            <div class="container-fluid">
              <div class="row no-mg">
                <div class="col-md-6">
                  <div class="team-profile-photo">
                    <img src="images/team-a.jpg" alt="team" />
                  </div>
                </div><!-- .col  -->
                <div class="col-md-6">
                  <div class="team-profile-info">
                    <h3 class="name">Robert Miller</h3>
                    <p class="sub-title">UI/UX Designer</p>
                    <ul class="social">
                      <li><a href="#"><em class="fa fa-facebook"></em></a></li>
                      <li><a href="#"><em class="fa fa-twitter"></em></a></li>
                      <li><a href="#"><em class="fa fa-google-plus"></em></a></li>
                      <li><a href="#"><em class="fa fa-instagram"></em></a></li>
                    </ul>
                    <p>He is a great man to work Lorem ipsum dolor sit amet, consec tetur adipis icing elit. Simi lique,
                      autem. </p>
                    <p>Tenetur quos facere magnam volupt ates quas esse Sedrep ell endus mole stiae tates quas esse Sed
                      repell endus molesti aela uda ntium quis quam iusto minima thanks.</p>
                    <div class="skill-bars">
                      <div class="single-skill-bar">
                        <div class="row no-mg">
                          <div class="col-xs-8 no-pd"><span class="skill-title">HTML5</span></div>
                          <div class="col-xs-4 text-right no-pd"><span class="skill-percent">85%</span></div>
                        </div>
                        <div class="skill-bar">
                          <div class="skill-bar-percent gradiant-background" style="width:85%"></div>
                        </div>
                      </div>
                      <div class="single-skill-bar">
                        <div class="row no-mg">
                          <div class="col-xs-8 no-pd"><span class="skill-title">CSS3</span></div>
                          <div class="col-xs-4 text-right no-pd"><span class="skill-percent">90%</span></div>
                        </div>
                        <div class="skill-bar">
                          <div class="skill-bar-percent gradiant-background" style="width:90%"></div>
                        </div>
                      </div>
                      <div class="single-skill-bar">
                        <div class="row no-mg">
                          <div class="col-xs-8 no-pd"><span class="skill-title">Java</span></div>
                          <div class="col-xs-4 text-right no-pd"><span class="skill-percent">75%</span></div>
                        </div>
                        <div class="skill-bar">
                          <div class="skill-bar-percent gradiant-background" style="width:75%"></div>
                        </div>
                      </div>
                      <div class="single-skill-bar">
                        <div class="row no-mg">
                          <div class="col-xs-8 no-pd"><span class="skill-title">Node.js</span></div>
                          <div class="col-xs-4 text-right no-pd"><span class="skill-percent">80%</span></div>
                        </div>
                        <div class="skill-bar">
                          <div class="skill-bar-percent gradiant-background" style="width:80%"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- .col  -->
              </div><!-- .row  -->
            </div><!-- .container  -->
          </div><!-- .team-profile  -->
        </div>
      </div><!-- .col  -->
      <div class="col-md-3 col-sm-6">
        <div class="team-member">
          <div class="team-photo">
            <img src="images/team-b.jpg" alt="team" />
            <a href="#team-profile-2" class="expand-trigger content-popup"><span class="ti ti-plus"></span></a>
          </div>
          <div class="team-info">
            <h4 class="name">Stephen Everett</h4>
            <p class="sub-title">Fornt-End Developer</p>
          </div>
          <!-- Start .team-profile  -->
          <div id="team-profile-2" class="team-profile mfp-hide">
            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
            <div class="container-fluid">
              <div class="row no-mg">
                <div class="col-md-6">
                  <div class="team-profile-photo">
                    <img src="images/team-b.jpg" alt="team" />
                  </div>
                </div><!-- .col  -->
                <div class="col-md-6">
                  <div class="team-profile-info">
                    <h3 class="name">Stephen Everett</h3>
                    <p class="sub-title">Fornt-End Developer</p>
                    <ul class="social">
                      <li><a href="#"><em class="fa fa-facebook"></em></a></li>
                      <li><a href="#"><em class="fa fa-twitter"></em></a></li>
                      <li><a href="#"><em class="fa fa-google-plus"></em></a></li>
                      <li><a href="#"><em class="fa fa-instagram"></em></a></li>
                    </ul>
                    <p>He is a great man to work Lorem ipsum dolor sit amet, consec tetur adipis icing elit. Simi lique,
                      autem. </p>
                    <p>Tenetur quos facere magnam volupt ates quas esse Sedrep ell endus mole stiae tates quas esse Sed
                      repell endus molesti aela uda ntium quis quam iusto minima thanks.</p>
                    <div class="skill-bars">
                      <div class="single-skill-bar">
                        <div class="row no-mg">
                          <div class="col-xs-8 no-pd"><span class="skill-title">HTML5</span></div>
                          <div class="col-xs-4 text-right no-pd"><span class="skill-percent">85%</span></div>
                        </div>
                        <div class="skill-bar">
                          <div class="skill-bar-percent gradiant-background" style="width:85%"></div>
                        </div>
                      </div>
                      <div class="single-skill-bar">
                        <div class="row no-mg">
                          <div class="col-xs-8 no-pd"><span class="skill-title">CSS3</span></div>
                          <div class="col-xs-4 text-right no-pd"><span class="skill-percent">90%</span></div>
                        </div>
                        <div class="skill-bar">
                          <div class="skill-bar-percent gradiant-background" style="width:90%"></div>
                        </div>
                      </div>
                      <div class="single-skill-bar">
                        <div class="row no-mg">
                          <div class="col-xs-8 no-pd"><span class="skill-title">Java</span></div>
                          <div class="col-xs-4 text-right no-pd"><span class="skill-percent">75%</span></div>
                        </div>
                        <div class="skill-bar">
                          <div class="skill-bar-percent gradiant-background" style="width:75%"></div>
                        </div>
                      </div>
                      <div class="single-skill-bar">
                        <div class="row no-mg">
                          <div class="col-xs-8 no-pd"><span class="skill-title">Node.js</span></div>
                          <div class="col-xs-4 text-right no-pd"><span class="skill-percent">80%</span></div>
                        </div>
                        <div class="skill-bar">
                          <div class="skill-bar-percent gradiant-background" style="width:80%"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- .col  -->
              </div><!-- .row  -->
            </div><!-- .container  -->
          </div><!-- .team-profile  -->
        </div>
      </div><!-- .col  -->
      <div class="col-md-3 col-sm-6">
        <div class="team-member">
          <div class="team-photo">
            <img src="images/team-c.jpg" alt="team" />
            <a href="#team-profile-3" class="expand-trigger content-popup"><span class="ti ti-plus"></span></a>
          </div>
          <div class="team-info">
            <h4 class="name">Philip Hennessy</h4>
            <p class="sub-title">FullStack Developer</p>
          </div>
          <!-- Start .team-profile  -->
          <div id="team-profile-3" class="team-profile mfp-hide">
            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
            <div class="container-fluid">
              <div class="row no-mg">
                <div class="col-md-6">
                  <div class="team-profile-photo">
                    <img src="images/team-c.jpg" alt="team" />
                  </div>
                </div><!-- .col  -->
                <div class="col-md-6">
                  <div class="team-profile-info">
                    <h3 class="name">Philip Hennessy</h3>
                    <p class="sub-title">FullStack Developer</p>
                    <ul class="social">
                      <li><a href="#"><em class="fa fa-facebook"></em></a></li>
                      <li><a href="#"><em class="fa fa-twitter"></em></a></li>
                      <li><a href="#"><em class="fa fa-google-plus"></em></a></li>
                      <li><a href="#"><em class="fa fa-instagram"></em></a></li>
                    </ul>
                    <p>He is a great man to work Lorem ipsum dolor sit amet, consec tetur adipis icing elit. Simi lique,
                      autem. </p>
                    <p>Tenetur quos facere magnam volupt ates quas esse Sedrep ell endus mole stiae tates quas esse Sed
                      repell endus molesti aela uda ntium quis quam iusto minima thanks.</p>
                    <div class="skill-bars">
                      <div class="single-skill-bar">
                        <div class="row no-mg">
                          <div class="col-xs-8 no-pd"><span class="skill-title">HTML5</span></div>
                          <div class="col-xs-4 text-right no-pd"><span class="skill-percent">85%</span></div>
                        </div>
                        <div class="skill-bar">
                          <div class="skill-bar-percent gradiant-background" style="width:85%"></div>
                        </div>
                      </div>
                      <div class="single-skill-bar">
                        <div class="row no-mg">
                          <div class="col-xs-8 no-pd"><span class="skill-title">CSS3</span></div>
                          <div class="col-xs-4 text-right no-pd"><span class="skill-percent">90%</span></div>
                        </div>
                        <div class="skill-bar">
                          <div class="skill-bar-percent gradiant-background" style="width:90%"></div>
                        </div>
                      </div>
                      <div class="single-skill-bar">
                        <div class="row no-mg">
                          <div class="col-xs-8 no-pd"><span class="skill-title">Java</span></div>
                          <div class="col-xs-4 text-right no-pd"><span class="skill-percent">75%</span></div>
                        </div>
                        <div class="skill-bar">
                          <div class="skill-bar-percent gradiant-background" style="width:75%"></div>
                        </div>
                      </div>
                      <div class="single-skill-bar">
                        <div class="row no-mg">
                          <div class="col-xs-8 no-pd"><span class="skill-title">Node.js</span></div>
                          <div class="col-xs-4 text-right no-pd"><span class="skill-percent">80%</span></div>
                        </div>
                        <div class="skill-bar">
                          <div class="skill-bar-percent gradiant-background" style="width:80%"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- .col  -->
              </div><!-- .row  -->
            </div><!-- .container  -->
          </div><!-- .team-profile  -->
        </div>
      </div><!-- .col  -->
      <div class="col-md-3 col-sm-6">
        <div class="team-member">
          <div class="team-photo">
            <img src="images/team-d.jpg" alt="team" />
            <a href="#team-profile-4" class="expand-trigger content-popup"><span class="ti ti-plus"></span></a>
          </div>
          <div class="team-info">
            <h4 class="name">Nicholas Miller</h4>
            <p class="sub-title">Development Team Lead</p>
          </div>
          <!-- Start .team-profile  -->
          <div id="team-profile-4" class="team-profile mfp-hide">
            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
            <div class="container-fluid">
              <div class="row no-mg">
                <div class="col-md-6">
                  <div class="team-profile-photo">
                    <img src="images/team-d.jpg" alt="team" />
                  </div>
                </div><!-- .col  -->
                <div class="col-md-6">
                  <div class="team-profile-info">
                    <h3 class="name">Nicholas Miller</h3>
                    <p class="sub-title">Development Team Lead</p>
                    <ul class="social">
                      <li><a href="#"><em class="fa fa-facebook"></em></a></li>
                      <li><a href="#"><em class="fa fa-twitter"></em></a></li>
                      <li><a href="#"><em class="fa fa-google-plus"></em></a></li>
                      <li><a href="#"><em class="fa fa-instagram"></em></a></li>
                    </ul>
                    <p>He is a great man to work Lorem ipsum dolor sit amet, consec tetur adipis icing elit. Simi lique,
                      autem. </p>
                    <p>Tenetur quos facere magnam volupt ates quas esse Sedrep ell endus mole stiae tates quas esse Sed
                      repell endus molesti aela uda ntium quis quam iusto minima thanks.</p>
                    <div class="skill-bars">
                      <div class="single-skill-bar">
                        <div class="row no-mg">
                          <div class="col-xs-8 no-pd"><span class="skill-title">HTML5</span></div>
                          <div class="col-xs-4 text-right no-pd"><span class="skill-percent">85%</span></div>
                        </div>
                        <div class="skill-bar">
                          <div class="skill-bar-percent gradiant-background" style="width:85%"></div>
                        </div>
                      </div>
                      <div class="single-skill-bar">
                        <div class="row no-mg">
                          <div class="col-xs-8 no-pd"><span class="skill-title">CSS3</span></div>
                          <div class="col-xs-4 text-right no-pd"><span class="skill-percent">90%</span></div>
                        </div>
                        <div class="skill-bar">
                          <div class="skill-bar-percent gradiant-background" style="width:90%"></div>
                        </div>
                      </div>
                      <div class="single-skill-bar">
                        <div class="row no-mg">
                          <div class="col-xs-8 no-pd"><span class="skill-title">Java</span></div>
                          <div class="col-xs-4 text-right no-pd"><span class="skill-percent">75%</span></div>
                        </div>
                        <div class="skill-bar">
                          <div class="skill-bar-percent gradiant-background" style="width:75%"></div>
                        </div>
                      </div>
                      <div class="single-skill-bar">
                        <div class="row no-mg">
                          <div class="col-xs-8 no-pd"><span class="skill-title">Node.js</span></div>
                          <div class="col-xs-4 text-right no-pd"><span class="skill-percent">80%</span></div>
                        </div>
                        <div class="skill-bar">
                          <div class="skill-bar-percent gradiant-background" style="width:80%"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- .col  -->
              </div><!-- .row  -->
            </div><!-- .container  -->
          </div><!-- .team-profile  -->
        </div>
      </div><!-- .col  -->
    </div><!-- .row  -->
  </div><!-- .container  -->
</div><!-- .team-section  -->


<!-- Start .testimonial-section  -->
<div id="testimonial" class="testimonial-section section white-bg pb-120">
  <div class="imagebg">
    <img src="images/testimonial-bg.png" alt="testimonial-bg">
  </div>
  <div class="container">
    <div class="section-head text-center">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h2 class="heading">What our <span>client say !</span></h2>
          <p>Nam et sagittis diam. Sed tempor augue sit amet egestas scelerisque. Orci varius natoque penatibus et
            magnis dis parturient montes, nascetur ridiculus mus.</p>
        </div>
      </div>
    </div><!-- .section-head  -->
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="testimonial-carousel has-carousel" data-items="1" data-loop="true" data-dots="true" data-auto="true"
          data-navs="false">
          <div class="item text-center">
            <div class="quotes">
              <img src="images/quote-icon.png" class="quote-icon" alt="quote-icon" />
              <blockquote>Nam et sagittis diam. Sed tempor augue sit amet egestas scelerisque. Orci varius natoque
                penatibus et magnis dis parturient montes nascetur.</blockquote>
              <h6>Andy Lovell</h6>
              <div class="client-image">
                <img src="images/client-1.jpg" alt="client" />
              </div>
            </div>
          </div>
          <div class="item text-center">
            <div class="quotes">
              <img src="images/quote-icon.png" class="quote-icon" alt="quote-icon" />
              <blockquote>Nam et sagittis diam. Sed tempor augue sit amet egestas scelerisque. Orci varius natoque
                penatibus et magnis dis parturient montes nascetur.</blockquote>
              <h6>Andy Lovell</h6>
              <div class="client-image">
                <img src="images/client-2.jpg" alt="client" />
              </div>
            </div>
          </div>
          <div class="item text-center">
            <div class="quotes">
              <img src="images/quote-icon.png" class="quote-icon" alt="quote-icon" />
              <blockquote>Nam et sagittis diam. Sed tempor augue sit amet egestas scelerisque. Orci varius natoque
                penatibus et magnis dis parturient montes nascetur.</blockquote>
              <h6>Andy Lovell</h6>
              <div class="client-image">
                <img src="images/client-1.jpg" alt="client" />
              </div>
            </div>
          </div>
        </div><!-- .testimonial-carousel  -->
      </div><!-- .col  -->
    </div><!-- .row  -->
  </div><!-- .container  -->
</div><!-- .testimonial-section  -->


<!-- Start .contact-section  -->
<div id="contacts" class="contact-section section gradiant-background pb-90">
  <div class="container">
    <div class="section-head heading-light text-center">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h2 class="heading heading-light">Get In Touch</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="contact-form white-bg text-center">
          <h3>Contact Us</h3>
          <p>Working contact form along send mail feature with contact form validation</p>
          <form id="contact-form" class="form-message" action="form/contact.php" method="post">
            <div class="form-results"></div>
            <div class="form-group row fix-gutter-10">
              <div class="form-field col-sm-6 gutter-10 form-m-bttm">
                <input name="contact-name" type="text" placeholder="Full Name *" class="form-control required">
              </div>
              <div class="form-field col-sm-6 gutter-10">
                <input name="contact-email" type="email" placeholder="Email *" class="form-control required email">
              </div>
            </div>
            <div class="form-group row fix-gutter-10">
              <div class="form-field col-md-6 gutter-10 form-m-bttm">
                <input name="contact-phone" type="text" placeholder="Phone Number *" class="form-control required">
              </div>
              <div class="form-field col-md-6 gutter-10">
                <input name="contact-subject" type="text" placeholder="Subject *" class="form-control required">
              </div>
            </div>
            <div class="form-group row">
              <div class="form-field col-md-12">
                <textarea name="contact-message" placeholder="Messages *"
                  class="txtarea form-control required"></textarea>
              </div>
            </div>
            <input type="text" class="hidden" name="form-anti-honeypot" value="">
            <button type="submit" class="button solid-btn sb-h">Submit</button>
          </form>
        </div>
      </div><!-- .col  -->
      <div class="col-md-6">
        <div class="contact-info white-bg">
          <div class="row">
            <div class="col-sm-6">
              <h6><em class="fa fa-envelope"></em> example@gmail.com</h6>
            </div>
            <div class="col-sm-6">
              <h6><em class="fa fa-phone"></em> (+123) 456 - 7890</h6>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <h6><em class="fa fa-map-marker"></em> 217 Summit Boulevard Birmingham, AL 35243</h6>
            </div>
          </div>
        </div>
        <div id="gMap" class="google-map"></div>
      </div><!-- .col  -->
    </div><!-- .row  -->
  </div><!-- .container  -->
</div><!-- .contact-section  -->

@endsection