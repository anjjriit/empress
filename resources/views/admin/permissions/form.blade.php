<div class="row">
    <div class="input-field col s12">
        {!! Form::text('display_name', null, ['id' => 'display_name', 'aria-required' => 'false']) !!}
        {!! Form::label('display_name', 'Display', ['for' => 'display_name']) !!}
    </div>

    <div class="input-field col s12">
    	{!! Form::text('name', null, ['id' => 'name', 'aria-required' => 'true', 'required']) !!}
        {!! Form::label('name', 'Name', ['for' => 'name']) !!}
    </div>
    
	<div class="input-field col s12">
    	{!! Form::text('description', null, ['id' => 'description', 'aria-required' => 'false']) !!}
        {!! Form::label('description', 'Description', ['for' => 'description']) !!}
    </div>

    <div class="input-field col s12">
        {!! Form::select('roles[]', $roles, $current, ['placeholder' => 'Select Roles', 'id' => 'roles', 'aria-required' => 'true', 'required', 'multiple']) !!}
        {!! Form::label('roles', 'Roles', ['for' => 'roles']) !!}
    </div>
</div>