@extends('layouts.app')
@section('title', '404 Not Found')

@section('content')
<main class="valign-wrapper">
	<div class="container valign">
	    <div class="row">
	        <div class="col s12">
	        	<h1 class="red-text">Whoops!</h1>
	        	<h3>404 Not Found</h3>
	        	<p>The requested resource could not be found, but may be available again in the future.</p>
	        	<p>Check back at another time.</p>
	        	<button class="btn grey waves-effect waves-light" onclick="window.history.go(-1)">Back</button>
	        </div>
	    </div>
	</div>
</main>
@endsection
