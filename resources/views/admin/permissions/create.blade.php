@extends('layouts.front.app')
@section('title', 'Create Permission')

@section('content')
<div class="container">
	<div class="row">
		<div class="col s12">
           <div class="card">
                <div class="card-content">
                    <span class="card-title">Create Permission</span>
                    <hr>
                    {!! Form::open(['route' => 'admin.permissions.store', 'id' => 'permission-create']) !!}
                        @include('admin.permissions.form')
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

        },
        messages: {
            
        }
    });
</script>
@endsection
