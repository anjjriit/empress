<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet" type="text/css">
        
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
    </head>
    <body>
        <div id="app">
            <header>
                <nav class="orange darken-2">
                    <div class="container nav-wrapper">
                        <a href="{{ route('front.home.index') }}" class="brand-logo">{{ config('app.name') }}</a>
                        <a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle hide-on-large-only">
                            <i class="material-icons white-text">menu</i>
                        </a>
                        @if (Route::has('auth.login.show'))
                        <ul class="right hide-on-med-and-down">
                            @if (Auth::check())
                            <li><a href="{{ route('front.home.show') }}">Home</a></li>
                            @else
                            <li><a href="{{ route('auth.login.show') }}">Login</a></li>
                            <li><a href="{{ route('auth.register.show') }}">Register</a></li>
                            @endif
                        </ul>
                        <ul id="nav-mobile" class="side-nav">
                            @if (Auth::check())
                            <li><a href="{{ route('front.home.show') }}">Home</a></li>
                            @else
                            <li><a href="{{ route('auth.login.show') }}">Login</a></li>
                            <li><a href="{{ route('auth.register.show') }}">Register</a></li>
                            @endif
                        </ul>
                        @endif
                    </div>
                </nav>
            </header>
            <main class="valign-wrapper">
                <welcome></welcome>
            </main>
            <footer class="page-footer light-green">
                <div class="container">
                    <div class="row">
                        <div class="col l6 s12">
                            <h5 class="white-text">What Is Empress?</h5>
                            <p class="grey-text text-lighten-4">
                                Empress is a complete admin and front end solution for rapidly scaffolding new member based applications.
                            </p>
                            <p class="grey-text text-lighten-4">
                                It utilizes the latest versions of Laravel, Vue and Materialize CSS, all with master SASS and Node implementations built with Laravel Mix and Webpack. Give it a try ... it's kinda dope.
                            </p>
                        </div>
                        <div class="col l4 offset-l2 s12">
                            <h5 class="white-text">Documentation</h5>
                            <ul>
                                <li>
                                    <a class="grey-text text-lighten-3" href="https://laravel.com/docs/master" target="_blank">Laravel</a>
                                </li>
                                <li>
                                    <a class="grey-text text-lighten-3" href="https://vuejs.org/v2/guide" target="_blank">Vue</a>
                                </li>
                                <li>
                                    <a class="grey-text text-lighten-3" href="http://materializecss.com" target="_blank">Materialize</a>
                                </li>
                                <li>
                                    <a class="grey-text text-lighten-3" href="https://github.com/19peaches/empress" target="_blank">Empress (GitHub)</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="container">
                        &copy; {{ date('Y') }}. {{ config('app.company') }} All Rights Reserved.
                        <div class="grey-text text-lighten-4 love">
                            Made with <i class="material-icons red-text">favorite_border</i> in Tempe, AZ.
                        </div>
                    </div>
                </div>
            </footer>
            
        </div>

        <script src="{{ asset(mix('js/app.js')) }}"></script>
    </body>
</html>
