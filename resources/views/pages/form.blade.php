<div class="form-group {!! $errors->has('title') ? 'has-error' : '' !!}">
	{!! Form::label('title', 'Title', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
    	{!! Form::text('title', null, ['class' => 'form-control']) !!}
    	{!! $errors->first('title', '<small class="help-block">:message</small>') !!}
    </div>
</div>


<div class="form-group {!! $errors->has('slug') ? 'has-error' : '' !!}">
	{!! Form::label('slug', 'Slug', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
    	{!! Form::text('slug', null, ['class' => 'form-control']) !!}
    	{!! $errors->first('slug', '<small class="help-block">:message</small>') !!}
    </div>
</div>


<div class="form-group {!! $errors->has('content') ? 'has-error' : '' !!}">
	{!! Form::label('content', 'Content', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
    	{!! Form::textarea('content', null, ['class' => 'form-control']) !!}
    	{!! $errors->first('content', '<small class="help-block">:message</small>') !!}
    </div>
</div>


<!-- Submit Field -->
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    	{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
