@extends('layouts.front.app')
@section('title', 'Users')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Users</span>
                    {!! link_to_route('admin.users.create', 'Add User', [], ['class' => 'btn light-blue lighten-2 waves-effect waves-light right']) !!}
                    <hr>
                    <table class="responsive">
                        <thead>
                            <th data-field="username">Username</th>
							<th data-field="name">Name</th>
							<th data-field="email">Email</th>
							<th data-field="activated_at">Activated At</th>
                            <th class="right">Action</th>
                        </thead>
                        <tbody>
                            @if(! $users->isEmpty())
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->username }}</td>
								<td>{{ $user->name }}</td>
								<td>{{ $user->email }}</td>
								<td>{{ $user->activated_at }}</td>
                                <td class="right">
                                    <a href="{{ route('admin.users.edit', ['user' => $user->id]) }}" class="green-text text-lighten-1" title="Edit">
                                        <i class="material-icons">create</i>
                                    </a>
                                    <a href="{{ route('admin.users.destroy', ['user' => $user->id]) }}" class="red-text text-lighten-2" title="Delete">
                                       <i class="material-icons">delete</i> 
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="5" class="center">No Users found.</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                @include('admin.common.paginate', ['records' => $users])
            </div>
        </div>
    </div>
</div>
@endsection
