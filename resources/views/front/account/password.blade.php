@extends('layouts.front.app')
@section('title', trans('front/passwords.title'))

@section('content')
<div class="container">
	<div class="row">
		<div class="col s12">
           <div class="card">
           		{!! Form::open(['route' => ['front.account.password.update', $account->username], 'id' => 'password-edit']) !!}
           		{!! Form::hidden('user_id', $account->id) !!}
                <div class="card-content">
                    <span class="card-title">{{ trans('front/passwords.edit', ['name' => $account->name]) }}</span>
                    <hr>
                    <div class="row">
						<div class="input-field col s12">
					    	{!! Form::password('password', ['id' => 'password', 'aria-required' => 'true', 'required']) !!}
					        {!! Form::label('password', trans('front/passwords.current'), ['for' => 'password']) !!}
					    </div>

						<div class="input-field col s12">
					    	{!! Form::password('new_password', ['id' => 'new_password', 'aria-required' => 'true', 'required']) !!}
					        {!! Form::label('new_password', trans('front/passwords.new'), ['for' => 'new_password']) !!}
					    </div>

						<div class="input-field col s12">
					    	{!! Form::password('new_password_confirmation', ['id' => 'new_password_confirmation', 'aria-required' => 'true', 'required']) !!}
					        {!! Form::label('new_password_confirmation', trans('front/passwords.confirm'), ['for' => 'new_password_confirmation']) !!}
					        <p class="red-text"><small><em>{{ trans('front/passwords.message') }}</em></small></p>
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
	Validators.password_change();
</script>
@endsection