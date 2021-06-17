<!doctype html>
<html lang="nl">
@include('head')

<body class="{{$bodyclass}}">
    @include('navbar')
    <header class="jumbotron text-center bg-image" style="background-image: url('{{ $pageimage }}');">

        <svg viewBox="0 40 400 120" preserveAspectRatio="xMinYMin meet" class="wave">
            <path d="M0,100 C150,100 350,0 500,100 L500,00 L0,0 Z" style="stroke: none; fill:#f8fafc;"></path>
        </svg>
        <a href="/" title="home" class="sitelogo shadow-2-strong"><img src="{{ $sitelogo }}"></a>
    </header>

    <main role="main">

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div id="page-title" class="mt-3 mb-3">
            <div class="container">
                <h1 class="display-3">{{ $pagetitle }}</h1>
            </div>
        </div>

        <div role="content" class="container">
            <!-- Example row of columns -->

            @yield('content')

        </div> <!-- /container -->
        <div class="jumbotron jumbotron-social shadow-4 -strong">
            <div class="container">
                {!! $SocialNav->asUL(['class' => 'socials row']) !!}
            </div>
        </div>
    </main>
    @include('footer')

    <script src="/js/app.js"></script>
</body>

</html>
