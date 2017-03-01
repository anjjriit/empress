<div class="row">
    <div class="input-field col s12">
        {!! Form::text('title', null, ['id' => 'title', 'aria-required' => 'true', 'required']) !!}
        {!! Form::label('title', 'Title', ['for' => 'title']) !!}
    </div>

    <div class="input-field col s12">
    	{!! Form::text('slug', null, ['id' => 'slug', 'aria-required' => 'true', 'required']) !!}
        {!! Form::label('slug', 'Slug', ['for' => 'slug']) !!}
    </div>

    <div class="input-field col s12">
        {!! Form::textarea('content', null, ['id' => 'content', 'aria-required' => 'true', 'rows' => '12', 'class' => 'editor', 'required']) !!}
        {!! Form::label('content', 'Content', ['for' => 'content']) !!}
    </div>
</div>