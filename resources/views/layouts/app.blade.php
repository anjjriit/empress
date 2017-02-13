<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('storage/img/favicons/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" href="{{ asset('storage/img/favicons/favicon-32x32.png') }}" sizes="32x32">
        <link rel="icon" type="image/png" href="{{ asset('storage/img/favicons/favicon-16x16.png') }}" sizes="16x16">
        <link rel="manifest" href="{{ asset('storage/img/favicons/manifest.json') }}">
        <link rel="mask-icon" href="{{ asset('storage/img/favicons/safari-pinned-tab.svg') }}" color="#5bbad5">
        <meta name="apple-mobile-web-app-title" content="Empress">
        <meta name="application-name" content="Empress">
        <meta name="theme-color" content="#ffffff">

        <title>{{ config('app.name') }} | @yield('title')</title>

        <link href="{{ asset(mix('/css/app.css')) }}" rel="stylesheet" type="text/css">
        
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
    </head>
<body>
    <div id="app">
        @include('components.header')

        @yield('content')

        @include('components.footer')
    </div>

    <script src="{{ asset(mix('/js/app.js')) }}"></script>

    @yield('scripts')

    @include('flash::message')
</body>
</html>
