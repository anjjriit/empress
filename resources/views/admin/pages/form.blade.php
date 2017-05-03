<div class="row">
    <div class="input-field col s12">
        {!! Form::text('title', null, ['id' => 'title', 'aria-required' => 'true', 'required']) !!}
        {!! Form::label('title', trans('admin/pages.form.title'), ['for' => 'title']) !!}
    </div>

    <div class="input-field col s12">
    	{!! Form::text('slug', null, ['id' => 'slug', 'aria-required' => 'true', 'required']) !!}
        {!! Form::label('slug', trans('admin/pages.form.slug'), ['for' => 'slug']) !!}
    </div>

    <div class="input-field col s12">
        <editor input="{{ $page->content ?? null }}" name="{{ trans('admin/pages.form.content') }}"></editor>
    </div>
</div>