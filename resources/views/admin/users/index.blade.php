@extends('layouts.front.app')
@section('title', trans('admin/users.title'))

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">{{ trans('admin/users.title') }}</span>
                    {!! link_to_route('admin.users.create', trans('admin/users.add'), [], ['class' => 'btn light-blue lighten-2 waves-effect waves-light right' . (!auth()->user()->can('create_users') ? ' disabled' : '')]) !!}
                    <hr>
                    <table class="responsive">
                        <thead>
                            <th data-field="username">{{ trans('admin/users.col.username') }}</th>
							<th data-field="name">{{ trans('admin/users.col.name') }}</th>
							<th data-field="email">{{ trans('admin/users.col.email') }}</th>
							<th data-field="activated_at">{{ trans('admin/users.col.activated') }}</th>
                            <th class="right">{{ trans('common.action') }}</th>
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
                                    <a href="{{ route('admin.users.edit', ['user' => $user->id]) }}" class="green-text text-lighten-1{{ ! auth()->user()->can('edit_users') ? ' disabled' : '' }}" title="{{ trans('common.edit') }}">
                                        <i class="material-icons">create</i>
                                    </a>
                                    <a href="{{ route('admin.users.destroy', ['user' => $user->id]) }}" class="delete red-text text-lighten-2 {{ ! auth()->user()->can('delete_users') ? ' disabled' : '' }}" title="{{ trans('common.delete') }}">
                                       <i class="material-icons">delete</i> 
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="5" class="center">{{ trans('admin/users.not-found') }}</td>
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
@include('admin.common.confirm', [
    'body' => trans('common.destroy', ['type' => 'user'])
])
@endsection
