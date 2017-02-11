@extends('layouts.app')
@section('title', 'Reset Your Password')

@section('content')
<main class="valign-wrapper">
    <div class="container valign">
        <div class="row">
            <div class="col s12 m8 offset-m2 l6 offset-l3">
                <form class="col s12" role="form" method="POST" action="{{ route('auth.forgot.store') }}">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">Reset Password</span>
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">mail_outline</i>
                                    <input id="email" type="email" name="email" value="{{ old('email') }}" class="validate" required>
                                    <label for="email">E-mail Address</label>
                                </div>
                            </div>
                        </div>

                        <div class="card-action center">
                            <button type="submit" class="light-blue lighten-2 waves-effect waves-light btn-large">Reset Password</button>
                            <p class="center forgot">
                                <a href="{{ route('auth.login.show') }}">Cancel</a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
