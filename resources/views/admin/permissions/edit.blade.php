@extends('layouts.front.app')
@section('title', 'Edit ' . $permission->display_name)

@section('content')
<div class="container">
	<div class="row">
		<div class="col s12">
           <div class="card">
           		{!! Form::model($permission, ['route' => ['admin.permissions.update', $permission->id], 'method' => 'post', 'id' => 'permission-edit']) !!}
                <div class="card-content">
                    <span class="card-title">Edit {{ $permission->display_name }}</span>
                    <hr>
			        @include('admin.permissions.form')
			    </div>
                <div class="card-action">
                    {!! link_to_route('admin.permissions.index', 'Cancel', [], ['class' => 'btn grey waves-effect waves-light']) !!}
                    {!! Form::submit('Save', ['class' => 'btn light-blue lighten-2 waves-effect waves-light']) !!}
                </div>
			    {!! Form::close() !!}
            </div>
       </div>
	</div>
</div>
@endsection

@section('scripts')
<script>
	Validators.permission($('#permission-edit'));
</script>
@endsection