@extends('layouts.front.app')
@section('title', 'Roles')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Roles</span>
                    {!! link_to_route('admin.roles.create', 'Add Role', [], ['class' => 'btn light-blue lighten-2 waves-effect waves-light right']) !!}
                    <hr>
                    <table class="responsive">
                        <thead>
                            <th data-field="display_name">Display</th>
                            <th data-field="name">Name</th>
                            <th data-field="description">Description</th>
                            <th class="right">Action</th>
                        </thead>
                        <tbody>
                            @if(! $roles->isEmpty())
                            @foreach($roles as $role)
                            <tr>
                                <td>{{ $role->display_name }}</td>
                                <td>{{ $role->name }}</td>
                                <td>{{ $role->description }}</td>
                                <td class="right">
                                    <a href="{{ route('admin.roles.edit', ['role' => $role->id]) }}" class="green-text text-lighten-1" title="Edit">
                                        <i class="material-icons">create</i>
                                    </a>
                                    <a href="{{ route('admin.roles.destroy', ['role' => $role->id]) }}" class="red-text text-lighten-2" title="Delete">
                                       <i class="material-icons">delete</i> 
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="5" class="center">No Roles found.</td>
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
@endsection
