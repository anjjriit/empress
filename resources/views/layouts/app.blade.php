<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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

    @include('flash::message')
</body>
</html>
