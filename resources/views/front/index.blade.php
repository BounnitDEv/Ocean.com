@extends('front.layouts.base')

@section('title')@endsection
@section('description')@endsection
@section('image')@endsection
@section('link'){{ route('home') }}@endsection

@section('content')


    <!--================ Slider Revolution ================-->
    <div dir="ltr" class="rev_slider_wrapper fullscreenbanner-container">
      <div id="rev-slider-1" data-version="5.4.5" class="mad-d-none rev-slider fullscreenabanner">
        <ul>
          <!--================ Slide 1 ================-->
          <li data-transition="fade">
            <!-- MAIN IMAGE -->
            <img src="{{ asset('assets/html/lemar/images/1920x1080_slide1.jpg') }}" alt="" data-bgposition="top center" data-bgfit="cover"
              data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
            <!--================ Layer ================-->
            <div
              data-frames="[{&quot;delay&quot;:200,&quot;speed&quot;:2000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power4.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
              data-x="center" data-y="center" data-hoffset="['0', '0', '0', '0']" data-voffset="['-150', '-150', '-150', '-200']"
              data-width="['660', '660', '660', '100%']" data-height="['auto']" data-textAlign="['center']" data-color="['#ffffff']"
              data-fontsize="['16']" data-lineheight="[24']" class="tp-caption tp-layer-section-subtitle"><span class="rev-sub">- est. 1967 -</span>
            </div>
            <!--================ End of Layer ================-->
            <!--================ Layer ================-->
            <div
              data-frames="[{&quot;delay&quot;:400,&quot;speed&quot;:2000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power4.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
              data-x="center" data-y="center" data-hoffset="['0', '0', '0', '0']" data-voffset="['-30', '-30', '-30', '-20']"
              data-width="['700', '700', '700', '100%']" data-height="['auto']" data-textAlign="['center']" data-color="['#ffffff']"
              data-fontsize="['72']" data-lineheight="['88']" class="tp-caption tp-resizeme tp-layer-section-title">Taste The Finest Seafood,
              Taste The Freshness</div>
            <!--================ End of Layer ================-->
            <!--================ Layer ================-->
            <div
              data-frames="[{&quot;delay&quot;:600,&quot;speed&quot;:2000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power4.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
              data-x="center" data-y="center" data-hoffset="['0', '0', '0', '0']" data-voffset="['120', '120', '120', '200']"
              data-width="['700', '700', '700', '100%']" data-textAlign="['center']" class="tp-caption">
              <a href="#" class="btn btn-style-5 btn-big">Explore The Menu</a></div>
            <!--================ End of Layer ================-->
          </li>
          <!--================ End of Slide 1 ================-->
          <!--================ Slide 2 ================-->
          <li data-transition="fade">
            <!-- MAIN IMAGE -->
            <img src="{{ asset('assets/html/lemar/images/1920x1080_slide2.jpg') }}" alt="" data-bgposition="top center" data-bgfit="cover"
              data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
            <!--================ Layer ================-->
            <div
              data-frames="[{&quot;delay&quot;:200,&quot;speed&quot;:2000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power4.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
              data-x="center" data-y="center" data-hoffset="['0', '0', '0', '0']" data-voffset="['-150', '-150', '-150', '-200']"
              data-width="['660', '660', '660', '100%']" data-height="['auto']" data-textAlign="['center']" data-color="['#ffffff']"
              data-fontsize="['16']" data-lineheight="[24']" class="tp-caption tp-layer-section-subtitle"><span class="rev-sub">-
                est. 1967 -</span>
            </div>
            <!--================ End of Layer ================-->
            <!--================ Layer ================-->
            <div
              data-frames="[{&quot;delay&quot;:400,&quot;speed&quot;:2000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power4.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
              data-x="center" data-y="center" data-hoffset="['0', '0', '0', '0']" data-voffset="['-30', '-30', '-30', '-20']"
              data-width="['700', '700', '700', '100%']" data-height="['auto']" data-textAlign="['center']" data-color="['#ffffff']"
              data-fontsize="['72']" data-lineheight="['88']" class="tp-caption tp-resizeme tp-layer-section-title">Taste The Finest
              Seafood,
              Taste The Freshness</div>
            <!--================ End of Layer ================-->
            <!--================ Layer ================-->
            <div
              data-frames="[{&quot;delay&quot;:600,&quot;speed&quot;:2000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power4.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
              data-x="center" data-y="center" data-hoffset="['0', '0', '0', '0']" data-voffset="['120', '120', '120', '200']"
              data-width="['700', '700', '700', '100%']" data-textAlign="['center']" class="tp-caption">
              <a href="#" class="btn btn-style-5 btn-big">Explore The Menu</a></div>
            <!--================ End of Layer ================-->
          </li>
          <!--================ End of Slide 2 ================-->
          <!--================ Slide 3 ================-->
          <li data-transition="fade">
            <!-- MAIN IMAGE -->
            <img src="{{ asset('assets/html/lemar/images/1920x1080_slide3.jpg') }}" alt="" data-bgposition="top center" data-bgfit="cover"
              data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
            <!--================ Layer ================-->
            <div
              data-frames="[{&quot;delay&quot;:200,&quot;speed&quot;:2000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power4.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
              data-x="center" data-y="center" data-hoffset="['0', '0', '0', '0']" data-voffset="['-150', '-150', '-150', '-200']"
              data-width="['660', '660', '660', '100%']" data-height="['auto']" data-textAlign="['center']" data-color="['#ffffff']"
              data-fontsize="['16']" data-lineheight="[24']" class="tp-caption tp-layer-section-subtitle"><span class="rev-sub">-
                est. 1967 -</span>
            </div>
            <!--================ End of Layer ================-->
            <!--================ Layer ================-->
            <div
              data-frames="[{&quot;delay&quot;:400,&quot;speed&quot;:2000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power4.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
              data-x="center" data-y="center" data-hoffset="['0', '0', '0', '0']" data-voffset="['-30', '-30', '-30', '-20']"
              data-width="['700', '700', '700', '100%']" data-height="['auto']" data-textAlign="['center']" data-color="['#ffffff']"
              data-fontsize="['72']" data-lineheight="['88']" class="tp-caption tp-resizeme tp-layer-section-title">Taste The Finest
              Seafood,
              Taste The Freshness</div>
            <!--================ End of Layer ================-->
            <!--================ Layer ================-->
            <div
              data-frames="[{&quot;delay&quot;:600,&quot;speed&quot;:2000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power4.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
              data-x="center" data-y="center" data-hoffset="['0', '0', '0', '0']" data-voffset="['120', '120', '120', '200']"
              data-width="['700', '700', '700', '100%']" data-textAlign="['center']" class="tp-caption">
              <a href="#" class="btn btn-style-5 btn-big">Explore The Menu</a></div>
            <!--================ End of Layer ================-->
          </li>
          <!--================ End of Slide 3 ================-->
        </ul>
      </div>
    </div>
    <!--================ End of Slider Revolution ================-->
    <div class="mad-content no-pd">
      <div class="container">
        <div class="mad-section mad-section--stretched mad-colorizer--scheme-">
          <div class="mad-colorizer-bg-color">
            <div class="with-svg-item svg-right-side"><img src="{{ asset('assets/html/lemar/images/top_half_right.png') }}" alt=""></div>
          </div>
          <!--================ Tabs ================-->
          <div class="mad-tabs">
            <!--================ Tabs Navigation ================-->
            <div role="tablist" aria-label="Tabs v1" class="mad-tabs-nav justify-content-center">
              <span class="mad-active"><a id="tab-1-link" href="#tab-1" role="tab" aria-selected="false" aria-controls="tab-1"
                  class="mad-tab-link">Welcome</a>
              </span>
              <span><a id="tab-2-link" href="#tab-2" role="tab" aria-selected="true" aria-controls="tab-2"
                  class="mad-tab-link">The Story</a>
              </span>
              <span><a id="tab-3-link" href="#tab-3" role="tab" aria-selected="false" aria-controls="tab-3"
                  class="mad-tab-link">Our Team</a>
              </span>
              <span><a id="tab-4-link" href="#tab-4" role="tab" aria-selected="false" aria-controls="tab-4"
                  class="mad-tab-link">Awards</a>
              </span>
            </div>
            <!--================ End of Tabs Navigation ================-->
            <!--================ Tabs Container ================-->
            <div class="mad-tabs-container">
              <!--================ Tab ================-->
              <div id="tab-1" tabindex="0" role="tabpanel" aria-labelledby="tab-1-link" class="mad-tab">
                <div class="align-center">
                  <h2>Finest Seafood & Cozy Atmosphere</h2>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum <br> dictum magna. Sed laoreet aliquam
                    leo.
                    Ut
                    tellus dolor, dapibus eget, elementum <br> vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat
                    volutpat. <br>
                    Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, <br> scelerisque eget, malesuada
                    at,
                    neque.</p>
                  <div class="mad-signa"><img src="{{ asset('assets/html/lemar/images/signature.png') }}" alt=""></div>
                </div>
              </div>
              <!--================ End of Tab ================-->
              <!--================ Tab ================-->
              <div id="tab-2" tabindex="0" role="tabpanel" aria-labelledby="tab-2-link" class="mad-tab">
                <h2 class="align-center">The Story</h2>
                <div class="row justify-content-center">
                  <div class="col-xl-4 col-sm-6">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam
                      leo. Ut
                      tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit.</p>
                    <p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum
                      libero nisl,
                      porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh.</p>
                  </div>
                  <div class="col-xl-4 col-sm-6">
                    <p>Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit agna,endrerit sit amet, tincidunt
                      ac,
                      viverra sed, nulla.</p>
                    <p>Donec porta diam eu massa. Quisque diam lorem, interdum vitae,dapibus ac, scelerisque vitae, pede. Donec eget
                      tellus non
                      erat lacinia fermentum. Donec in velit vel ipsum auctor pulvinar. Vestibulum iaculis lacinia est. Proin dictum
                      elementum
                      velit.</p>
                  </div>
                </div>
              </div>
              <!--================ End of Tab ================-->
              <!--================ Tab ================-->
              <div id="tab-3" tabindex="0" role="tabpanel" aria-labelledby="tab-3-link" class="mad-tab">
                <h2 class="align-center">Our Team</h2>
                <div class="mad-team item-col-4">
                  <div class="mad-col">
                    <!--================ Team Member ================-->
                    <figure class="mad-team-member">
                      <a href="javascript:void(0)" class="mad-team-member-photo"><img src="{{ asset('assets/html/lemar/images/328x328_photo1.jpg') }}" alt=""></a>
                      <figcaption class="mad-team-member-info">
                        <div class="mad-info-wrap">
                          <div class="mad-info-header">
                            <h6 class="mad-team-member-name"><a href="#" class="mad-link">Mark Johnson</a></h6>
                            <div class="mad-member-stat">Chef</div>
                          </div>
                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna.</p>
                          <div class="mad-social-icons style-3">
                            <ul>
                              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </figcaption>
                    </figure>
                    <!--================ End Of Team Member ================-->
                  </div>
                  <div class="mad-col">
                    <!--================ Team Member ================-->
                    <figure class="mad-team-member">
                      <a href="javascript:void(0)" class="mad-team-member-photo"><img src="{{ asset('assets/html/lemar/images/328x328_photo2.jpg') }}" alt=""></a>
                      <figcaption class="mad-team-member-info">
                        <div class="mad-info-wrap">
                          <div class="mad-info-header">
                            <h6 class="mad-team-member-name"><a href="#" class="mad-link">Edna Barton</a></h6>
                            <div class="mad-member-stat">Sous Chef</div>
                          </div>
                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna.</p>
                          <div class="mad-social-icons style-3">
                            <ul>
                              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </figcaption>
                    </figure>
                    <!--================ End Of Team Member ================-->
                  </div>
                  <div class="mad-col">
                    <!--================ Team Member ================-->
                    <figure class="mad-team-member">
                      <a href="javascript:void(0)" class="mad-team-member-photo"><img src="{{ asset('assets/html/lemar/images/328x328_photo3.jpg') }}" alt=""></a>
                      <figcaption class="mad-team-member-info">
                        <div class="mad-info-wrap">
                          <div class="mad-info-header">
                            <h6 class="mad-team-member-name"><a href="#" class="mad-link">Bradley Grosh</a></h6>
                            <div class="mad-member-stat">Cook</div>
                          </div>
                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna.</p>
                          <div class="mad-social-icons style-3">
                            <ul>
                              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </figcaption>
                    </figure>
                    <!--================ End Of Team Member ================-->
                  </div>
                  <div class="mad-col">
                    <!--================ Team Member ================-->
                    <figure class="mad-team-member">
                      <a href="javascript:void(0)" class="mad-team-member-photo"><img src="{{ asset('assets/html/lemar/images/328x328_photo4.jpg') }}" alt=""></a>
                      <figcaption class="mad-team-member-info">
                        <div class="mad-info-wrap">
                          <div class="mad-info-header">
                            <h6 class="mad-team-member-name"><a href="#" class="mad-link">John McCoist</a></h6>
                            <div class="mad-member-stat">Wine Consultant</div>
                          </div>
                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna.</p>
                          <div class="mad-social-icons style-3">
                            <ul>
                              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </figcaption>
                    </figure>
                    <!--================ End Of Team Member ================-->
                  </div>
                </div>
              </div>
              <!--================ End of Tab ================-->
              <!--================ Tab ================-->
              <div id="tab-4" tabindex="0" role="tabpanel" aria-labelledby="tab-4-link" class="mad-tab">
                <h2 class="align-center">Our Awards</h2>
                <ul class="mad-sponsors item-col-6">
                  <li class="mad-grid-item">
                    <!--================ Partners Item ================-->
                    <a href="#">
                      <img src="{{ asset('assets/html/lemar/images/sponsor1.jpg') }}" alt="">
                    </a>
                    <!--================ End of Partners Item ================-->
                  </li>
                  <li class="mad-grid-item">
                    <!--================ Partners Item ================-->
                    <a href="#">
                      <img src="{{ asset('assets/html/lemar/images/sponsor2.jpg') }}" alt="">
                    </a>
                    <!--================ End of Partners Item ================-->
                  </li>
                  <li class="mad-grid-item">
                    <!--================ Partners Item ================-->
                    <a href="#">
                      <img src="{{ asset('assets/html/lemar/images/sponsor3.jpg') }}" alt="">
                    </a>
                    <!--================ End of Partners Item ================-->
                  </li>
                  <li class="mad-grid-item">
                    <!--================ Partners Item ================-->
                    <a href="#">
                      <img src="{{ asset('assets/html/lemar/images/sponsor4.jpg') }}" alt="">
                    </a>
                    <!--================ End of Partners Item ================-->
                  </li>
                  <li class="mad-grid-item">
                    <!--================ Partners Item ================-->
                    <a href="#">
                      <img src="{{ asset('assets/html/lemar/images/sponsor5.jpg') }}" alt="">
                    </a>
                    <!--================ End of Partners Item ================-->
                  </li>
                  <li class="mad-grid-item">
                    <!--================ Partners Item ================-->
                    <a href="#">
                      <img src="{{ asset('assets/html/lemar/images/sponsor6.jpg') }}" alt="">
                    </a>
                    <!--================ End of Partners Item ================-->
                  </li>
                </ul>
              </div>
              <!--================ End of Tab ================-->
            </div>
            <!--================ End of Tabs Container ================-->
          </div>
          <!--================ End of Tabs ================-->
        </div>
        <div class="mad-section no-pd mad-section--stretched-content-no-px">
          <div class="mad-gallery">
            <div class="mad-gallery-item x2">
              <a href="#"><img src="{{ asset('assets/html/lemar/images/947x472_img1.jpg') }}" alt=""></a>
            </div>
            <div class="mad-gallery-item">
              <a href="#"><img src="{{ asset('assets/html/lemar/images/470x472_img1.jpg') }}" alt=""></a>
            </div>
            <div class="mad-gallery-item">
              <a href="#"><img src="{{ asset('assets/html/lemar/images/470x472_img2.jpg') }}" alt=""></a>
            </div>
            <div class="mad-gallery-item">
              <a href="#"><img src="{{ asset('assets/html/lemar/images/470x472_img3.jpg') }}" alt=""></a>
            </div>
            <div class="mad-gallery-item x2">
              <a href="#"><img src="{{ asset('assets/html/lemar/images/947x472_img2.jpg') }}" alt=""></a>
            </div>
            <div class="mad-gallery-item">
              <a href="#"><img src="{{ asset('assets/html/lemar/images/470x472_img4.jpg') }}" alt=""></a>
            </div>
          </div>
        </div>
        <div class="mad-section">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <figure class="mad-mark"><img src="{{ asset('assets/html/lemar/images/mark.png') }}" alt=""></figure>
            </div>
            <div class="col-lg-6">
              <h2 class="mad-title">Our Menu</h2>
              <p class="content-element-5">Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer <br> rutrum ante eu lacus. Vestibulum libero nisl,
              porta vel, scelerisque eget, male-<br>suada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. <br> Aenean
              nec eros. Vestibulum ante ipsum primis in.</p>
              <div class="btn-set">
                <a href="#" class="btn">Drink Menu</a>
                <a href="#" class="btn">Food Menu</a>
              </div>
            </div>
          </div>
        </div>
        <div class="mad-section mad-bg-section no-pd mad-section--stretched mad-colorizer--scheme- mad-colorizer--parallax"
          data-bg-image-src="{{ asset('assets/html/lemar/images/1920x616_img1.jpg') }}"></div>
        <div class="mad-section mad-section--stretched mad-colorizer--scheme-color-3 mad-colorizer--scheme-light">
          <h2 class="mad-title align-center">What We Offer</h2>
          <!--================ Icon Boxes ================-->
          <div class="mad-icon-boxes style-2 item-col-3">
            <div class="mad-col">
              <!--================ Icon Box ================-->
              <article class="mad-icon-box">
                <i class="mad-icon-box-icon"><img class="svg" src="{{ asset('assets/html/lemar/lemar_svg_icons/catering.svg') }}" alt=""></i>
                <div class="mad-icon-box-content">
                  <h6 class="mad-icon-box-title">Catering</h6>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna.
                  </p>
                  <a href="#" class="mad-read-more style-5">Find Out More <img src="{{ asset('assets/html/lemar/lemar_svg_icons/squid.svg') }}" alt=""
                      class="svg"></a>
                </div>
              </article>
              <!--================ End of Icon Box ================-->
            </div>
            <div class="mad-col">
              <!--================ Icon Box ================-->
              <article class="mad-icon-box">
                <i class="mad-icon-box-icon"><img class="svg" src="{{ asset('assets/html/lemar/lemar_svg_icons/private_dining.svg') }}" alt=""></i>
                <div class="mad-icon-box-content">
                  <h6 class="mad-icon-box-title">Private Dining</h6>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna.
                  </p>
                  <a href="#" class="mad-read-more style-5">Find Out More <img src="{{ asset('assets/html/lemar/lemar_svg_icons/squid.svg') }}" alt=""
                      class="svg"></a>
                </div>
              </article>
              <!--================ End of Icon Box ================-->
            </div>
            <div class="mad-col">
              <!--================ Icon Box ================-->
              <article class="mad-icon-box">
                <i class="mad-icon-box-icon"><img class="svg" src="{{ asset('assets/html/lemar/lemar_svg_icons/gift_cards.svg') }}" alt=""></i>
                <div class="mad-icon-box-content">
                  <h6 class="mad-icon-box-title">Gift Cards</h6>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna.
                  </p>
                  <a href="#" class="mad-read-more style-5">Find Out More <img src="{{ asset('assets/html/lemar/lemar_svg_icons/squid.svg') }}" alt=""
                      class="svg"></a>
                </div>
              </article>
              <!--================ End of Icon Box ================-->
            </div>
          </div>
          <!--================ End of Icon Boxes ================-->
        </div>
        <div class="mad-section no-pd mad-section--stretched-content-no-px">
          <div class="mad-instafeed">
            <div id="instafeed" data-get="user" data-user="customer" data-limit="5" class="mad-grid item-col-5 no-gutters"></div>
          </div>
        </div>
        <div class="mad-section mad-section--stretched mad-colorizer--scheme-color-6">
          <div class="mad-colorizer-bg-color">
            <div class="with-svg-item"><img src="{{ asset('assets/html/lemar/images/fish_left.png') }}" alt=""></div>
          </div>
          <div class="row justify-content-center">
            <div class="col-xl-8">
              <h2 class="mad-title align-center">Upcoming Events</h2>
              <!--================ Events ================-->
              <div class="mad-events">
                <!--================ Event ================-->
                <div class="mad-event">
                  <div class="mad-event-date">
                    <div class="mad-event-num">26</div>
                    December <br>
                    Saturday
                  </div>
                  <div class="mad-event-title">Christmas Brunch and Dinner</div>
                  <a href="#" class="btn">Book a Table</a>
                </div>
                <!--================ End of Event ================-->
                <!--================ Event ================-->
                <div class="mad-event">
                  <div class="mad-event-date">
                    <div class="mad-event-num">31</div>
                    December <br>
                    Thursday
                  </div>
                  <div class="mad-event-title">New Year’s Eve Celebration</div>
                  <a href="#" class="btn">Book a Table</a>
                </div>
                <!--================ End of Event ================-->
                <!--================ Event ================-->
                <div class="mad-event">
                  <div class="mad-event-date">
                    <div class="mad-event-num">14</div>
                    Fabruary <br>
                    Friday
                  </div>
                  <div class="mad-event-title">Valentine's Day Dinner</div>
                  <a href="#" class="btn">Book a Table</a>
                </div>
                <!--================ End of Event ================-->
              </div>
              <!--================ End of Events ================-->
              <div class="align-center">
                <a href="#" class="mad-read-more">View More Events <img src="{{ asset('assets/html/lemar/lemar_svg_icons/squid.svg') }}" alt="" class="svg"></a>
              </div>
            </div>
          </div>
        </div>
        <div class="mad-section no-pd mad-section--stretched-content-no-px">
          <div class="row no-gutters align-items-center">
            <div class="col-xl-6">
              <div class="mad-section-img" data-bg-image-src="{{ asset('assets/html/lemar/images/960x632_img1.jpg') }}"></div>
            </div>
            <div class="col-xl-6">
              <div class="mad-testimonials-wrap">
                <!--================ Testimonials ================-->
                <div class="mad-testimonials single-item">
                  <div class="mad-grid mad-grid--cols-1 owl-carousel">
                    <!-- owl item -->
                    <div class="mad-grid-item">
                      <div class="mad-testimonial">
                        <div data-estimate="5" class="mad-rating"></div>
                        <div class="mad-testiomonial-info">
                          <blockquote>
                            <div class="mad-title">Vestibulum ante ipsum primis.</div>
                            <p>“Luctus et ultrices posuere cubilia Curae. Suspendisse sollicitudin velit sed leo. Ut pharetra
                              augue
                              nec augue. Nam elit
                              agna, endrerit sit amet, tincidunt ac, viverra sed, nulla.”</p>
                          </blockquote>
                        </div>
                        <div class="mad-author">
                          <div class="mad-author-info">
                            <cite>Mark Johnson</cite>
                            <span>New York City, New York</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- / owl item -->
                    <!-- owl item -->
                    <div class="mad-grid-item">
                      <div class="mad-testimonial">
                        <div data-estimate="5" class="mad-rating"></div>
                        <div class="mad-testiomonial-info">
                          <blockquote>
                            <div class="mad-title">Suspendisse sollicitudin velit sed leo!</div>
                            <p>“Quisque diam lorem, interdum vitae,dapibus ac, scelerisque vitae, pede. Donec eget tellus non
                              erat
                              lacinia fermentum.
                              Donec in velit vel ipsum auctor pulvinar.”</p>
                          </blockquote>
                        </div>
                        <div class="mad-author">
                          <div class="mad-author-info">
                            <cite>Rebecca Smith</cite>
                            <span>New York City, New York</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- / owl item -->
                    <!-- owl item -->
                    <div class="mad-grid-item">
                      <div class="mad-testimonial">
                        <div data-estimate="5" class="mad-rating"></div>
                        <div class="mad-testiomonial-info">
                          <blockquote>
                            <div class="mad-title">Vestibulum ante ipsum primis.</div>
                            <p>“Luctus et ultrices posuere cubilia Curae. Suspendisse sollicitudin velit sed leo. Ut pharetra
                              augue
                              nec
                              augue. Nam elit
                              agna, endrerit sit amet, tincidunt ac, viverra sed, nulla.”</p>
                          </blockquote>
                        </div>
                        <div class="mad-author">
                          <div class="mad-author-info">
                            <cite>Mark Johnson</cite>
                            <span>New York City, New York</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- / owl item -->
                  </div>
                </div>
                <!--================ End of Testimonials ================-->
              </div>
            </div>
          </div>
        </div>
        <div class="mad-section no-pd mad-section--stretched-content-no-px">
          <div class="row row-xl-reverse no-gutters align-items-center">
            <div class="col-xl-6">
              <div class="mad-testimonials-wrap">
                <h2 class="align-center">Make a Reservation</h2>
                <p class="align-center">We accept online bookings for tables up to ten people. Larger parties can <br> be booked by phone or in person at the
                restaurant.</p>
                <form class="mad-form">
                  <div class="form-group type-2">
                    <div class="form-col with-icon">
                      <input type="text" placeholder="11/04/2020">
                      <i class="material-icons">calendar_today</i>
                    </div>
                    <div class="form-col with-icon">
                      <input type="text" placeholder="7:00 PM">
                      <i class="material-icons">access_time</i>
                    </div>
                    <div class="form-col with-icon">
                      <input type="text" placeholder="2 persons">
                      <i class="material-icons-outlined">people</i>
                    </div>
                    <div class="form-col">
                      <button class="btn btn-big">Book a Table</button>
                    </div>
                  </div>
                  <span class="mad-form-tag">Powered by OpenTable</span>
                </form>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="mad-section-img" data-bg-image-src="{{ asset('assets/html/lemar/images/960x624_img1.jpg') }}"></div>
            </div>
          </div>
        </div>
      </div>
    </div>




@endsection

@push('style')

@endpush
@push('scripts')

<script src="{{ asset('assets/html/lemar/vendors/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('assets/html/lemar/vendors/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
@endpush
