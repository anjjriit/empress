<div class="row">
	<div class="input-field col s12">
    	{!! Form::text('username', null, ['id' => 'username', 'aria-required' => 'true', 'required']) !!}
        {!! Form::label('username', trans('admin/users.form.username'), ['for' => 'username']) !!}
    </div>

	<div class="input-field col s12">
    	{!! Form::text('name', null, ['id' => 'name', 'aria-required' => 'true', 'required']) !!}
        {!! Form::label('name', trans('admin/users.form.name'), ['for' => 'name']) !!}
    </div>

	<div class="input-field col s12">
    	{!! Form::text('email', null, ['id' => 'email', 'aria-required' => 'true', 'required']) !!}
        {!! Form::label('email', trans('admin/users.form.email'), ['for' => 'email']) !!}
    </div>

    <div class="input-field col s12">
        {!! Form::select('roles[]', $roles, $current, ['placeholder' => trans('admin/users.form.select'), 'id' => 'roles', 'aria-required' => 'true', 'required', 'multiple']) !!}
        {!! Form::label('roles', trans('admin/users.form.roles'), ['for' => 'roles']) !!}
    </div>
</div>