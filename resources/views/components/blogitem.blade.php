<div class="col-xs-12 col-sm-4 mb-4">
    <div class="card shadow-3-strong">
        <div style="background-image:url('@php
            echo App\Traits\StrapiTrait::getImageUrl($blogitem->image, 'small');
        @endphp');" alt="{{ $blogitem->name }}" class="card-img-top"></div>
        <div class="card-body">
            <h5 class="card-title">{{ $blogitem->name }}</h5>
            <p class="card-text">
                {{ $blogitem->introtext }}
            </p>
            <a href="{{ $blogitem->slug }}" class="btn btn-primary">Lezen</a>
        </div>
    </div>
</div>
