				<div class="nav-wrapper">
                    <a href="#" class="brand-logo hide-on-large-only nav-logo">{{ config('app.name') }}</a>
                    @include('components.front.breadcrumbs')
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="#">Top</a></li>
                        <li><a href="#">Links</a></li>
                        <li><a href="#">Here</a></li>
                        <li>
                            <a class="dropdown-button" data-activates="setting-panel">
                                Dropdown <i class="material-icons right">arrow_drop_down</i>
                            </a>
                            <ul id="setting-panel" class="dropdown-content">
                                <li><a href="{{ route('auth.logout') }}">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>