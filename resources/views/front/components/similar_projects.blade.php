<!-- Similar projects -->
<div class="uni-last-project uk-overflow-hidden uk-section-large uk-section-2xlarge@m uk-background-white dark:uk-background-gray-90">
    <div class="uk-container">
        <div>
            <div>
                <div class="uk-grid uk-grid-column-medium uk-grid-row-small uk-flex-middle uk-flex-between" data-uk-grid="">
                    <div class="uk-width-auto@s">
                        <h3 class="uk-h3 uk-margin-remove">Latest projects.</h3>
                    </div>
                    <div class="uk-width-expand@s uk-flex-right@s uk-visible@m">
                        <a href="{{ route('projects') }}" class="uk-link-underline">
                            <span>see all projects.</span>
                        </a>
                    </div>
                </div>
            </div>
            <ul class="uk-grid uk-grid-column-medium uk-grid-row-medium uk-grid-row-2xlarge@m uk-child-width-1-3@m uk-margin-large-top uk-margin-2xlarge-top@m" data-uk-grid>
            @foreach(\App\Models\Project::OrderBy('created_at', 'desc')->take(3)->get() as $pr)
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
                    <span>see all projects.</span>
                </a>
            </div>
        </div>
    </div>
</div>
