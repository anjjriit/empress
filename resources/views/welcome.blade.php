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

        <title>Welcome to {{ config('app.name') }}</title>

        <link href="{{ asset(mix('/css/app.css')) }}" rel="stylesheet" type="text/css">
        
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
    </head>
    <body>
	    <div id="app" class="homepage">    
	        <main class="valign-wrapper">
	            <div class="container valign">
	    			<div class="row">
	        			<div class="col s12">
				            @if (Route::has('auth.login.show'))
			                <div class="top-right links">
			                    @if (Auth::check())
			                        <a href="{{ route('front.dashboard.index') }}">Dashboard</a>
			                        <a href="{{ route('auth.logout') }}">Logout</a>
			                    @else
			                        <a href="{{ route('auth.login.show') }}">Login</a>
			                        <a href="{{ route('auth.register.show') }}">Register</a>
			                    @endif
			                </div>
				            @endif

			                <welcome></welcome>
			                
			                <div class="links center">
			                    <a href="https://laravel.com/docs/master" target="_blank">Laravel</a>
			                    <a href="https://vuejs.org/v2/guide" target="_blank">Vue</a>
			                    <a href="http://materializecss.com" target="_blank">Materialize</a>
			                    <a href="https://github.com/periaptio/empress" target="_blank">Github</a>
			                </div>
			            </div>
		            </div>
	            </div>
	        </main>
	    </div>

	    <script src="{{ asset(mix('/js/app.js')) }}"></script>

	    @include('flash::message')
    </body>
</html>
