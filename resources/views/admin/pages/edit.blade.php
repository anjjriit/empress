@extends('layouts.front.app')
@section('title', 'Edit ' . $page->title)

@section('content')
<div class="container">
	<div class="row">
		<div class="col s12">
            <div class="card">
           		{!! Form::model($page, ['route' => ['admin.pages.update', $page->id], 'method' => 'post', 'id' => 'page-edit']) !!}
                <div class="card-content">
                    <span class="card-title">Edit {{ $page->title }}</span>
                    <hr>
	        		@include('admin.pages.form')
	        	</div>
	        	<div class="card-action">
				    {!! link_to_route('admin.pages.index', 'Cancel', [], ['class' => 'btn grey waves-effect waves-light']) !!}
				    {!! Form::submit('Save', ['class' => 'btn light-blue lighten-2 waves-effect waves-light']) !!}
				</div>
	    		{!! Form::close() !!}
            </div>
        </div>
	</div>
</div>
@endsection

@section('scripts')
<script>
	$(document).ready(function() {
		$('.editor').meltdown();
	});

	$('.meltdown_preview pre code').each(function(i, block) {
	    hljs.highlightBlock(block);
	});

</script>
@endsection
