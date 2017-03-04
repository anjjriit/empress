<div class="row">
    <div class="input-field col s12">
        {!! Form::text('display_name', null, ['id' => 'display_name', 'aria-required' => 'false']) !!}
        {!! Form::label('display_name', trans('admin/roles.form.display'), ['for' => 'display_name']) !!}
    </div>

	<div class="input-field col s12">
    	{!! Form::text('name', null, ['id' => 'name', 'aria-required' => 'true', 'required']) !!}
        {!! Form::label('name', trans('admin/roles.form.name'), ['for' => 'name']) !!}
    </div>

	<div class="input-field col s12">
    	{!! Form::text('description', null, ['id' => 'description', 'aria-required' => 'false']) !!}
        {!! Form::label('description', trans('admin/roles.form.description'), ['for' => 'description']) !!}
    </div>
</div>