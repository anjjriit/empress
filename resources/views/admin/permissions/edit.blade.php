@extends('layouts.front.app')
@section('title', 'Edit ' . $permission->display_name)

@section('content')
<div class="container">
	<div class="row">
		<div class="col s12">
           <div class="card">
                <div class="card-content">
                    <span class="card-title">Edit {{ $permission->display_name }}</span>
                    <hr>
                    {!! Form::model($permission, ['route' => ['admin.permissions.update', $permission->id], 'method' => 'post', 'id' => 'permission-edit']) !!}
			        	@include('admin.permissions.form')
			    	{!! Form::close() !!}
            </div>
       </div>
	</div>
</div>
@endsection

@section('scripts')
<script>
	$('#permission-edit').validate({
		rules: {

		},
		messages: {

		}
	});
</script>
@endsection