@extends('layouts.app')
@section('title', 'Reset Your Password')

@section('content')
<main class="valign-wrapper">
    <div class="container valign">
        <div class="row">
            <div class="col s12 m8 offset-m2 l6 offset-l3">
                <form id="reset-form" class="col s12" role="form" method="POST" action="{{ route('auth.reset.store') }}" novalidate>
                    {{ csrf_field() }}
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">Reset Password</span>
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">mail_outline</i>
                                    <input id="email" type="email" name="email" value="{{ old('email') }}" required aria-required="true">
                                    <label for="email">E-mail Address</label>
                                </div>

                                <div class="input-field col s12">
                                    <i class="material-icons prefix">fingerprint</i>
                                    <input id="password" type="password" name="password" required aria-required="true">
                                    <label for="password">New Password</label>
                                </div>

                                <div class="input-field col s12">
                                    <i class="material-icons prefix">fingerprint</i>
                                    <input id="password-confirm" type="password" name="password_confirmation" required aria-required="true">
                                    <label for="password-confirm">Confirm Password</label>
                                </div>
                            </div>
                        </div>

                        <div class="card-action center">
                            <button type="submit" 
                                class="light-blue lighten-2 waves-effect waves-light btn-large">Reset Password</button>
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
    $('#reset-form').validate({
        rules: {
            email: {
                required: true,
                email: true
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
            email: {
                required: 'Your email address is required.',
                email: 'Must be a valid email address.'
            },
            password: {
                required: 'A new password is required.',
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
