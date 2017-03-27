				<div class="nav-wrapper">
                    <a href="#" class="brand-logo hide-on-large-only nav-logo">{{ config('app.name') }}</a>
                    @include('components.front.breadcrumbs')
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li>
                            <a class="dropdown-button" data-activates="setting-panel">
                                {{ auth()->user()->name }} <i class="material-icons right">arrow_drop_down</i>
                            </a>
                            <ul id="setting-panel" class="dropdown-content">
                                <li><a href="#">{{ trans('front/sidebar.mine') }}</a></li>
                                <li><a href="#">{{ trans('front/sidebar.edit') }}</a></li>
                                <li><a href="{{ route('front.account.password', ['account' => auth()->user()->username]) }}">{{ trans('front/sidebar.auth') }}</a></li>
                                <li><a href="{{ route('front.account.settings', ['account' => auth()->user()->username]) }}">{{ trans('front/sidebar.settings') }}</a></li>
                                <li><a href="{{ route('auth.logout') }}">{{ trans('front/sidebar.logout') }}</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>