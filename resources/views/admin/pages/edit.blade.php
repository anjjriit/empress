@extends('layouts.front.app')
@section('title', 'Edit ' . $page->title)

@section('content')
<div class="container">
	<div class="row">
		<div class="col s12">
           <div class="card">
                <div class="card-content">
                    <span class="card-title">Edit {{ $page->title }}</span>
                    <hr>
                    {!! Form::model($page, ['route' => ['admin.pages.update', $page->id], 'method' => 'post', 'id' => 'page-edit']) !!}
	        		@include('admin.pages.form')
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
