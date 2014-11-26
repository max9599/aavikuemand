<!DOCTYPE html>
<html lang="en">
    <head>
        @include('lib.head')
    </head>

    <body>
        @include('lib.shopnav')
        @include('lib.header')
        <!-- Navigation -->
        @include('lib.navbar')

        <div class="container">
            @yield('content')
        </div>        
    </body>
</html>
