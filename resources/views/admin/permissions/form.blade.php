<div class="row">
    <div class="input-field col s12">
        {!! Form::text('display_name', null, ['id' => 'display_name', 'aria-required' => 'false']) !!}
        {!! Form::label('display_name', trans('admin/permissions.form.display'), ['for' => 'display_name']) !!}
    </div>

    <div class="input-field col s12">
    	{!! Form::text('name', null, ['id' => 'name', 'aria-required' => 'true', 'required']) !!}
        {!! Form::label('name', trans('admin/permissions.form.name'), ['for' => 'name']) !!}
    </div>
    
	<div class="input-field col s12">
    	{!! Form::text('description', null, ['id' => 'description', 'aria-required' => 'false']) !!}
        {!! Form::label('description', trans('admin/permissions.form.description'), ['for' => 'description']) !!}
    </div>

    <div class="input-field col s12">
        {!! Form::select('roles[]', $roles, $current, ['placeholder' => trans('admin/permissions.form.select'), 'id' => 'roles', 'aria-required' => 'true', 'required', 'multiple']) !!}
        {!! Form::label('roles', trans('admin/permissions.form.roles'), ['for' => 'roles']) !!}
    </div>
</div>