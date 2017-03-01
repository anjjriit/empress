@extends('layouts.front.app')
@section('title', 'Create Permission')

@section('content')
<div class="container">
	<div class="row">
		<div class="col s12">
           <div class="card">
                {!! Form::open(['route' => 'admin.permissions.store', 'id' => 'permission-create']) !!}
                <div class="card-content">
                    <span class="card-title">Create Permission</span>
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
	$('#permission-create').validate({
        rules: {
            name: 'required'
        },
        messages: {
            name: 'Please enter a Name.'
        }
    });
</script>
@endsection
