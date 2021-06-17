@extends('cms')

@section('content')
    @if (isset($content->content))
        <div class="row">
            <div class="col mb-4">
                <div class="card shadow-2-strong">
                    <div class="card-body">
                        {!! $content->content !!}
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="row imagegallery">
        @each('components/imageitem', $content->imagegallery, 'image')
    </div>
    <div class="row">
        @each('components/blogitem', $content->pages, 'blogitem')
    </div>
@endsection
