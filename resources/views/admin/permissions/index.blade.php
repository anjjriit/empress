@extends('layouts.front.app')
@section('title', trans('admin/permissions.title'))

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">{{ trans('admin/permissions.title') }}</span>
                    {!! link_to_route('admin.permissions.create', trans('admin/permissions.add'), [], ['class' => 'btn light-blue lighten-2 waves-effect waves-light right' . ( ! auth()->user()->can('create_permissions') ? ' disabled' : '')]) !!}
                    <hr>
                    <table class="responsive">
                        <thead>
                            <th data-field="display_name">{{ trans('admin/permissions.col.display') }}</th>
                            <th data-field="name">{{ trans('admin/permissions.col.name') }}</th>
                            <th data-field="description">{{ trans('admin/permissions.col.description') }}</th>
                            <th data-field="roles">{{ trans('admin/permissions.col.roles') }}</th>
                            <th class="right">{{ trans('common.action') }}</th>
                        </thead>
                        <tbody>
                            @if(! $permissions->isEmpty())
                            @foreach($permissions as $permission)
                            <tr>
                                <td>{{ $permission->display_name }}</td>
                                <td>{{ $permission->name }}</td>
                                <td><span class="truncate">{{ $permission->description }}</span></td>
                                <td>{{ implode(', ', $permission->roles()->pluck('display_name')->toArray()) }}</td>
                                <td class="right">
                                    <a href="{{ route('admin.permissions.edit', ['permission' => $permission->id]) }}" class="green-text text-lighten-1{{ ! auth()->user()->can('edit_permissions') ? ' disabled' : ''}}" title="{{ trans('common.edit') }}">
                                        <i class="material-icons">create</i>
                                    </a>
                                    <a href="{{ route('admin.permissions.destroy', ['permission' => $permission->id]) }}" class="red-text text-lighten-2{{ ! auth()->user()->can('delete_permissions') ? ' disabled' : ''}}" title="{{ trans('common.delete') }}">
                                       <i class="material-icons">delete</i> 
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="5" class="center">{{ trans('admin/permissions.not-found') }}</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                @include('admin.common.paginate', ['records' => $permissions])
            </div>
        </div>
    </div>
</div>
@endsection
