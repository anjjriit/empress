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
                    @if($permissions->isEmpty())
                    <br>
                    <div class="center">No Permissions found.</div>
                    @else
                    <table class="responsive">
                        <thead>
                            <th data-field="name">Name</th>
                            <th data-field="display_name">Display Name</th>
                            <th data-field="description">Description</th>
                            <th class="right">Action</th>
                        </thead>
                        <tbody>
                            @foreach($permissions as $permission)
                            <tr>
                                <td>{{ $permission->name }}</td>
                                <td>{{ $permission->display_name }}</td>
                                <td>{{ $permission->description }}</td>
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
                        </tbody>
                    </table>
                    @endif
                </div>
                @include('admin.common.paginate', ['records' => $permissions])
            </div>
        </div>
    </div>
</div>
@endsection
