@extends('layouts.front.app')
@section('title', 'Edit ' . $user->name)

@section('content')
<div class="container">
	<div class="row">
		<div class="col s12">
           <div class="card">
                <div class="card-content">
                    <span class="card-title">Edit {{ $user->name }}</span>
                    <hr>
                    {!! Form::model($user, ['route' => ['admin.users.update', $user->id], 'method' => 'post', 'id' => 'user-edit']) !!}
			        	@include('admin.users.form')
			    	{!! Form::close() !!}
            </div>
       </div>
	</div>
</div>
@endsection

@section('scripts')
<script>
	$('#user-edit').validate({
		rules: {

		},
		messages: {

		}
	});
</script>
@endsection