@extends('layouts.front.app')
@section('title', 'Permissions')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Permissions</span>
                    {!! link_to_route('admin.permissions.create', 'Add Permission', [], ['class' => 'btn light-blue lighten-2 waves-effect waves-light right']) !!}
                    <hr>
                    <table class="responsive">
                        <thead>
                            <th data-field="display_name">Display</th>
                            <th data-field="name">Name</th>
                            <th data-field="description">Description</th>
                            <th data-field="roles">Roles</th>
                            <th class="right">Action</th>
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
                                    <a href="{{ route('admin.permissions.edit', ['permission' => $permission->id]) }}" class="green-text text-lighten-1" title="Edit">
                                        <i class="material-icons">create</i>
                                    </a>
                                    <a href="{{ route('admin.permissions.destroy', ['permission' => $permission->id]) }}" class="red-text text-lighten-2" title="Delete">
                                       <i class="material-icons">delete</i> 
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="5" class="center">No Permissions found.</td>
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
