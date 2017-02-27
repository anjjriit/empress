	<div class="row">
			<div class="input-field col s12">
    	{!! Form::text('name', null, ['id' => 'name', 'aria-required' => 'true', 'required']) !!}
        {!! Form::label('name', 'Name', ['for' => 'name']) !!}
    </div>


	<div class="input-field col s12">
    	{!! Form::text('display_name', null, ['id' => 'display_name', 'aria-required' => 'true', 'required']) !!}
        {!! Form::label('display_name', 'Display Name', ['for' => 'display_name']) !!}
    </div>


	<div class="input-field col s12">
    	{!! Form::text('description', null, ['id' => 'description', 'aria-required' => 'true', 'required']) !!}
        {!! Form::label('description', 'Description', ['for' => 'description']) !!}
    </div>

	</div>
</div>
<div class="card-action">
	{!! link_to_route('admin.permissions.index', 'Cancel', [], ['class' => 'btn grey waves-effect waves-light']) !!}
	{!! Form::submit('Save', ['class' => 'btn light-blue lighten-2 waves-effect waves-light']) !!}
</div>
