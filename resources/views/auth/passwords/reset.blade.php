@extends('layouts.app')
@section('title', 'Reset Your Password')

@section('content')
<main class="valign-wrapper">
    <div class="container valign">
        <div class="row">
            <div class="col s12 m8 offset-m2 l6 offset-l3">
                <form class="col s12" role="form" method="POST" action="{{ route('auth.reset.store') }}">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">Reset Password</span>
                                {{ csrf_field() }}
                                <input type="hidden" name="token" value="{{ $token }}">
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">mail_outline</i>
                                    <input id="email" type="email" name="email" class="validate" required>
                                    <label for="email">E-mail Address</label>
                                </div>

                                <div class="input-field col s12">
                                    <i class="material-icons prefix">fingerprint</i>
                                    <input id="password" type="password" name="password" class="validate" required>
                                    <label for="password">Password</label>
                                </div>

                                <div class="input-field col s12">
                                    <i class="material-icons prefix">fingerprint</i>
                                    <input id="password-confirm" type="password" name="password_confirmation" class="validate" required>
                                    <label for="password-confirm">Confirm Password</label>
                                </div>
                            </div>
                        </div>

                        <div class="card-action center">
                            <button type="submit" class="light-blue lighten-2 waves-effect waves-light btn-large">Reset Password</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
