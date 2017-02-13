@extends('layouts.app')
@section('title', 'Register an Empress Account')

@section('content')
<main class="valign-wrapper">
    <div class="container valign">
        <div class="row">
            <div class="col s12 m8 offset-m2 l6 offset-l3">
                <form id="register-form" class="col s12" role="form" method="POST" action="{{ route('auth.register.store') }}" novalidate>
                    {{ csrf_field() }}
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">Register</span>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">face</i>
                                    <input id="username" type="text" name="username" value="{{ old('username') }}" required aria-required="true">
                                    <label for="username">Username</label>
                                </div>

                                <div class="input-field col s12">
                                    <i class="material-icons prefix">perm_identity</i>
                                    <input id="name" type="text" name="name" value="{{ old('name') }}" required aria-required="true">
                                    <label for="name">Name</label>
                                </div>

                                <div class="input-field col s12">
                                    <i class="material-icons prefix">mail_outline</i>
                                    <input id="email" type="text" name="email" value="{{ old('email') }}" required aria-required="true">
                                    <label for="email">E-mail Address</label>
                                </div>

                                <div class="input-field col s12">
                                    <i class="material-icons prefix">fingerprint</i>
                                    <input id="password" type="password" name="password" required aria-required="true">
                                    <label for="password">Password</label>
                                </div>

                                <div class="input-field col s12">
                                    <i class="material-icons prefix">fingerprint</i>
                                    <input id="password-confirm" type="password" name="password_confirmation" required aria-required="true">
                                    <label for="password-confirm">Confirm Password</label>
                                </div>
                            </div>       
                        </div>
                        <div class="card-action center">
                            <button type="submit" class="light-blue lighten-2 waves-effect waves-light btn-large">Register</button>
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
    $('#register-form').validate({
        rules: {
            username: 'required',
            name: 'required',
            email: {
                required: true,
                email: true,
                maxlength: 180
            },
            password: {
                required: true,
                minlength: 6
            },
            password_confirmation: {
                required: true,
                equalTo: '#password'
            }
        },
        messages: {
            username: 'Please create a username.',
            name: 'Please enter your name.',
            email: {
                required: 'Please enter your email address.',
                email: 'Must be a valid email address.',
                maxlength: 'Max length for an email is 180 characters.'
            },
            password: {
                required: 'Please create a password.',
                minlength: 'Password must be at least 6 characters.'
            },
            password_confirmation: {
                required: 'Please confirm your password.',
                equalTo: 'Your passwords must match.'
            }
        }
    });
</script>
@endsection
