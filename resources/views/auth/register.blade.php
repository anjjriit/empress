@extends('layouts.app')
@section('title', 'Register an Empress Account')

@section('content')
<main class="valign-wrapper">
    <div class="container valign">
        <div class="row">
            <div class="col s12 m8 offset-m2 l6 offset-l3">
                <form class="col s12" role="form" method="POST" action="{{ route('auth.register.store') }}">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">Register</span>
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">face</i>
                                    <input id="username" type="text" name="username" value="{{ old('username') }}" class="validate">
                                    <label for="username">Username</label>
                                </div>

                                <div class="input-field col s12">
                                    <i class="material-icons prefix">perm_identity</i>
                                    <input id="name" type="text" name="name" value="{{ old('name') }}" class="validate">
                                    <label for="name">Name</label>
                                </div>

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
                                    <i class="material-icons prefix">fingerprint</i>
                                    <input id="password-confirm" type="password" name="password_confirmation" class="validate">
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
