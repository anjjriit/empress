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
        <!-- <editor name="content" input="{{ isset($page->content) ? $page->content : null }}"></editor> -->
        {!! Form::textarea('content', null, ['id' => 'content', 'aria-required' => 'true', 'rows' => '12', 'class' => '', 'required']) !!}
        {!! Form::label('content', 'Content', ['for' => 'content']) !!}
    </div>

    <div class="input-field col s12">
        {!! link_to_route('admin.pages.index', 'Cancel', [], ['class' => 'btn grey waves-effect waves-light']) !!}
        {!! Form::submit('Save', ['class' => 'btn light-blue lighten-2 waves-effect waves-light']) !!}
    </div>
</div>
