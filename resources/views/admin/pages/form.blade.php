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
    	{!! Form::textarea('content', null, ['aria-required' => 'true', 'required']) !!}
    </div>

    <div class="input-field col s12">
        <editor name="content" input="{{ $page->content ?: null }}"></editor>
    </div>

    <div class="input-field col s12">
        {!! link_to_route('admin.pages.index', 'Cancel', [], ['class' => 'btn grey waves-effect waves-light']) !!}
        {!! Form::submit('Save', ['class' => 'btn light-blue lighten-2 waves-effect waves-light']) !!}
    </div>
</div>
