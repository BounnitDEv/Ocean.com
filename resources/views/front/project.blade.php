@extends('front.layouts.base')

@section('title') {{ $project->name }} @endsection

@section('description') {{ $project->short_description }} @endsection
@section('link') {{ $project->url }} @endsection
@section('image') {{ $project->image_url }} @endsection

@section('content')

            <!-- Single project -->
            <article class="uk-panel uk-overflow-hidden uk-section-2xlarge@m">
                <div class="uk-container">

                    

                    <div class="uk-panel uk-overflow-hidden">
                        {{-- <canvas class="uk-visible@m" height="100"></canvas> --}}
                        <canvas class="uk-hidden@m" height="100"></canvas>
                        <img src="{{ $project->cover_url }}" alt="{{ $project->name }}" >

                    </div>



                    <div class="uk-flex-center uk-margin-xlarge-top">
                        <a class="uni-icon-wave" href="#details" data-uk-scroll="offset: 40;">
                            <span class="material-icons-round uk-icon-medium">south</span>
                        </a>
                    </div>






                    <div class="uk-margin-xlarge-top uk-margin-2xlarge-top@m" id="details">
                        <div class="uk-container uk-container-small">
                            <div class="uk-grid uk-grid-medium@m uk-flex-between" data-uk-grid="">
                                <div class="uk-width-1-2@m">
                                    <ul class="uk-list uk-text-large@m uk-text-left">
                                        <li><span>Domaine:</span> <a>{{ $project->field }}</a></li>
                                        <li><span>Client:</span> {{ $project->client }}</li>
                                    </ul>
                                    
                                </div>
                                <div class="uk-width-1-3@m ">
                                    <h1 class="uk-h2">{{ $project->name }}</h1>
                                </div>
                                
                            </div>
                            <p class="uk-text-xlarge@m uk-margin-3xlarge-top@m">{!! $project->description !!}</p>
                        </div>
                    </div>

                    

                    <div class="uk-margin-xlarge-top uk-margin-2xlarge-top@m" >
                        <div class="uk-container uk-container-small uk-text-center">
                            <a href="{{ $project->link }}" target="_blank" class="uk-link-expand uk-link-underline uk-margin-medium-top@m uk-text-large@m ">
                                <i class="material-icons-round">arrow_forward</i>
                                <span>voir le projet</span>
                            </a>
                        </div>
                    </div>

                </div>
            </article>

            <!-- Similar projects -->
            <div class="uni-last-project uk-overflow-hidden uk-section-large uk-section-2xlarge@m uk-background-white dark:uk-background-gray-90">
                <div class="uk-container">
                    <div>
                        <div>
                            <div class="uk-grid uk-grid-column-medium uk-grid-row-small uk-flex-middle uk-flex-between" data-uk-grid="">
                                <div class="uk-width-auto@s">
                                    <h3 class="uk-h3 uk-margin-remove">projets similaires.</h3>
                                </div>
                                <div class="uk-width-expand@s uk-flex-right@s uk-visible@m">
                                    <a href="{{ route('projects') }}" class="uk-link-underline">
                                        <span>voir tous les projets.</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <ul class="uk-grid uk-grid-column-medium uk-grid-row-medium uk-grid-row-2xlarge@m uk-child-width-1-4@m uk-margin-large-top uk-margin-2xlarge-top@m" data-uk-grid>
                        @foreach($projects as $pr)
                            <li>
                                <div class="uk-panel uk-overflow-hidden">
                                    <canvas width="264" height="264"></canvas>
                                    <img src="{{ $pr->image_url }}" alt="{{ $pr->name }}" data-uk-cover="">
                                    <a href="{{ $pr->url }}" class="uk-position-cover"></a>
                                </div>
                                <div class="uk-panel uk-margin-small-top uk-margin-top@m">
                                    <a class="uk-text-small uk-text-muted dark:uk-text-gray-40">{{ $pr->field }}</a>
                                    <h4 class="uk-h5 uk-margin-xsmall-top"><a href="{{ $pr->url }}">{{ $pr->name }}</a></h4>
                                </div>
                            </li>
                        @endforeach   
                        </ul>
                        <div class="uk-margin-xlarge-top uk-margin-2xlarge-top@m uk-hidden@m">
                            <a href="{{ route('projects') }}" class="uk-link-underline">
                                <span>voir tous les projets.</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


@endsection
@push('style')
    <style>
        img {
            filter: none;
        }
    </style>
@endpush