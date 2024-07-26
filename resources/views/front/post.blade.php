@extends('front.layouts.base')

@section('title') {{ $post->title }} @endsection

@section('description') {{ $post->short_description }} @endsection
@section('link') {{ $post->url }} @endsection
@section('image') {{ $post->image_url }} @endsection

@section('content')



            <!-- Single article -->
            <article class="uk-panel uk-overflow-hidden uk-section-2xlarge@m">
                <div class="uk-container">

                    <div class="uk-panel uk-overflow-hidden">
                        {{-- <canvas class="uk-visible@m" height="100"></canvas> --}}
                        <canvas class="uk-hidden@m" height="100"></canvas>
                        <img src="{{ $post->cover_url}}" alt="image" >
                    </div>

                    <div class="uk-flex-center uk-margin-medium-top" data-uk-parallax="opacity: 1,0; y: 0, -20; viewport: 0.7;">
                        <a class="uni-icon-wave" href="#read_more" data-uk-scroll="offset: 40;">
                            <span class="material-icons-round uk-icon-medium">south</span>
                        </a>
                    </div>

                    <header class="uk-flex-center uk-text-center uk-margin-xlarge-top uk-margin-2xlarge-top@m" id="read_more">
                        <div>
                            <h1 class="uk-h3 uk-h1@m uk-width-3xlarge@m">
                                {{ $post->title }}
                            </h1>
                            <ul class="uk-subnav uk-subnav-dot uk-flex-center uk-text-small uk-text-muted uk-margin-top@m">
                                <li><span>by</span>&nbsp; Bounnit Atmane</li>
                                <li>{{ $post->created_at }}</li>
                            </ul>
                        </div>
                    </header>

                    <div class="uk-margin-xlarge-top uk-margin-2xlarge-top@m">
                        <div class="uk-container uk-container-small">
                            <p class="uk-text-xlarge@m">{!! $post->description !!}</p>
                        </div>
                    </div>

                    

                 

                    @include('front.components.share')

                </div>
            </article>

            <!-- related articles -->
            <div class="uni-related-articles uk-overflow-hidden uk-section-large uk-section-2xlarge@m uk-background-white dark:uk-background-gray-90">
                <div class="uk-container">
                    <div>
                        <div>
                            <div class="uk-grid uk-grid-column-medium uk-grid-row-small uk-flex-middle uk-flex-between" data-uk-grid="">
                                <div class="uk-width-auto@s">
                                    <h3 class="uk-h3 uk-margin-remove">related articles.</h3>
                                </div>
                                <div class="uk-width-expand@s uk-flex-right@s uk-visible@m">
                                    <a href="{{ route('blog') }}" class="uk-link-underline">
                                        <span>view all articles.</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <ul class="uk-grid uk-grid-column-medium uk-grid-row-medium uk-grid-row-2xlarge@m uk-child-width-1-3@m uk-margin-large-top uk-margin-2xlarge-top@m" data-uk-grid>
                            @foreach($posts as $ps)
                            <li>
                                <div class="uk-panel uk-overflow-hidden">
                                    <canvas width="264" height="264"></canvas>
                                    <img src="{{ $ps->image_url }}" alt="{{ $ps->title }}" data-uk-cover="">
                                    <a href="{{ $ps->url }}" class="uk-position-cover"></a>
                                </div>
                                <div class="uk-panel uk-margin-small-top uk-margin-top@m">
                                    <a class="uk-text-small uk-text-muted dark:uk-text-gray-40">{{ $ps->subject }}</a>
                                    <h4 class="uk-h5 uk-h4@m uk-margin-xsmall-top">
                                        <a href="{{ $ps->url }}">{{ $ps->title}}</a>
                                    </h4>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        <div class="uk-margin-xlarge-top uk-margin-2xlarge-top@m uk-hidden@m">
                            <a href="{{ route('blog') }}" class="uk-link-underline">
                                <span>view all articles.</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
@endsection