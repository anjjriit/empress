@extends('layouts.app')

@section('content')
<div class="container">

    @include('flash::message')

    {!! Form::model($page, ['route' => ['pages.update', $page->id], 'method' => 'patch', 'class' => 'form-horizontal']) !!}

        @include('pages.form')

    {!! Form::close() !!}
</div>
@endsection
