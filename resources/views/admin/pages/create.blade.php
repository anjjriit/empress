@extends('layouts.front.app')
@section('title', 'Create Page')

@section('content')
<div class="container">
	<div class="row">
		<div class="col s12">
           <div class="card">
                <div class="card-content">
                    <span class="card-title">Create Page</span>
                    <hr>
                    {!! Form::open(['route' => 'admin.pages.store', 'id' => 'page-create']) !!}
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