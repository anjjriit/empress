<div class="row">
	<div class="input-field col s12">
    	{!! Form::text('username', null, ['id' => 'username', 'aria-required' => 'true', 'required']) !!}
        {!! Form::label('username', 'Username', ['for' => 'username']) !!}
    </div>

	<div class="input-field col s12">
    	{!! Form::text('name', null, ['id' => 'name', 'aria-required' => 'true', 'required']) !!}
        {!! Form::label('name', 'Name', ['for' => 'name']) !!}
    </div>

	<div class="input-field col s12">
    	{!! Form::text('email', null, ['id' => 'email', 'aria-required' => 'true', 'required']) !!}
        {!! Form::label('email', 'Email', ['for' => 'email']) !!}
    </div>

    <div class="input-field col s12">
        {!! Form::select('roles[]', $roles, $current, ['placeholder' => 'Select Roles', 'id' => 'roles', 'aria-required' => 'true', 'required', 'multiple']) !!}
        {!! Form::label('roles', 'Roles', ['for' => 'roles']) !!}
    </div>
</div>