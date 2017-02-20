@extends('layouts.app')

@section('content')
<div class="container">

    @include('flash::message')

    {!! Form::open(['route' => 'pages.store', 'class' => 'form-horizontal']) !!}

        @include('pages.form')

    {!! Form::close() !!}
</div>
@endsection
