            <header>
                <nav class="orange darken-2">
                    <div class="container nav-wrapper">
                        <a href="{{ route('front.index') }}" class="brand-logo nav-logo waves-effect waves-orange">{{ config('app.name') }}</a>
                        <a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle hide-on-large-only">
                            <i class="material-icons white-text">menu</i>
                        </a>
                        <ul class="right hide-on-med-and-down">
                            @if (Auth::guest())
                            <li><a href="{{ route('auth.login.show') }}" class="waves-effect waves-orange">Login</a></li>
                            <li><a href="{{ route('auth.register.show') }}" class="waves-effect waves-orange">Register</a></li>
                            @else
                            <li><a href="{{ route('front.dashboard.index') }}" class="waves-effect waves-orange">Dashboard</a></li>
                            <li>
                                <a class="dropdown-button" data-activates="setting-panel">
                                    {{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i>
                                </a>
                                <ul id="setting-panel" class="dropdown-content">
                                    <li><a href="{{ route('auth.logout') }}">Logout</a></li>
                                </ul>
                            </li>
                            @endif
                        </ul>
                        <ul id="nav-mobile" class="side-nav">
                            @if (Auth::guest())
                            <li><a href="{{ route('auth.login.show') }}" class="waves-effect waves-light">Login</a></li>
                            <li><a href="{{ route('auth.register.show') }}" class="waves-effect waves-light">Register</a></li>
                            @else
                            <li><a href="{{ route('front.dashboard.index') }}" class="waves-effect waves-light">Dashboard</a></li>
                            <li>
                                <a class="dropdown-button" data-activates="sidenav-panel">
                                    {{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i>
                                </a>
                                <ul id="sidenav-panel" class="dropdown-content">
                                    <li><a href="{{ route('auth.logout') }}">Logout</a></li>
                                </ul>
                            </li>
                            @endif
                        </ul>
                    </div>
                </nav>
            </header>