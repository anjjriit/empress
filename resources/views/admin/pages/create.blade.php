@extends('layouts.front.app')
@section('title', 'Create Page')

@section('content')
<div class="container">
	<div class="row">
		<div class="col s12">
           <h4 class="left">Create Page</h4>
       </div>
	</div>
	<div class="row">
    {!! Form::open(['route' => 'admin.pages.store', 'class' => 'form-horizontal']) !!}
        @include('admin.pages.form')
    {!! Form::close() !!}
    </div>
</div>
@endsection

@section('scripts')
<script>
	
</script>
@endsection