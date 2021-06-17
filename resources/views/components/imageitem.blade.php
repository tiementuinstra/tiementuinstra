<div class="col-xs-12 col-sm-3 mb-4">
    <div class="card shadow-3-strong">
        <a href="@php
            echo App\Traits\StrapiTrait::getImageUrl($image, 'large');
        @endphp" data-lightbox="blog" data-title="{{ $image->caption }}"
            data-alt="{{ $image->alternativeText }}">
            <div style="background-image:url('@php
                echo App\Traits\StrapiTrait::getImageUrl($image, 'small');
            @endphp');" alt="{{ $image->alternativeText }}"
                class="card-img-top"></div>
        </a>
    </div>
</div>
