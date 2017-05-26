@extends('layouts.front.app')
@section('title', trans('admin/roles.title'))

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">{{ trans('admin/roles.title') }}</span>
                    {!! link_to_route('admin.roles.create', trans('admin/roles.add'), [], ['class' => 'btn light-blue lighten-2 waves-effect waves-light right' . ( ! auth()->user()->can('create_roles') ? ' disabled' : '')]) !!}
                    <hr>
                    <table class="responsive">
                        <thead>
                            <th data-field="display_name">{{ trans('admin/roles.col.display') }}</th>
                            <th data-field="name">{{ trans('admin/roles.col.name') }}</th>
                            <th data-field="description">{{ trans('admin/roles.col.description') }}</th>
                            <th class="right">{{ trans('common.action') }}</th>
                        </thead>
                        <tbody>
                            @if(! $roles->isEmpty())
                            @foreach($roles as $role)
                            <tr>
                                <td>{{ $role->display_name }}</td>
                                <td>{{ $role->name }}</td>
                                <td>{{ $role->description }}</td>
                                <td class="right">
                                    <a href="{{ route('admin.roles.edit', ['role' => $role->id]) }}" class="green-text text-lighten-1{{ ! auth()->user()->can('edit_roles') ? ' disabled' : ''}}" title="{{ trans('common.edit') }}">
                                        <i class="material-icons">create</i>
                                    </a>
                                    <a href="{{ route('admin.roles.destroy', ['role' => $role->id]) }}" class="delete red-text text-lighten-2{{ ! auth()->user()->can('delete_roles') ? ' disabled' : ''}}" title="{{ trans('common.delete') }}">
                                       <i class="material-icons">delete</i> 
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="5" class="center">{{ trans('admin/roles.not-found') }}</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                @include('admin.common.paginate', ['records' => $roles])
            </div> 
        </div>
    </div>
</div>
@include('admin.common.confirm', [
    'body' => trans('common.destroy', ['type' => 'role'])
])
@endsection
