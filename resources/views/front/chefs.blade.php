@extends('front.layouts.base')

@section('title')  @endsection

@section('description')  @endsection
@section('image') @endsection
@section('link'){{ route('contact')}} @endsection

@section('content')


      <!--================ Breadcrumb ================-->
      <div class="mad-breadcrumb with-bg" data-bg-image-src="{{ asset('assets/html/lemar/images/0B5DF75D-686C-4561-92A4-6F399A8707FF (1).webp') }}">
        <div class="container">
          <nav class="mad-breadcrumb-path"><span><a href="index.html">Home</a></span> - <span>Team Members and Awards</span>
          </nav>
          <h1 class="mad-page-title">Team Members and Awards</h1>
        </div>
      </div>
      <!--================ End of Breadcrumb ================-->
      <div class="mad-content mad-content--no-pb">
        <div class="container">
          <div class="content-element-17">
            <h2>Team Members v1</h2>
            <!--================ Team Members ================-->
            <div class="mad-team big-type">
              <div class="mad-col">
                <!--================ Team Member ================-->
                <figure class="mad-team-member">
                  <a href="javascript:void(0)" class="mad-team-member-photo"><img src="{{ asset('assets/html/lemar/images/688x576_photo1.jpg') }}" alt=""></a>
                  <figcaption class="mad-team-member-info">
                    <div class="mad-info-wrap">
                      <div class="mad-info-header">
                        <h2 class="mad-team-member-name"><a href="#">Albert Brown</a></h2>
                        <div class="mad-member-stat">Executive Chef</div>
                      </div>
                      <p>Ut pharetra augue nec augue. Nam elit agna,endrerit sit amet, tincidunt ac, viverra sed, nulla. Donec porta diam eu
                      massa. Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae, pede.</p>
                      <p>Donec in velit vel ipsum auctor pulvinar. Vestibulum iaculis lacinia est. Proin dictum elementum velit. Fusce euismod
                      consequat ante. Lorem ipsum dolor sit amet, consectetuer adipis.</p>
                      <div class="mad-social-icons size-big style-3">
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
                  <a href="javascript:void(0)" class="mad-team-member-photo"><img src="{{ asset('assets/html/lemar/images/688x576_photo2.jpg') }}" alt=""></a>
                  <figcaption class="mad-team-member-info">
                    <div class="mad-info-wrap">
                      <div class="mad-info-header">
                        <h2 class="mad-team-member-name"><a href="#">Caroline Beek</a></h2>
                        <div class="mad-member-stat">General Manager</div>
                      </div>
                      <p>Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet.
                      Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula. Aliquam dapibus tincidunt metus.</p>
                      <p>Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac, lorem. Vestibulum sed ante. Donec sagittis euismod
                      purus.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
                      <div class="mad-social-icons size-big style-3">
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
            <!--================ End Of Team Members ================-->
          </div>
          <div class="content-element-17">
            <h2>Team Members v2</h2>
            <!--================ Team Members ================-->
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
            <!--================ End Of Team Members ================-->
          </div>
          <div class="content-element-17">
            <h2>Team Members v3</h2>
            <!--================ Team Members ================-->
            <div class="mad-team style-2 item-col-4">
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
                      <div class="mad-social-icons style-2">
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
                      <div class="mad-social-icons style-2">
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
                      <div class="mad-social-icons style-2">
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
                      <div class="mad-social-icons style-2">
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
            <!--================ End Of Team Members ================-->
          </div>
          <div class="content-element-17">
            <h2>Awards v1</h2>
            <!--================ Partners ================-->
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
            <!--================ End of Partners ================-->
          </div>
          <div data-bg-image-src="{{ asset('assets/html/lemar/images/D3828FF7-1C50-4B2A-A640-0F66E7DD3F71 (5).webp') }}" class="mad-cta mad-section with-overlay mad-section--stretched mad-colorizer--scheme-light mad-colorizer--parallax">
            <h2 class="mad-title">Awards v2</h2>
            <!--================ Partners ================-->
            <ul class="mad-sponsors style-2 item-col-6">
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
            <!--================ End of Partners ================-->
          </div>
        </div>
      </div>

@endsection
