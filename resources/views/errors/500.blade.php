@extends('layouts.app')
@section('title', '500 Internal Server Error')

@section('content')
<main class="valign-wrapper">
	<div class="container valign">
	    <div class="row">
	        <div class="col s12">
	        	<h1 class="red-text">Whoops!</h1>
	        	<h3>500 Internal Server Error</h3>
	        	<p>The server encountered an unexpected condition which prevented it from fulfilling the request.</p>
	        	<button class="btn grey waves-effect waves-light" onclick="window.history.go(-1)">Back</button>
	        </div>
	    </div>
	</div>
</main>
@endsection
