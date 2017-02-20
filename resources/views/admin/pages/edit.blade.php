@extends('layouts.front.app')
@section('title', 'Edit ' . $page->title)

@section('content')
<div class="container">
	<div class="row">
		<div class="col s12">
           <h4 class="left">{{ $page->title }}</h4>
       </div>
	</div>
	<div class="row">
	    {!! Form::model($page, ['route' => ['admin.pages.update', $page->id], 'method' => 'post', 'class' => 'col s12', 'id' => 'login-edit']) !!}
	        @include('admin.pages.form')
	    {!! Form::close() !!}
    </div>
</div>
@endsection

@section('scripts')
<script>
	
</script>
@endsection
