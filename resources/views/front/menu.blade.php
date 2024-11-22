@extends('front.layouts.base')

@section('title')  @endsection

@section('description')  @endsection
@section('image') @endsection
@section('link'){{ route('contact')}} @endsection

@section('content')

      <!--================ Breadcrumb ================-->
      <div class="mad-breadcrumb with-bg" data-bg-image-src="{{ asset('assets/html/lemar/images/1920x544_bg3.jpg') }}">
        <div class="container">
          <nav class="mad-breadcrumb-path"><span><a href="index.html">Home</a></span> - <span>Menu v4</span>
          </nav>
          <h1 class="mad-page-title">Menu v4</h1>
        </div>
      </div>
      <!--================ End of Breadcrumb ================-->
      <div class="mad-content no-pd">
        <div class="container">
          <div class="mad-section mad-section--stretched mad-colorizer--scheme-">
            <div class="mad-colorizer-bg-color">
              <div class="with-svg-item svg-right-side"><img src="{{ asset('assets/html/lemar/images/top_half_right.png') }}" alt=""></div>
            </div>
            <div class="mad-title-wrap align-center">
              <h2>Our Specialties</h2>
              <p>Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et <br> ultrices posuere cubilia Curae. Suspendisse
              sollicitudin velit sed leo.</p>
            </div>
            <div class="mad-specs style-2 item-col-3">
              <div class="mad-col">
                <!-- Specification item -->
                <div class="mad-spec-item">
                  <figure><img src="{{ asset('assets/html/lemar/images/448x272_img1.jpg') }}" alt=""></figure>
                  <div class="mad-spec-info">
                    <div class="mad-spec-header">
                      <div class="mad-spec-title">Santorini Fava</div>
                      <div class="mad-line"></div>
                      <div class="mad-spec-price">$7.00</div>
                    </div>
                    <div class="mad-spec-tags">
                      <div class="mad-spec-el">warm fava, red onion, capers</div>
                      <a href="#" class="mad-link">vegetarian</a>,
                      <a href="#" class="mad-link">vegan</a>
                    </div>
                  </div>
                </div>
                <!-- End of Specification item -->
              </div>
              <div class="mad-col">
                <!-- Specification item -->
                <div class="mad-spec-item">
                  <figure><img src="{{ asset('assets/html/lemar/images/448x272_img2.jpg') }}" alt=""></figure>
                  <div class="mad-spec-info">
                    <div class="mad-spec-header">
                      <div class="mad-spec-title">Chargrilled Seafood Platter</div>
                      <div class="mad-line"></div>
                      <div class="mad-spec-price">$34.00</div>
                    </div>
                    <div class="mad-spec-tags">
                      <div class="mad-spec-el">seabream, red tiger prawns, squid, shellfish, chargrilled broccoli & lemon (for 2 to share)</div>
                    </div>
                  </div>
                </div>
                <!-- End of Specification item -->
              </div>
              <div class="mad-col">
                <!-- Specification item -->
                <div class="mad-spec-item">
                  <figure><img src="{{ asset('assets/html/lemar/images/448x272_img3.jpg') }}" alt=""></figure>
                  <div class="mad-spec-info">
                    <div class="mad-spec-header">
                      <div class="mad-spec-title">Louie</div>
                      <div class="mad-line"></div>
                      <div class="mad-spec-price">$19.00</div>
                    </div>
                    <div class="mad-spec-tags">
                      <div class="mad-spec-el">dungeness crab, mexican wild prawns, avocado, egg, tomato, cucumber, louie dressing</div>
                    </div>
                  </div>
                </div>
                <!-- End of Specification item -->
              </div>
            </div>
          </div>
          <div data-bg-image-src="{{ asset('assets/html/lemar/images/1920x925_bg1.jpg') }}" class="mad-section with-overlay mad-section--stretched mad-colorizer--scheme- mad-colorizer--scheme-light mad-colorizer--parallax">
            <div class="align-center">
              <h2 class="mad-cta-title no-bs">Brunch</h2>
              <p>Ut pharetra augue nec augue. Nam elit agna,endrerit sit amet, tincidunt ac, <br> viverra sed, nulla. Donec porta diam eu
              massa.</p>
            </div>
          </div>
          <div class="mad-section">
            <div class="row hr-size-1">
              <div class="col-xl-4">
                <h4>Starters</h4>
                <div class="mad-specs">
                  <div class="mad-col">
                    <!-- Specification item -->
                    <div class="mad-spec-item">
                      <div class="mad-spec-info">
                        <div class="mad-spec-header">
                          <div class="mad-spec-title">New England Cheddar Biscuits</div>
                          <div class="mad-line"></div>
                          <div class="mad-spec-price">$7.00</div>
                        </div>
                        <div class="mad-spec-tags">
                          <div class="mad-spec-el">honey butter</div>
                          <a href="#" class="mad-link">vegetarian</a>,
                          <a href="#" class="mad-link">vegan</a>
                        </div>
                      </div>
                    </div>
                    <!-- End of Specification item -->
                  </div>
                  <div class="mad-col">
                    <!-- Specification item -->
                    <div class="mad-spec-item">
                      <div class="mad-spec-info">
                        <div class="mad-spec-header">
                          <div class="mad-spec-title">Crabby Patty</div>
                          <div class="mad-line"></div>
                          <div class="mad-spec-price">$9.00</div>
                        </div>
                        <div class="mad-spec-tags">
                          <div class="mad-spec-el">watercress, green apple, citrus vinaigrette</div>
                          <a href="#" class="mad-link">vegetarian</a>,
                        </div>
                      </div>
                    </div>
                    <!-- End of Specification item -->
                  </div>
                  <div class="mad-col">
                    <!-- Specification item -->
                    <div class="mad-spec-item">
                      <div class="mad-spec-info">
                        <div class="mad-spec-header">
                          <div class="mad-spec-title">Smoked Fish Dip</div>
                          <div class="mad-line"></div>
                          <div class="mad-spec-price">$6.00</div>
                        </div>
                        <div class="mad-spec-tags">
                          <div class="mad-spec-el">house pickles, hot sauce, saltines</div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Specification item -->
                  </div>
                  <div class="mad-col">
                    <!-- Specification item -->
                    <div class="mad-spec-item">
                      <div class="mad-spec-info">
                        <div class="mad-spec-header">
                          <div class="mad-spec-title">Peel n’ Eat Shrimp</div>
                          <div class="mad-line"></div>
                          <div class="mad-spec-price">$8.00</div>
                        </div>
                        <div class="mad-spec-tags">
                          <div class="mad-spec-el">warm butter, old bay</div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Specification item -->
                  </div>
                </div>
              </div>
              <div class="col-xl-4">
                <h4>Mains</h4>
                <div class="mad-specs">
                  <div class="mad-col">
                    <!-- Specification item -->
                    <div class="mad-spec-item">
                      <div class="mad-spec-info">
                        <div class="mad-spec-header">
                          <div class="mad-spec-title">Cinnamon Roll French Toast</div>
                          <div class="mad-line"></div>
                          <div class="mad-spec-price">$17.00</div>
                        </div>
                        <div class="mad-spec-tags">
                          <div class="mad-spec-el">maple toffee, creme chantilly</div>
                          <a href="#" class="mad-link">vegetarian</a>,
                          <a href="#" class="mad-link">vegan</a>
                        </div>
                      </div>
                    </div>
                    <!-- End of Specification item -->
                  </div>
                  <div class="mad-col">
                    <!-- Specification item -->
                    <div class="mad-spec-item">
                      <div class="mad-spec-info">
                        <div class="mad-spec-header">
                          <div class="mad-spec-title">Seawell Breakfast</div>
                          <div class="mad-line"></div>
                          <div class="mad-spec-price">$22.00</div>
                        </div>
                        <div class="mad-spec-tags">
                          <div class="mad-spec-el">two eggs your way, potatoes, bacon or sausage, toast</div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Specification item -->
                  </div>
                  <div class="mad-col">
                    <!-- Specification item -->
                    <div class="mad-spec-item">
                      <div class="mad-spec-info">
                        <div class="mad-spec-header">
                          <div class="mad-spec-title">Omelette</div>
                          <div class="mad-line"></div>
                          <div class="mad-spec-price">$34.00</div>
                        </div>
                        <div class="mad-spec-tags">
                          <div class="mad-spec-el">wild mushrooms, spinach, goat cheese, potatoes, toast</div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Specification item -->
                  </div>
                  <div class="mad-col">
                    <!-- Specification item -->
                    <div class="mad-spec-item">
                      <div class="mad-spec-info">
                        <div class="mad-spec-header">
                          <div class="mad-spec-title">Yellowfin Tuna Nicoise</div>
                          <div class="mad-line"></div>
                          <div class="mad-spec-price">$15.00</div>
                        </div>
                        <div class="mad-spec-tags">
                          <div class="mad-spec-el">heirloom tomatoes, fingerlings, eggs, meyer lemon vinaigrette</div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Specification item -->
                  </div>
                </div>
              </div>
              <div class="col-xl-4">
                <h4>Sides</h4>
                <div class="mad-specs">
                  <div class="mad-col">
                    <!-- Specification item -->
                    <div class="mad-spec-item">
                      <div class="mad-spec-info">
                        <div class="mad-spec-header">
                          <div class="mad-spec-title">Crispy Potatoes</div>
                          <div class="mad-line"></div>
                          <div class="mad-spec-price">$11.00</div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Specification item -->
                  </div>
                  <div class="mad-col">
                    <!-- Specification item -->
                    <div class="mad-spec-item">
                      <div class="mad-spec-info">
                        <div class="mad-spec-header">
                          <div class="mad-spec-title">Two Eggs Any Way</div>
                          <div class="mad-line"></div>
                          <div class="mad-spec-price">$5.00</div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Specification item -->
                  </div>
                  <div class="mad-col">
                    <!-- Specification item -->
                    <div class="mad-spec-item">
                      <div class="mad-spec-info">
                        <div class="mad-spec-header">
                          <div class="mad-spec-title">Fruit n’ Berries Bowl</div>
                          <div class="mad-line"></div>
                          <div class="mad-spec-price">$8.00</div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Specification item -->
                  </div>
                  <div class="mad-col">
                    <!-- Specification item -->
                    <div class="mad-spec-item">
                      <div class="mad-spec-info">
                        <div class="mad-spec-header">
                          <div class="mad-spec-title">Yogurt</div>
                          <div class="mad-line"></div>
                          <div class="mad-spec-price">$4.00</div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Specification item -->
                  </div>
                  <div class="mad-col">
                    <!-- Specification item -->
                    <div class="mad-spec-item">
                      <div class="mad-spec-info">
                        <div class="mad-spec-header">
                          <div class="mad-spec-title">Bagel, Croissant or Toast</div>
                          <div class="mad-line"></div>
                          <div class="mad-spec-price">$5.00</div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Specification item -->
                  </div>
                  <div class="mad-col">
                    <!-- Specification item -->
                    <div class="mad-spec-item">
                      <div class="mad-spec-info">
                        <div class="mad-spec-header">
                          <div class="mad-spec-title">Bircher Muesli Parfait</div>
                          <div class="mad-line"></div>
                          <div class="mad-spec-price">$9.00</div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Specification item -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div data-bg-image-src="{{ asset('assets/html/lemar/images/1920x920_bg1.jpg') }}"
            class="mad-section with-overlay mad-section--stretched mad-colorizer--scheme- mad-colorizer--scheme-light mad-colorizer--parallax">
            <div class="align-center">
              <h2 class="mad-cta-title no-bs">Dinner</h2>
              <p>Quisque diam lorem, interdum vitae,dapibus ac, scelerisque vitae, pede. <br> Donec eget tellus non erat lacinia fermentum.</p>
            </div>
          </div>
          <div class="mad-section">
            <div class="row hr-size-1">
              <div class="col-xl-4">
                <div class="content-element-9">
                  <h4>Starters</h4>
                  <!-- Our Specifications -->
                  <div class="mad-specs">
                    <div class="mad-col">
                      <!-- Specification item -->
                      <div class="mad-spec-item">
                        <div class="mad-spec-info">
                          <div class="mad-spec-header">
                            <div class="mad-spec-title">Santorini Fava</div>
                            <div class="mad-line"></div>
                            <div class="mad-spec-price">$7.00</div>
                          </div>
                          <div class="mad-spec-tags">
                            <div class="mad-spec-el">warm fava, red onion, capers</div>
                            <a href="#" class="mad-link">vegetarian</a>,
                            <a href="#" class="mad-link">vegan</a>
                          </div>
                        </div>
                      </div>
                      <!-- End of Specification item -->
                    </div>
                    <div class="mad-col">
                      <!-- Specification item -->
                      <div class="mad-spec-item">
                        <div class="mad-spec-info">
                          <div class="mad-spec-header">
                            <div class="mad-spec-title">Kopanisti</div>
                            <div class="mad-line"></div>
                            <div class="mad-spec-price">$9.00</div>
                          </div>
                          <div class="mad-spec-tags">
                            <div class="mad-spec-el">roasted red pepper, feta, boukovo chili</div>
                            <a href="#" class="mad-link">vegetarian</a>,
                            <a href="#" class="mad-link">vegan</a>
                          </div>
                        </div>
                      </div>
                      <!-- End of Specification item -->
                    </div>
                    <div class="mad-col">
                      <!-- Specification item -->
                      <div class="mad-spec-item">
                        <div class="mad-spec-info">
                          <div class="mad-spec-header">
                            <div class="mad-spec-title">Cured Sea Trout</div>
                            <div class="mad-line"></div>
                            <div class="mad-spec-price">$6.00</div>
                          </div>
                          <div class="mad-spec-tags">
                            <div class="mad-spec-el">roast beetroot &amp; beetroot ketchup</div>
                          </div>
                        </div>
                      </div>
                      <!-- End of Specification item -->
                    </div>
                    <div class="mad-col">
                      <!-- Specification item -->
                      <div class="mad-spec-item">
                        <div class="mad-spec-info">
                          <div class="mad-spec-header">
                            <div class="mad-spec-title">Seafood Soup</div>
                            <div class="mad-line"></div>
                            <div class="mad-spec-price">$8.00</div>
                          </div>
                          <div class="mad-spec-tags">
                            <div class="mad-spec-el">gruyere, garlic croutons &amp; rouille</div>
                          </div>
                        </div>
                      </div>
                      <!-- End of Specification item -->
                    </div>
                    <div class="mad-col">
                      <!-- Specification item -->
                      <div class="mad-spec-item">
                        <div class="mad-spec-info">
                          <div class="mad-spec-header">
                            <div class="mad-spec-title">Wild Red Tiger Prawns</div>
                            <div class="mad-line"></div>
                            <div class="mad-spec-price">$11.00</div>
                          </div>
                          <div class="mad-spec-tags">
                            <div class="mad-spec-el">herb butter, chargrilled sourdough</div>
                          </div>
                        </div>
                      </div>
                      <!-- End of Specification item -->
                    </div>
                  </div>
                  <!-- End of Our Specifications -->
                </div>
                <div class="content-element-9">
                  <h4>Sides</h4>
                  <!-- Our Specifications -->
                  <div class="mad-specs">
                    <div class="mad-col">
                      <!-- Specification item -->
                      <div class="mad-spec-item">
                        <div class="mad-spec-info">
                          <div class="mad-spec-header">
                            <div class="mad-spec-title">Smashed Potatoes</div>
                            <div class="mad-line"></div>
                            <div class="mad-spec-price">$7.00</div>
                          </div>
                          <div class="mad-spec-tags">
                            <a href="#" class="mad-link">vegetarian</a>,
                            <a href="#" class="mad-link">vegan</a>
                          </div>
                        </div>
                      </div>
                      <!-- End of Specification item -->
                    </div>
                    <div class="mad-col">
                      <!-- Specification item -->
                      <div class="mad-spec-item">
                        <div class="mad-spec-info">
                          <div class="mad-spec-header">
                            <div class="mad-spec-title">Fresh Green Beans</div>
                            <div class="mad-line"></div>
                            <div class="mad-spec-price">$9.00</div>
                          </div>
                          <div class="mad-spec-tags">
                            <a href="#" class="mad-link">vegetarian</a>,
                            <a href="#" class="mad-link">vegan</a>
                          </div>
                        </div>
                      </div>
                      <!-- End of Specification item -->
                    </div>
                    <div class="mad-col">
                      <!-- Specification item -->
                      <div class="mad-spec-item">
                        <div class="mad-spec-info">
                          <div class="mad-spec-header">
                            <div class="mad-spec-title">Rice Pilaf</div>
                            <div class="mad-line"></div>
                            <div class="mad-spec-price">$6.00</div>
                          </div>
                        </div>
                      </div>
                      <!-- End of Specification item -->
                    </div>
                    <div class="mad-col">
                      <!-- Specification item -->
                      <div class="mad-spec-item">
                        <div class="mad-spec-info">
                          <div class="mad-spec-header">
                            <div class="mad-spec-title">French Fries</div>
                            <div class="mad-line"></div>
                            <div class="mad-spec-price">$8.00</div>
                          </div>
                        </div>
                      </div>
                      <!-- End of Specification item -->
                    </div>
                    <div class="mad-col">
                      <!-- Specification item -->
                      <div class="mad-spec-item">
                        <div class="mad-spec-info">
                          <div class="mad-spec-header">
                            <div class="mad-spec-title">Grilled Asparagus</div>
                            <div class="mad-line"></div>
                            <div class="mad-spec-price">$11.00</div>
                          </div>
                          <div class="mad-spec-tags">
                            <a href="#" class="mad-link">vegetarian</a>,
                            <a href="#" class="mad-link">vegan</a>
                          </div>
                        </div>
                      </div>
                      <!-- End of Specification item -->
                    </div>
                  </div>
                  <!-- End of Our Specifications -->
                </div>
              </div>
              <div class="col-xl-4">
                <div class="content-element-9">
                  <h4>Salads</h4>
                  <!-- Our Specifications -->
                  <div class="mad-specs">
                    <div class="mad-col">
                      <!-- Specification item -->
                      <div class="mad-spec-item">
                        <div class="mad-spec-info">
                          <div class="mad-spec-header">
                            <div class="mad-spec-title">Side House</div>
                            <div class="mad-line"></div>
                            <div class="mad-spec-price">$7.00</div>
                          </div>
                          <div class="mad-spec-tags">
                            <div class="mad-spec-el">spring mix, tomato, cucumber, carrot</div>
                            <a href="#" class="mad-link">vegetarian</a>,
                            <a href="#" class="mad-link">vegan</a>
                          </div>
                        </div>
                      </div>
                      <!-- End of Specification item -->
                    </div>
                    <div class="mad-col">
                      <!-- Specification item -->
                      <div class="mad-spec-item">
                        <div class="mad-spec-info">
                          <div class="mad-spec-header">
                            <div class="mad-spec-title">Louie</div>
                            <div class="mad-line"></div>
                            <div class="mad-spec-price">$19.00</div>
                          </div>
                          <div class="mad-spec-tags">
                            <div class="mad-spec-el">dungeness crab, mexican wild prawns, avocado, egg, tomato, cucumber,
                              louie dressing
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End of Specification item -->
                    </div>
                    <div class="mad-col">
                      <!-- Specification item -->
                      <div class="mad-spec-item">
                        <div class="mad-spec-info">
                          <div class="mad-spec-header">
                            <div class="mad-spec-title">Spinach &amp; Quinoa</div>
                            <div class="mad-line"></div>
                            <div class="mad-spec-price">$12.00</div>
                          </div>
                          <div class="mad-spec-tags">
                            <div class="mad-spec-el">avocado, egg, tomatoes, carrot</div>
                            <a href="#" class="mad-link">vegetarian</a>,
                            <a href="#" class="mad-link">vegan</a>
                          </div>
                        </div>
                      </div>
                      <!-- End of Specification item -->
                    </div>
                    <div class="mad-col">
                      <!-- Specification item -->
                      <div class="mad-spec-item">
                        <div class="mad-spec-info">
                          <div class="mad-spec-header">
                            <div class="mad-spec-title">Cobb</div>
                            <div class="mad-line"></div>
                            <div class="mad-spec-price">$18.00</div>
                          </div>
                          <div class="mad-spec-tags">
                            <div class="mad-spec-el">mexican wild prawns, bacon, avocado, egg, tomatoes, blue cheese crumbles
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End of Specification item -->
                    </div>
                  </div>
                  <!-- End of Our Specifications -->
                </div>
                <div class="content-element-9">
                  <h4>Desserts</h4>
                  <!-- Our Specifications -->
                  <div class="mad-specs">
                    <div class="mad-col">
                      <!-- Specification item -->
                      <div class="mad-spec-item">
                        <div class="mad-spec-info">
                          <div class="mad-spec-header">
                            <div class="mad-spec-title">Whoopie Pie Alaska</div>
                            <div class="mad-line"></div>
                            <div class="mad-spec-price">$12.00</div>
                          </div>
                          <div class="mad-spec-tags">
                            <div class="mad-spec-el">chocolate cake, toasted marshmallow, toffee</div>
                          </div>
                        </div>
                      </div>
                      <!-- End of Specification item -->
                    </div>
                    <div class="mad-col">
                      <!-- Specification item -->
                      <div class="mad-spec-item">
                        <div class="mad-spec-info">
                          <div class="mad-spec-header">
                            <div class="mad-spec-title">Croissant Bread Pudding</div>
                            <div class="mad-line"></div>
                            <div class="mad-spec-price">$10.00</div>
                          </div>
                          <div class="mad-spec-tags">
                            <div class="mad-spec-el">chocolate, pumpkin, banana caramel ice cream
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End of Specification item -->
                    </div>
                    <div class="mad-col">
                      <!-- Specification item -->
                      <div class="mad-spec-item">
                        <div class="mad-spec-info">
                          <div class="mad-spec-header">
                            <div class="mad-spec-title">Apple Crumble</div>
                            <div class="mad-line"></div>
                            <div class="mad-spec-price">$10.00</div>
                          </div>
                          <div class="mad-spec-tags">
                            <div class="mad-spec-el">spiced crumble, vanilla ice cream</div>
                          </div>
                        </div>
                      </div>
                      <!-- End of Specification item -->
                    </div>
                    <div class="mad-col">
                      <!-- Specification item -->
                      <div class="mad-spec-item">
                        <div class="mad-spec-info">
                          <div class="mad-spec-header">
                            <div class="mad-spec-title">Sorbet of the Day</div>
                            <div class="mad-line"></div>
                            <div class="mad-spec-price">$9.00</div>
                          </div>
                          <div class="mad-spec-tags">
                            <div class="mad-spec-el">ainting goat fruit sorbet</div>
                            <a href="#" class="mad-link">vegetarian</a>,
                            <a href="#" class="mad-link">vegan</a>
                          </div>
                        </div>
                      </div>
                      <!-- End of Specification item -->
                    </div>
                  </div>
                  <!-- End of Our Specifications -->
                </div>
              </div>
              <div class="col-xl-4">
                <h4>Mains</h4>
                <!-- Our Specifications -->
                <div class="mad-specs">
                  <div class="mad-col">
                    <!-- Specification item -->
                    <div class="mad-spec-item">
                      <div class="mad-spec-info">
                        <div class="mad-spec-header">
                          <div class="mad-spec-title">Charcoal Grilled Black Sea Bream</div>
                          <div class="mad-line"></div>
                          <div class="mad-spec-price">$17.00</div>
                        </div>
                        <div class="mad-spec-tags">
                          <div class="mad-spec-el">salsa verde</div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Specification item -->
                  </div>
                  <div class="mad-col">
                    <!-- Specification item -->
                    <div class="mad-spec-item">
                      <div class="mad-spec-info">
                        <div class="mad-spec-header">
                          <div class="mad-spec-title">Tandoori Monkfish</div>
                          <div class="mad-line"></div>
                          <div class="mad-spec-price">$22.00</div>
                        </div>
                        <div class="mad-spec-tags">
                          <div class="mad-spec-el">charred gem, red cabbage &amp; carrot slaw, raita
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Specification item -->
                  </div>
                  <div class="mad-col">
                    <!-- Specification item -->
                    <div class="mad-spec-item">
                      <div class="mad-spec-info">
                        <div class="mad-spec-header">
                          <div class="mad-spec-title">Chargrilled Seafood Platter</div>
                          <div class="mad-line"></div>
                          <div class="mad-spec-price">$34.00</div>
                        </div>
                        <div class="mad-spec-tags">
                          <div class="mad-spec-el">seabream, red tiger prawns, squid, shellfish, chargrilled broccoli &amp;
                            lemon (for 2 to share)</div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Specification item -->
                  </div>
                  <div class="mad-col">
                    <!-- Specification item -->
                    <div class="mad-spec-item">
                      <div class="mad-spec-info">
                        <div class="mad-spec-header">
                          <div class="mad-spec-title">Flat Iron Steak</div>
                          <div class="mad-line"></div>
                          <div class="mad-spec-price">$15.00</div>
                        </div>
                        <div class="mad-spec-tags">
                          <div class="mad-spec-el">chimmichurri</div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Specification item -->
                  </div>
                  <div class="mad-col">
                    <!-- Specification item -->
                    <div class="mad-spec-item">
                      <div class="mad-spec-info">
                        <div class="mad-spec-header">
                          <div class="mad-spec-title">Sicilian Seafoodstew</div>
                          <div class="mad-line"></div>
                          <div class="mad-spec-price">$20.00</div>
                        </div>
                        <div class="mad-spec-tags">
                          <div class="mad-spec-el">red mullet, shellfish, red tiger prawns, mint &amp; sourdough</div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Specification item -->
                  </div>
                  <div class="mad-col">
                    <!-- Specification item -->
                    <div class="mad-spec-item">
                      <div class="mad-spec-info">
                        <div class="mad-spec-header">
                          <div class="mad-spec-title">Beer Battered Fish &amp; Chips</div>
                          <div class="mad-line"></div>
                          <div class="mad-spec-price">$16.00</div>
                        </div>
                        <div class="mad-spec-tags">
                          <div class="mad-spec-el">mushypeas</div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Specification item -->
                  </div>
                  <div class="mad-col">
                    <!-- Specification item -->
                    <div class="mad-spec-item">
                      <div class="mad-spec-info">
                        <div class="mad-spec-header">
                          <div class="mad-spec-title">Red Panang Malaysiancurry</div>
                          <div class="mad-line"></div>
                          <div class="mad-spec-price">$18.00</div>
                        </div>
                        <div class="mad-spec-tags">
                          <div class="mad-spec-el">bream fillet, red tiger prawns, basmati rice</div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Specification item -->
                  </div>
                  <div class="mad-col">
                    <!-- Specification item -->
                    <div class="mad-spec-item">
                      <div class="mad-spec-info">
                        <div class="mad-spec-header">
                          <div class="mad-spec-title">Whole Grilled Mediterranean Sea Bass</div>
                          <div class="mad-line"></div>
                          <div class="mad-spec-price">$19.00</div>
                        </div>
                        <div class="mad-spec-tags">
                          <div class="mad-spec-el">toasted fennel oil, lemon, crispy garlic</div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Specification item -->
                  </div>
                  <div class="mad-col">
                    <!-- Specification item -->
                    <div class="mad-spec-item">
                      <div class="mad-spec-info">
                        <div class="mad-spec-header">
                          <div class="mad-spec-title">Seafood Pasta</div>
                          <div class="mad-line"></div>
                          <div class="mad-spec-price">$21.00</div>
                        </div>
                        <div class="mad-spec-tags">
                          <div class="mad-spec-el">clams, mussels, salmon, scallop, shrimp, creamy sea water broth over
                            linguini</div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Specification item -->
                  </div>
                  <div class="mad-col">
                    <!-- Specification item -->
                    <div class="mad-spec-item">
                      <div class="mad-spec-info">
                        <div class="mad-spec-header">
                          <div class="mad-spec-title">Moules Frites</div>
                          <div class="mad-line"></div>
                          <div class="mad-spec-price">$16.00</div>
                        </div>
                        <div class="mad-spec-tags">
                          <div class="mad-spec-el">mariniere sauce</div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Specification item -->
                  </div>
                </div>
                <!-- End of Our Specifications -->
              </div>
            </div>
          </div>
          <div data-bg-image-src="{{ asset('assets/html/lemar/images/1920x925_bg2.jpg') }}"
            class="mad-section with-overlay mad-section--stretched mad-colorizer--scheme- mad-colorizer--scheme-light mad-colorizer--parallax">
            <div class="align-center">
              <h2 class="mad-cta-title no-bs">Happy Hour</h2>
              <p>Donec in velit vel ipsum auctor pulvinar. Vestibulum iaculis lacinia est. <br> Proin dictum elementum velit.</p>
            </div>
          </div>
          <div class="mad-section">
            <div class="row hr-size-1">
              <div class="col-xl-4">
                <div class="content-element-9">
                  <h4>Starters</h4>
                  <!-- Our Specifications -->
                  <div class="mad-specs">
                    <div class="mad-col">
                      <!-- Specification item -->
                      <div class="mad-spec-item">
                        <div class="mad-spec-info">
                          <div class="mad-spec-header">
                            <div class="mad-spec-title">Santorini Fava</div>
                            <div class="mad-line"></div>
                            <div class="mad-spec-price">$7.00</div>
                          </div>
                          <div class="mad-spec-tags">
                            <div class="mad-spec-el">warm fava, red onion, capers</div>
                            <a href="#" class="mad-link">vegetarian</a>,
                            <a href="#" class="mad-link">vegan</a>
                          </div>
                        </div>
                      </div>
                      <!-- End of Specification item -->
                    </div>
                    <div class="mad-col">
                      <!-- Specification item -->
                      <div class="mad-spec-item">
                        <div class="mad-spec-info">
                          <div class="mad-spec-header">
                            <div class="mad-spec-title">Kopanisti</div>
                            <div class="mad-line"></div>
                            <div class="mad-spec-price">$9.00</div>
                          </div>
                          <div class="mad-spec-tags">
                            <div class="mad-spec-el">roasted red pepper, feta, boukovo chili</div>
                            <a href="#" class="mad-link">vegetarian</a>,
                            <a href="#" class="mad-link">vegan</a>
                          </div>
                        </div>
                      </div>
                      <!-- End of Specification item -->
                    </div>
                    <div class="mad-col">
                      <!-- Specification item -->
                      <div class="mad-spec-item">
                        <div class="mad-spec-info">
                          <div class="mad-spec-header">
                            <div class="mad-spec-title">Cured Sea Trout</div>
                            <div class="mad-line"></div>
                            <div class="mad-spec-price">$6.00</div>
                          </div>
                          <div class="mad-spec-tags">
                            <div class="mad-spec-el">roast beetroot &amp; beetroot ketchup</div>
                          </div>
                        </div>
                      </div>
                      <!-- End of Specification item -->
                    </div>
                    <div class="mad-col">
                      <!-- Specification item -->
                      <div class="mad-spec-item">
                        <div class="mad-spec-info">
                          <div class="mad-spec-header">
                            <div class="mad-spec-title">Seafood Soup</div>
                            <div class="mad-line"></div>
                            <div class="mad-spec-price">$8.00</div>
                          </div>
                          <div class="mad-spec-tags">
                            <div class="mad-spec-el">gruyere, garlic croutons &amp; rouille</div>
                          </div>
                        </div>
                      </div>
                      <!-- End of Specification item -->
                    </div>
                    <div class="mad-col">
                      <!-- Specification item -->
                      <div class="mad-spec-item">
                        <div class="mad-spec-info">
                          <div class="mad-spec-header">
                            <div class="mad-spec-title">Wild Red Tiger Prawns</div>
                            <div class="mad-line"></div>
                            <div class="mad-spec-price">$11.00</div>
                          </div>
                          <div class="mad-spec-tags">
                            <div class="mad-spec-el">herb butter, chargrilled sourdough</div>
                          </div>
                        </div>
                      </div>
                      <!-- End of Specification item -->
                    </div>
                  </div>
                  <!-- End of Our Specifications -->
                </div>
              </div>
              <div class="col-xl-4">
                <h4>Mains</h4>
                <!-- Our Specifications -->
                <div class="mad-specs">
                  <div class="mad-col">
                    <!-- Specification item -->
                    <div class="mad-spec-item">
                      <div class="mad-spec-info">
                        <div class="mad-spec-header">
                          <div class="mad-spec-title">Charcoal Grilled Black Sea Bream</div>
                          <div class="mad-line"></div>
                          <div class="mad-spec-price">$17.00</div>
                        </div>
                        <div class="mad-spec-tags">
                          <div class="mad-spec-el">salsa verde</div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Specification item -->
                  </div>
                  <div class="mad-col">
                    <!-- Specification item -->
                    <div class="mad-spec-item">
                      <div class="mad-spec-info">
                        <div class="mad-spec-header">
                          <div class="mad-spec-title">Tandoori Monkfish</div>
                          <div class="mad-line"></div>
                          <div class="mad-spec-price">$22.00</div>
                        </div>
                        <div class="mad-spec-tags">
                          <div class="mad-spec-el">charred gem, red cabbage &amp; carrot slaw, raita
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Specification item -->
                  </div>
                  <div class="mad-col">
                    <!-- Specification item -->
                    <div class="mad-spec-item">
                      <div class="mad-spec-info">
                        <div class="mad-spec-header">
                          <div class="mad-spec-title">Chargrilled Seafood Platter</div>
                          <div class="mad-line"></div>
                          <div class="mad-spec-price">$34.00</div>
                        </div>
                        <div class="mad-spec-tags">
                          <div class="mad-spec-el">seabream, red tiger prawns, squid, shellfish, chargrilled broccoli &amp;
                            lemon (for 2 to share)</div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Specification item -->
                  </div>
                  <div class="mad-col">
                    <!-- Specification item -->
                    <div class="mad-spec-item">
                      <div class="mad-spec-info">
                        <div class="mad-spec-header">
                          <div class="mad-spec-title">Flat Iron Steak</div>
                          <div class="mad-line"></div>
                          <div class="mad-spec-price">$15.00</div>
                        </div>
                        <div class="mad-spec-tags">
                          <div class="mad-spec-el">chimmichurri</div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Specification item -->
                  </div>
                  <div class="mad-col">
                    <!-- Specification item -->
                    <div class="mad-spec-item">
                      <div class="mad-spec-info">
                        <div class="mad-spec-header">
                          <div class="mad-spec-title">Sicilian Seafoodstew</div>
                          <div class="mad-line"></div>
                          <div class="mad-spec-price">$20.00</div>
                        </div>
                        <div class="mad-spec-tags">
                          <div class="mad-spec-el">red mullet, shellfish, red tiger prawns, mint &amp; sourdough</div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Specification item -->
                  </div>
                  <div class="mad-col">
                    <!-- Specification item -->
                    <div class="mad-spec-item">
                      <div class="mad-spec-info">
                        <div class="mad-spec-header">
                          <div class="mad-spec-title">Beer Battered Fish &amp; Chips</div>
                          <div class="mad-line"></div>
                          <div class="mad-spec-price">$16.00</div>
                        </div>
                        <div class="mad-spec-tags">
                          <div class="mad-spec-el">mushypeas</div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Specification item -->
                  </div>
                </div>
                <!-- End of Our Specifications -->
              </div>
              <div class="col-xl-4">
                <h4>Beverages</h4>
                <!-- Our Specifications -->
                <div class="mad-specs">
                  <div class="mad-col">
                    <!-- Specification item -->
                    <div class="mad-spec-item">
                      <div class="mad-spec-info">
                        <div class="mad-spec-header">
                          <div class="mad-spec-title">Birds of Paradise</div>
                          <div class="mad-line"></div>
                          <div class="mad-spec-price">$17.00</div>
                        </div>
                        <div class="mad-spec-tags">
                          <div class="mad-spec-el">mezcal, passion fruit, lime, alpine liqueur, firewater bitters</div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Specification item -->
                  </div>
                  <div class="mad-col">
                    <!-- Specification item -->
                    <div class="mad-spec-item">
                      <div class="mad-spec-info">
                        <div class="mad-spec-header">
                          <div class="mad-spec-title">Northern Exposure</div>
                          <div class="mad-line"></div>
                          <div class="mad-spec-price">$14.00</div>
                        </div>
                        <div class="mad-spec-tags">
                          <div class="mad-spec-el">rye, amaro montenegro, amaretto,orange bitters
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Specification item -->
                  </div>
                  <div class="mad-col">
                    <!-- Specification item -->
                    <div class="mad-spec-item">
                      <div class="mad-spec-info">
                        <div class="mad-spec-header">
                          <div class="mad-spec-title">Sherry Barrel Water Wings</div>
                          <div class="mad-line"></div>
                          <div class="mad-spec-price">$15.00</div>
                        </div>
                        <div class="mad-spec-tags">
                          <div class="mad-spec-el">sherry, apricot liqueur, ancho reyez, lemon, dark rum float</div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Specification item -->
                  </div>
                  <div class="mad-col">
                    <!-- Specification item -->
                    <div class="mad-spec-item">
                      <div class="mad-spec-info">
                        <div class="mad-spec-header">
                          <div class="mad-spec-title">Laporte “Sauvignon Blanc Le Bouquet”</div>

                          <div class="mad-spec-price">$17.00/$70.00</div>
                        </div>
                        <div class="mad-spec-tags">
                          <div class="mad-spec-el">17 Loire Valley, FR</div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Specification item -->
                  </div>
                  <div class="mad-col">
                    <!-- Specification item -->
                    <div class="mad-spec-item">
                      <div class="mad-spec-info">
                        <div class="mad-spec-header">
                          <div class="mad-spec-title">Sohm & Kracher “Lion” Gruner Veltliner</div>

                          <div class="mad-spec-price">$15.00/$60.00</div>
                        </div>
                        <div class="mad-spec-tags">
                          <div class="mad-spec-el">17 Niederösterreich, AT</div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Specification item -->
                  </div>
                  <div class="mad-col">
                    <!-- Specification item -->
                    <div class="mad-spec-item">
                      <div class="mad-spec-info">
                        <div class="mad-spec-header">
                          <div class="mad-spec-title">Brooks “Runaway Red” Pinot Noir</div>

                          <div class="mad-spec-price">$17.00/$75.00</div>
                        </div>
                        <div class="mad-spec-tags">
                          <div class="mad-spec-el">17 Willamette Valley, OR</div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Specification item -->
                  </div>
                </div>
                <!-- End of Our Specifications -->
              </div>
            </div>
          </div>
          <div class="mad-section mad-section--stretched mad-colorizer--scheme-color-5 mad-colorizer--scheme-light">
            <h2 class="mad-title align-center">Make a Reservation</h2>
            <p class="align-center">We accept online bookings for tables up to ten people. Larger parties can <br> be booked by
              phone or in person at the
              restaurant.</p>
            <form class="mad-form style-2">
              <div class="form-group">
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
                <div class="form-col no-fw">
                  <button class="btn btn-big">Book a Table</button>
                </div>
              </div>
              <span class="mad-form-tag">Powered by OpenTable</span>
            </form>
          </div>
        </div>
      </div>

@endsection
