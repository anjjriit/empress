@extends('layouts.app')
@section('title', 'Login to Empress')

@section('content')
<main class="valign-wrapper">
    <div class="container valign">
        <div class="row">
            <div class="col s12 m8 offset-m2 l6 offset-l3">
                <form class="col s12" role="form" method="POST" action="{{ route('auth.login.store') }}">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">Login</span>
                                {{ csrf_field() }}
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">mail_outline</i>
                                    <input id="email" type="text" name="email" value="{{ old('email') }}" class="validate">
                                    <label for="email">E-mail Address</label>
                                </div>

                                <div class="input-field col s12">
                                    <i class="material-icons prefix">fingerprint</i>
                                    <input id="password" type="password" name="password" class="validate">
                                    <label for="password">Password</label>
                                </div>
                                    
                                <div class="input-field col s12">
                                    <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember">Remember Me</label>
                                </div>
                            </div>
                        </div>

                        <div class="card-action center">
                            <button type="submit" class="waves-effect waves-light btn-large">Login</button>
                            <p class="center" style="padding-left: 20px;">
                                <a href="{{ route('auth.forgot.show') }}">Forgot Your Password?</a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
