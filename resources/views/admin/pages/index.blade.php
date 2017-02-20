@extends('layouts.front.app')
@section('title', 'Pages')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12">
            <h4 class="left">Pages</h4>
            {!! link_to_route('admin.pages.create', 'Add New', [], ['class' => 'btn light-blue lighten-2 waves-effect waves-light right', 'style' => 'margin-top: 1.2rem']) !!}
        </div>
    </div>

    <div class="row">
        <div class="col s12">
        @if($pages->isEmpty())
            <div class="center">No Pages found.</div>
        @else
            <table class="bordered striped responsive">
                <thead>
                    <th data-field="title">Title</th>
    				<th data-field="slug">Slug</th>
                    <th class="right">Action</th>
                </thead>
                <tbody>
                    @foreach($pages as $page)
                    <tr>
                        <td>
                            <a href="{{ route('admin.pages.show', ['page' => $page->id]) }}">
                                {{ $page->title }}
                            </a>
                        </td>
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
    </div>

    @include('admin.common.paginate', ['records' => $pages])
</div>
@endsection