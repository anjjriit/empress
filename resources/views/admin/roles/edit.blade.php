@extends('layouts.front.app')
@section('title', trans('admin/roles.edit', ['name' => $role->display_name]))

@section('content')
<div class="container">
	<div class="row">
		<div class="col s12">
           <div class="card">
           		{!! Form::model($role, ['route' => ['admin.roles.update', $role->id], 'method' => 'post', 'id' => 'role-edit']) !!}
                <div class="card-content">
                    <span class="card-title">{{ trans('admin/roles.edit', ['name' => $role->display_name]) }}</span>
                    <hr>
	        		@include('admin.roles.form')
	        	</div>
				<div class="card-action">
				    {!! link_to_route('admin.roles.index', trans('common.cancel'), [], ['class' => 'btn grey waves-effect waves-light']) !!}
				    {!! Form::submit(trans('common.save'), ['class' => 'btn light-blue lighten-2 waves-effect waves-light']) !!}
				</div>
	    		{!! Form::close() !!}
            </div>
       </div>
	</div>
</div>
@endsection

@section('scripts')
<script>
	Validators.role($('#role-edit'));
</script>
@endsection