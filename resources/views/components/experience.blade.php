<div class="col-xs-12 col-sm-6">
    <div class="card mb-3 shadow-2-strong">
        <div class="row g-0">
            <div class="col-md-2 d-flex align-items-center">
                <a href="{{ $experience->url }}">
                    <img src="@php
                        echo App\Traits\StrapiTrait::getImageUrl($experience->image, 'thumbnail');
                    @endphp" alt="logo {{ $experience->name }}" class="img-fluid m-4 " /></a>
            </div>
            <div class="col-md-10">
                <div class="card-body">
                    <h5 class="card-title">{{ $experience->Job }}

                        <small class="text-muted float-right"> @php
                            $enddate = date('M Y', strtotime($experience->endDate));
                            echo date('M Y', strtotime($experience->startDate)) . ' - ' . (!is_null($enddate) ? $enddate : 'heden');
                        @endphp</small>
                    </h5>
                    <p class="card-text">
                        {{ $experience->description }}
                    </p>
                    <p class="card-tags">
                        @each('components/tags', $experience->tags, 'tag')
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
