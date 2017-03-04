@extends('layouts.app')
@section('title', '401 Unauthorized')

@section('content')
<main class="valign-wrapper">
	<div class="container valign">
	    <div class="row">
	        <div class="col s12">
	        	<h1 class="red-text">Whoops!</h1>
	        	<h3>403 Unauthorized</h3>
	        	<p>Looks like you've strayed past your pay grade.</p>
	        	<p>Check with your administrator and see if maybe they need to add an additional role to your account.</p>
	        	<button class="btn grey waves-effect waves-light" onclick="window.history.go(-1)">Back</button>
	        </div>
	    </div>
	</div>
</main>
@endsection
