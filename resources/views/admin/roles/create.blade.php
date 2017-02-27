@extends('layouts.front.app')
@section('title', 'Create Role')

@section('content')
<div class="container">
	<div class="row">
		<div class="col s12">
           <div class="card">
                <div class="card-content">
                    <span class="card-title">Create Role</span>
                    <hr>
                    {!! Form::open(['route' => 'admin.roles.store', 'id' => 'role-create']) !!}
                        @include('admin.roles.form')
                    {!! Form::close() !!}
            </div>
       </div>
	</div>
</div>
@endsection

@section('scripts')
<script>
	$('#role-create').validate({
        rules: {

        },
        messages: {
            
        }
    });
</script>
@endsection
