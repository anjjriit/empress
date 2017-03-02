@extends('layouts.front.app')
@section('title', 'Edit ' . $user->name)

@section('content')
<div class="container">
	<div class="row">
		<div class="col s12">
            <div class="card">
            	{!! Form::model($user, ['route' => ['admin.users.update', $user->id], 'method' => 'post', 'id' => 'user-edit']) !!}
                <div class="card-content">
                    <span class="card-title">Edit {{ $user->name }}</span>
                    <hr>
			        @include('admin.users.form')
			    </div>
				<div class="card-action">
					{!! link_to_route('admin.users.index', 'Cancel', [], ['class' => 'btn grey waves-effect waves-light']) !!}
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
	Validators.user($('#user-edit'));
</script>
@endsection