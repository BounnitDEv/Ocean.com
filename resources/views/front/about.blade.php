@extends('front.layouts.base')

@section('title')  @endsection

@section('description')  @endsection
@section('image') @endsection
@section('link'){{ route('about')}} @endsection

@section('content')


      <!--================ Breadcrumb ================-->
      <div class="mad-breadcrumb with-bg" data-bg-image-src="{{ asset('assets/html/lemar/images/D2A39B45-F7C5-417F-8B7F-31A486F0EEE9.jpeg') }}">
        <div class="container">
          <nav class="mad-breadcrumb-path"><span><a href="index.html">Home</a></span> - <span>About Us</span>
          </nav>
          <h1 class="mad-page-title">About Us</h1>
        </div>
      </div>
      <!--================ End of Breadcrumb ================-->
      <div class="mad-content no-pd">
        <div class="container">
          <div class="mad-section mad-section--stretched mad-colorizer--scheme-">
            <div class="mad-colorizer-bg-color">
              <div class="with-svg-item svg-right-side"><img src="{{ asset('assets/html/lemar/images/top_half_right.png') }}" alt=""></div>
            </div>
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="content-element-17">
                  <h2 class="align-center">Our Story</h2>
                  <div class="row">
                    <div class="col-md-6">
                      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut
                      tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit.</p>
                      <p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl,
                      porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh.</p>
                    </div>
                    <div class="col-md-6">
                      <p>Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit agna,endrerit sit amet, tincidunt ac,
                      viverra sed, nulla.</p>
                      <p>Donec porta diam eu massa. Quisque diam lorem, interdum vitae,dapibus ac, scelerisque vitae, pede. Donec eget tellus non
                      erat lacinia fermentum. Donec in velit vel ipsum auctor pulvinar. Vestibulum iaculis lacinia est. Proin dictum elementum
                      velit.</p>
                    </div>
                  </div>
                </div>
                <div class="video_wrapper video_wrapper_full js-videoWrapper">
                  <iframe class="videoIframe js-videoIframe" allowfullscreen
                    data-src="https://player.vimeo.com/video/42829407?title=0&amp;byline=0&amp;portrait=0"></iframe>
                  <button class="videoPoster js-videoPoster with-overlay"></button>
                </div>
              </div>
            </div>
          </div>
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

            <div class="mad-section">
            <h2 class="mad-section-title align-center">Testimonials</h2>
            <!--================ Testimonials ================-->
            <div class="mad-testimonials">
              <div class="mad-grid mad-grid--cols-2 owl-carousel">
                <!-- owl item -->
                <div class="mad-grid-item">
                  <div class="mad-testimonial">
                    <div data-estimate="5" class="mad-rating"></div>
                    <div class="mad-testiomonial-info">
                      <blockquote>
                        <div class="mad-title">Vestibulum ante ipsum primis.</div>
                        <p>“Luctus et ultrices posuere cubilia Curae. Suspendisse sollicitudin velit sed leo. Ut pharetra augue
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
                        <p>“Quisque diam lorem, interdum vitae,dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat
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
                        <p>“Luctus et ultrices posuere cubilia Curae. Suspendisse sollicitudin velit sed leo. Ut pharetra augue
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
                <!-- owl item -->
                <div class="mad-grid-item">
                  <div class="mad-testimonial">
                    <div data-estimate="5" class="mad-rating"></div>
                    <div class="mad-testiomonial-info">
                      <blockquote>
                        <div class="mad-title">Suspendisse sollicitudin velit sed leo!</div>
                        <p>“Quisque diam lorem, interdum vitae,dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat
                          lacinia
                          fermentum.
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
                        <p>“Luctus et ultrices posuere cubilia Curae. Suspendisse sollicitudin velit sed leo. Ut pharetra augue
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
                <!-- owl item -->
                <div class="mad-grid-item">
                  <div class="mad-testimonial">
                    <div data-estimate="5" class="mad-rating"></div>
                    <div class="mad-testiomonial-info">
                      <blockquote>
                        <div class="mad-title">Suspendisse sollicitudin velit sed leo!</div>
                        <p>“Quisque diam lorem, interdum vitae,dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat
                          lacinia
                          fermentum.
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
              </div>
            </div>
            <!--================ End of Testimonials ================-->

          </div>

          <article data-bg-image-src="{{ asset('assets/html/lemar/images/D3828FF7-1C50-4B2A-A640-0F66E7DD3F71 (7).webp') }}"
            class="mad-cta mad-section with-overlay-2 mad-section--stretched mad-colorizer--scheme- mad-colorizer--parallax">
            <div class="align-center">
              <h2 class="mad-cta-title">Enjoy unforgettable <br>
              dining experience</h2>
              <a href="#" class="btn btn-big"><span>Book a Table</span></a>
            </div>
          </article>
        </div>
      </div>

@endsection
