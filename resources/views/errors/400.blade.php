@extends('layouts.app')
@section('title', '400 Bad Request')

@section('content')
<main class="valign-wrapper">
	<div class="container valign">
	    <div class="row">
	        <div class="col s12">
	        	<h1 class="red-text">Whoops!</h1>
	        	<h3>400 Bad Request</h3>
	        	<p>The request could not be understood by the server due to malformed syntax.</p>
	        	<p>Please DO NOT repeat the request without modifications.</p>
	        	<button class="btn grey waves-effect waves-light" onclick="window.history.go(-1)">Back</button>
	        </div>
	    </div>
	</div>
</main>
@endsection
