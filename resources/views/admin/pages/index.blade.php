@extends('layouts.front.app')
@section('title', trans('admin/pages.title'))

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">{{ trans('admin/pages.title') }}</span>
                    {!! link_to_route('admin.pages.create', trans('admin/pages.add'), [], ['class' => 'btn light-blue lighten-2 waves-effect waves-light right' . (! auth()->user()->can('create_pages') ? ' disabled' : '')]) !!}
                    <hr>
                    <table class="responsive">
                        <thead>
                            <th data-field="title">{{ trans('admin/pages.col.title') }}</th>
                            <th data-field="slug">{{ trans('admin/pages.col.slug') }}</th>
                            <th class="right">{{ trans('common.action') }}</th>
                        </thead>
                        <tbody>
                            @if(! $pages->isEmpty())
                            @foreach($pages as $page)
                            <tr>
                                <td>{{ $page->title }}</td>
                                <td>{{ $page->slug }}</td>
                                <td class="right">
                                    <a href="{{ route('admin.pages.edit', ['page' => $page->id]) }}" class="green-text text-lighten-1{{ ! auth()->user()->can('edit_pages') ? ' disabled' : ''}}" title="{{ trans('common.edit') }}">
                                        <i class="material-icons">create</i>
                                    </a>
                                    <a href="{{ route('admin.pages.destroy', ['page' => $page->id]) }}" class="delete red-text text-lighten-2{{ ! auth()->user()->can('delete_pages') ? ' disabled' : ''}}" title="{{ trans('common.delete') }}">
                                       <i class="material-icons">delete</i> 
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="3" class="center">{{ trans('admin/pages.not-found') }}</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                @include('admin.common.paginate', ['records' => $pages])
            </div>
        </div>
    </div>
</div>
@include('admin.common.confirm', [
    'body' => trans('common.destroy', ['type' => 'page'])
])
@endsection
