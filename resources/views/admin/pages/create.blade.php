@extends('layouts.front.app')
@section('title', trans('admin/pages.add'))

@section('content')
<div class="container">
	<div class="row">
		<div class="col s12">
            <div class="card">
            	{!! Form::open(['route' => 'admin.pages.store', 'id' => 'page-create']) !!}
                <div class="card-content">
                    <span class="card-title">{{ trans('admin/pages.add') }}</span>
                    <hr>
                    @include('admin.pages.form')
                </div>
                <div class="card-action">
				    {!! link_to_route('admin.pages.index', trans('common.cancel'), [], ['class' => 'btn grey waves-effect waves-light']) !!}
				    {!! Form::submit(trans('common.save'), ['class' => 'btn light-blue lighten-2 waves-effect waves-light']) !!}
				</div>
                {!! Form::close() !!}
            </div>
        </div>
	</div>
</div>
@endsection

@section('scripts')
<link href="{{ asset(mix('/css/editor.css')) }}" rel="stylesheet" type="text/css">
<script src="{{ asset('editor/editormd.js') }}"></script>
<script>
    Validators.page($('#page-create'));

    var editor = editormd('editor');

</script>
@endsection