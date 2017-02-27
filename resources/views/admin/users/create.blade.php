@extends('layouts.front.app')
@section('title', 'Create User')

@section('content')
<div class="container">
	<div class="row">
		<div class="col s12">
           <div class="card">
                <div class="card-content">
                    <span class="card-title">Create User</span>
                    <hr>
                    {!! Form::open(['route' => 'admin.users.store', 'id' => 'user-create']) !!}
                        @include('admin.users.form')
                    {!! Form::close() !!}
            </div>
       </div>
	</div>
</div>
@endsection

@section('scripts')
<script>
	$('#user-create').validate({
        rules: {

        },
        messages: {
            
        }
    });
</script>
@endsection
