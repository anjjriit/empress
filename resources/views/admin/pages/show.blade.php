@extends('layouts.front.app')
@section('title', $page->title)

@section('content')
<div class="container">
   <div class="row">
       <div class="col s12">
           <h4 class="left">{{ $page->title }}</h4>
           {!! link_to_route('admin.pages.edit', 'Edit', ['page' => $page->id], ['class' => 'btn light-blue lighten-2 waves-effect waves-light right', 'style' => 'margin-top: 1.2rem']) !!}
       </div>
   </div>
   <div class="row">
       <div class="col s12">
           {!! parsedown($page->content) !!}
       </div>
   </div>
   <div class="row">
       <div class="col s12">
           {!! link_to_route('admin.pages.index', 'Cancel', [], ['class' => 'btn grey waves-effect waves-light']) !!}
           {!! link_to_route('admin.pages.destroy', 'Delete', ['page' => $page->id], ['class' => 'btn red lighten-2 waves-effect waves-light']) !!}
       </div>
   </div>
</div>
@endsection
