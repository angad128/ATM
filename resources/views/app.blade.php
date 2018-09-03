<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('include/header')
        @yield('styles')
    </head>
    <body>
        <div class="container">
            @yield('contents')
        </div>
        @include('include/footer')
        @yield('scripts')
    </body>
</html>