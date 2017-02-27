@extends('layouts.front.app')
@section('title', 'Edit ' . $role->display_name)

@section('content')
<div class="container">
	<div class="row">
		<div class="col s12">
           <div class="card">
                <div class="card-content">
                    <span class="card-title">Edit {{ $role->display_name }}</span>
                	{!! Form::model($role, ['route' => ['admin.roles.update', $role->id], 'method' => 'post', 'id' => 'role-edit']) !!}
	        		@include('admin.roles.form')
	    			{!! Form::close() !!}
            </div>
       </div>
	</div>
</div>
@endsection

@section('scripts')
<script>
	$('#role-edit').validate({
		rules: {

		},
		messages: {

		}
	});
</script>
@endsection