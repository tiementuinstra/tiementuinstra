@extends('cms')

@section('content')
    @if (isset($content->content))

        <div class="col">
            <div class="card shadow-2-strong">
                <div class="card-body">
                    {{ $content->content }}
                </div>
            </div>
        </div>

    @endif
@endsection
