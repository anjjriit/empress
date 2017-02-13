@extends('layouts.app')
@section('title', 'Login to Empress')

@section('content')
<main class="valign-wrapper">
    <div class="container valign">
        <div class="row">
            <div class="col s12 m8 offset-m2 l6 offset-l3">
                <form id="login-form" class="col s12" role="form" method="POST" action="{{ route('auth.login.store') }}" novalidate>
                    {{ csrf_field() }}
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">Login</span>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">face</i>
                                    <input id="login" type="text" name="login" 
                                        value="{{ old('login') }}" required aria-required="true">
                                    <label for="login">Username or E-mail</label>
                                </div>

                                <div class="input-field col s12">
                                    <i class="material-icons prefix">fingerprint</i>
                                    <input id="password" type="password" name="password" required aria-required="true">
                                    <label for="password">Password</label>
                                </div>
                                    
                                <div class="input-field col s12">
                                    <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember">Remember Me</label>
                                </div>
                            </div>
                        </div>

                        <div class="card-action center">
                            <button type="submit" class="light-blue lighten-2 waves-effect waves-light btn-large">Login</button>
                            <p class="center forgot">
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

@section('scripts')
<script>
    $('#login-form').validate({
        rules: {
            login: 'required',
            password: 'required'
        },
        messages: {
            login: {
                required: 'Username or Email is required.',
            },
            password: {
                required: 'Password is required.'
            }
        }
    });
</script>
@endsection