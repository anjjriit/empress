@extends('layouts.front.app')
@section('title', trans('front/settings.title'))

@section('content')
<div class="container">
	<div class="row">
		<div class="col s12">
           <div class="card">
           		{!! Form::model($account, ['route' => ['front.account.settings.update', $account->username], 'method' => 'post', 'id' => 'settings-edit']) !!}
           		{!! Form::hidden('user_id', $account->id) !!}
                <div class="card-content">
                    <span class="card-title">{{ trans('front/settings.edit', ['name' => $account->name]) }}</span>
                    <hr>
					<div class="row">
						<div class="input-field col s12">
					    	{!! Form::text('username', null, ['id' => 'username', 'aria-required' => 'true', 'required']) !!}
					        {!! Form::label('username', trans('front/settings.username'), ['for' => 'username']) !!}
					    </div>

						<div class="input-field col s12">
					    	{!! Form::text('name', null, ['id' => 'name', 'aria-required' => 'true', 'required']) !!}
					        {!! Form::label('name', trans('front/settings.name'), ['for' => 'name']) !!}
					    </div>

						<div class="input-field col s12">
					    	{!! Form::text('email', null, ['id' => 'email', 'aria-required' => 'true', 'required']) !!}
					        {!! Form::label('email', trans('front/settings.email'), ['for' => 'email']) !!}
					        <p class="red-text"><small><em>If you change your email address you will need to re-activate your account.</em></small></p>
					    </div>
					</div> 		
	        	</div>
				<div class="card-action">
				    {!! link_to_route('front.dashboard.index', trans('common.cancel'), [], ['class' => 'btn grey waves-effect waves-light']) !!}
				    {!! Form::submit(trans('common.save'), ['class' => 'btn light-blue lighten-2 waves-effect waves-light']) !!}
				</div>
	    		{!! Form::close() !!}
           </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
	Validators.settings();
</script>
@endsection
