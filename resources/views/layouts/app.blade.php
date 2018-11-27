<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @yield('style')
    </head>
    <body>
        <div class="container">
            @include('layouts.header')
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    {!! \Session::get('success') !!}
                </div>
            @endif
            @if (\Session::has('error'))
                <div class="alert alert-danger">
                    {!! \Session::get('error') !!}
                </div>
            @endif
            @yield('content')

            @include('layouts.footer')

            <script src="{{ asset('js/app.js') }}"></script>
            @yield('script')
        </div>
    </body>
</html>
