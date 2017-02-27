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
	</div>
</div>
<div class="card-action">
	{!! link_to_route('admin.users.index', 'Cancel', [], ['class' => 'btn grey waves-effect waves-light']) !!}
	{!! Form::submit('Save', ['class' => 'btn light-blue lighten-2 waves-effect waves-light']) !!}
</div>
