@extends('front.layouts.base')

@section('title') Freelance Web Portfolio - By Maroc Freelance @endsection

@section('description')Discover the diverse and innovative portfolio of Maroc Freelance. As an experienced freelance web developer, I deliver tailored solutions for clients worldwide. @endsection
@section('image'){{ asset('assets/images/me.webp')}}@endsection
@section('link') {{ route('projects') }} @endsection

@section('content')
            

             <!-- Header: Section indicator -->
            <div class="uni-header-section-indicator uk-text-xsmall dark:uk-text-white uk-visible@l">
                <ul class="uk-list">
                    <li data-selector=".uni-projects">My Projects</li>
                    <li data-selector=".uni-cta-footer">Contact</li>
                </ul>
            </div>


            <!-- Latest projects -->
            <div id="projects" class="uni-projects uk-section-large uk-section-2xlarge@m uk-overflow-hidden">
                <div class="uk-container">
                    <div>
                         
                        <ul class="uk-grid uk-grid-column-xsmall uk-grid-column-xlarge@m uk-grid-row-medium uk-grid-row-2xlarge@m uk-child-width-1-2 uk-child-width-1-3@m uk-margin-medium-top uk-margin-xlarge-top@m" data-uk-grid="">
                            
                            @foreach($projects as $project)
                            <li>
                                <div class="uk-panel uk-overflow-hidden">
                                    <!--<canvas></canvas>-->
                                    <a href="{{ $project->url }}"><img src="{{ $project->image_url }}" alt="{{ $project->name }}" loading="lazy">
                                    </a>
                                </div>
                                <div class="uk-panel uk-margin-small-top uk-margin-top@m">
                                    <a class="uk-text-small uk-text-muted dark:uk-text-gray-40">{{ $project->field }}</a>
                                    <h4 class="uk-h5 uk-margin-xsmall-top"><a href="{{ $project->url }}">{{ $project->name }}</a></h4>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                 
                    </div>
                </div>
            </div>

         
@endsection