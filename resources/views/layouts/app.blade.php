<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Robust</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        @include('inc.navbar')

        <div id="main-page" class="container mt-4">
            @if(Request::is('/'))
                @include('inc.showcase')
            @endif
            <div class="row">
                <div class="col-md-8 col-lg-8">
                    @include('inc.messages')
                    @yield('content')
                </div>
                <div class="col-md-4 col-lg-4">
                    @include('inc.sidebar')
                </div>
            </div>
        </div>

        <div id="footer" class="text-center">
            <p>Copyright 2019 &copy; Robust inc.</p>
        </div>
    </body>
</html>