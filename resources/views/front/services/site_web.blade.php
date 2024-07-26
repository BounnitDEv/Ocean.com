@extends('front.layouts.base')

@section('title') Website Creation - Maroc Freelance @endsection

@section('description') I'm a freelance web developer and designer who has spent the last 5 years pushing the boundaries of web development. @endsection
@section('link') {{ route('site_web')}} @endsection
@section('image') {{asset('assets/images/services/website.jpg')}} @endsection

@section('content')


            <!-- Single service -->
            <article class="uni-article uni-single-service uk-section-large uk-section-2xlarge@m uk-padding-2xlarge-top uk-padding-3xlarge-top@m">

                <div class="uk-container">

                    <div class="uk-panel uk-overflow-hidden">
                        <canvas data-uk-height-viewport="offset-bottom: 50;"></canvas>
                        <img src="{{asset('assets/images/services/website.jpg')}}" alt="image" data-uk-cover="">
                        <div class="uk-panel uk-position-cover uk-flex-middle uk-flex-center uk-text-center uk-ovrelay uk-overlay-primary">
                            <h1 class="uk-h2 uk-h1@m uk-text-white">Expertly Crafted Websites for Your Business</h1>    
                        </div>
                    </div>

                    <div class="uk-margin-large-top uk-margin-xlarge-top@m">
                        <div class="uk-container">
                            
                            <p class="uk-text-large uk-text-2xlarge@m">Designed to Exceed Expectations and Propel Your Brand Forward</p>
                            <p class="uk-text-large@m">Your website serves as the virtual gateway to your business. It's the first touchpoint for potential clients. Our dedicated team ensures that your website not only boasts a visually stunning design but also delivers an exceptional user experience. We optimize it to be lightning-fast and easily discoverable on leading search engines.</p>
                            <h3 class="uk-h4 uk-h2@m uk-margin-xlarge-top@m">01. Enhanced Search Engine Visibility</h3>
                            <p class="uk-text-large@m">Through meticulous coding aligned with Google's best practices and valuable insights into content optimization, we guarantee prime placement for your website in search engine results. Maximize your online visibility and attract more organic traffic with our SEO strategies.</p>
                            <h3 class="uk-h4 uk-h2@m uk-margin-xlarge-top@m">02. Lead Generation Amplified</h3>
                            <p class="uk-text-large@m">Leveraging the power of professional web design coupled with our comprehensive SEO knowledge, we don't just bring in more visitors; we convert them into valuable, long-term clients. Witness your website transform into a potent lead-generating asset for your business.</p>
                            <h3 class="uk-h4 uk-h2@m uk-margin-xlarge-top@m">03. Professionalism Redefined</h3>
                            <p class="uk-text-large@m">An outdated or neglected website can undermine your brand's credibility. Stay ahead of the competition with a professionally designed website that not only reflects your brand's essence but also allows you to effortlessly update content, showcasing your commitment to staying current and relevant.</p>
                            <h3 class="uk-h4 uk-h2@m uk-margin-xlarge-top@m">04. Stay Ahead of the Curve</h3>
                            <p class="uk-text-large@m">In today's competitive market, standing out is crucial. Our team ensures that your website leaves a lasting impression on your potential clients. With a memorable and impactful website, you'll be the first choice for your target audience, leaving competitors in the rearview mirror.</p>


                                    

                            @include('front.components.share')

                        </div>
                    </div>

                </div>

            </article>

            @include('front.components.similar_projects')

@endsection