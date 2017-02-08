            <header>
                @if(Auth::check())
                <ul id="setting-panel" class="dropdown-content">
                    <li><a href="{{ route('auth.logout') }}">Logout</a></li>
                </ul>
                @endif
                <nav class="orange darken-2">
                    <div class="container nav-wrapper">
                        <a href="{{ route('front.home.index') }}" class="brand-logo waves-effect waves-orange">{{ config('app.name') }}</a>
                        <a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle hide-on-large-only">
                            <i class="material-icons white-text">menu</i>
                        </a>
                        <ul class="right hide-on-med-and-down">
                            @if (Auth::guest())
                            <li><a href="{{ route('auth.login.show') }}" class="waves-effect waves-orange">Login</a></li>
                            <li><a href="{{ route('auth.register.show') }}" class="waves-effect waves-orange">Register</a></li>
                            @else
                            <li><a href="{{ route('front.home.show') }}" class="waves-effect waves-orange">Home</a></li>
                            <li>
                                <a class="dropdown-button" href="#!" data-activates="setting-panel">
                                    {{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i>
                                </a>
                            </li>
                            @endif
                        </ul>
                        <ul id="nav-mobile" class="side-nav">
                            @if (Auth::guest())
                            <li><a href="{{ route('auth.login.show') }}" class="waves-effect waves-light">Login</a></li>
                            <li><a href="{{ route('auth.register.show') }}" class="waves-effect waves-light">Register</a></li>
                            @else
                            <li><a href="{{ route('front.home.show') }}" class="waves-effect waves-light">Home</a></li>
                            @endif
                        </ul>
                    </div>
                </nav>
            </header>