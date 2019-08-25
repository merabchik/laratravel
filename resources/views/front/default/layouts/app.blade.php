<html>
    <head>
        @section('head')
            @include('front.default.layouts.head')
    </head>
    <body>
        @section('header')
            @include('front.default.layouts.header')
        @show          
        @section('sidebar')
            @include('front.default.layouts.navigation')
        @show
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>