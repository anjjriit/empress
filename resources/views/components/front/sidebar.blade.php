				<div id="nav-mobile" class="side-nav fixed">
					<ul class="main-nav">
						<li class="hide-on-med-and-down">
							<a href="{{ route('front.dashboard.index') }}" class="brand-logo nav-logo">{{ config('app.name') }}</a>
						</li>
						<hr class="hide-on-med-and-down">
						<li class="user">
							<div class="photo">
								<img class="responsive-img" src="{{ asset('storage/img/placeholder.jpg') }}">
							</div>
							<div class="info">
								<ul class="collapsible collapsible-accordion">
									<li class="bold">
										<a class="collapsible-header waves-effect center waves-light">
											<i class="material-icons">face</i>
											{{ auth()->user()->name }}
											<i class="material-icons right">expand_more</i>
										</a>
										<div class="collapsible-body">
											<ul>
												<li>
													<a href="#" class="waves-effect waves-light">{{ trans('front/sidebar.mine') }}</a>
												</li>
												<li>
													<a href="#" class="waves-effect waves-light">{{ trans('front/sidebar.edit') }}</a>
												</li>
												<li>
													<a href="#" class="waves-effect waves-light">{{ trans('front/sidebar.settings') }}</a>
												</li>
												<li>
													<a href="{{ route('auth.logout') }}" class="waves-effect waves-light">{{ trans('front/sidebar.logout') }}</a>
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</li>
						<hr>
						<li class="bold">
							<a href="{{ route('front.dashboard.index') }}" class="waves-effect waves-light">
								<i class="material-icons">dashboard</i>
								{{ trans('front/sidebar.dashboard') }}
							</a>
						</li>
		    			<li class="bold">
		    				<a href="#" class="waves-effect waves-light">
		    					<i class="material-icons">email</i>
                            	{{ trans('front/sidebar.messages') }}
		    				</a>
		    			</li>
		    			<li class="bold">
		    				<ul class="collapsible collapsible-accordion">
								<li class="bold">
									<a class="collapsible-header waves-effect waves-light">
										<i class="material-icons">image</i>
										{{ trans('front/sidebar.photos.photo') }}
										<i class="material-icons right">expand_more</i>
									</a>
									<div class="collapsible-body">
										<ul>
											<li>
												<a href="#" 
													class="waves-effect waves-light">{{ trans('front/sidebar.photos.add') }}</a>
											</li>
											<li>
												<a href="#" 
													class="waves-effect waves-light">{{ trans('front/sidebar.photos.edit') }}</a>
											</li>
											<li>
												<a href="#" 
													class="waves-effect waves-light">{{ trans('front/sidebar.photos.private') }}</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="bold">
									<a class="collapsible-header waves-effect waves-light">
										<i class="material-icons">credit_card</i>
										{{ trans('front/sidebar.subscriptions.subscription') }}
										<i class="material-icons right">expand_more</i>
									</a>
									<div class="collapsible-body">
										<ul>
											<li>
												<a href="#" 
													class="waves-effect waves-light">{{ trans('front/sidebar.subscriptions.mine') }}</a>
											</li>
											<li>
												<a href="#" 
													class="waves-effect waves-light">{{ trans('front/sidebar.subscriptions.cancel') }}</a>
											</li>
										</ul>
									</div>
								</li>
								@if(auth()->user()->can('access_admin'))
								<li class="bold">
		    						<a class="collapsible-header waves-effect waves-light">
										<i class="material-icons">people</i>
										{{ trans('front/sidebar.personnel.personnel') }}
										<i class="material-icons right">expand_more</i>
									</a>
									<div class="collapsible-body">
										<ul>
											<li>
												<a href="{{ route('admin.roles.index') }}" 
												   class="waves-effect waves-light">{{ trans('front/sidebar.personnel.roles') }}</a>
											</li>
											<li>
												<a href="{{ route('admin.permissions.index') }}" 
												   class="waves-effect waves-light">{{ trans('front/sidebar.personnel.permissions') }}</a>
											</li>
											<li>
												<a href="{{ route('admin.users.index') }}" 
												   class="waves-effect waves-light">{{ trans('front/sidebar.personnel.users') }}</a>
											</li>
										</ul>
									</div>
		    					</li>
		    					@endif
		    				</ul>
		    			</li>
		    			<li class="bold">
		    				<a href="{{ route('admin.pages.index') }}" class="waves-effect waves-light">
		    					<i class="material-icons">insert_drive_file</i>
                            	{{ trans('front/sidebar.pages') }}
		    				</a>
		    			</li>
					</ul>
				</div>