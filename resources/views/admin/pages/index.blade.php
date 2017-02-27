@extends('layouts.front.app')
@section('title', 'Pages')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Pages</span>
                    {!! link_to_route('admin.pages.create', 'Add New', [], ['class' => 'btn light-blue lighten-2 waves-effect waves-light right']) !!}
                    <hr>
                    @if($pages->isEmpty())
                    <div class="center">No Pages found.</div>
                    @else
                        <table class="responsive">
                            <thead>
                                <th data-field="title">Title</th>
                                <th data-field="slug">Slug</th>
                                <th class="right">Action</th>
                            </thead>
                            <tbody>
                                @foreach($pages as $page)
                                <tr>
                                    <td>{{ $page->title }}</td>
                                    <td>{{ $page->slug }}</td>
                                    <td class="right">
                                        <a href="{{ route('admin.pages.edit', ['page' => $page->id]) }}" class="green-text text-lighten-1" title="Edit">
                                            <i class="material-icons">create</i>
                                        </a>
                                        <a href="{{ route('admin.pages.destroy', ['page' => $page->id]) }}" class="red-text text-lighten-2" title="Delete">
                                           <i class="material-icons">delete</i> 
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
                @include('admin.common.paginate', ['records' => $pages])
            </div>
        </div>
    </div>
</div>
@endsection