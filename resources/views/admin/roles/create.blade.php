@extends('layouts.front.app')
@section('title', 'Create Role')

@section('content')
<div class="container">
	<div class="row">
		<div class="col s12">
           <div class="card">
                {!! Form::open(['route' => 'admin.roles.store', 'id' => 'role-create']) !!}
                <div class="card-content">
                    <span class="card-title">Create Role</span>
                    <hr>
                    @include('admin.roles.form')
                </div>
                <div class="card-action">
                    {!! link_to_route('admin.roles.index', 'Cancel', [], ['class' => 'btn grey waves-effect waves-light']) !!}
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
	Validators.role($('#role-create'));
</script>
@endsection
