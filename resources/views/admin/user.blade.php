@extends('layouts.app')

@section('title', 'My users')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-user"> List of Users</i>
                </div>
            <div class="panel-body">
            @include('includes.flash')
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>email</th>
                                    <th>User Type</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $user)
                                <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if ($user->is_admin === 0)
                                        <p class="label label-success">Normal User</p>
                                    @else
                                        <p class="label label-danger">Admin</p>
                                    @endif
                                </td>
                                <td>
                                    @if ($user->is_admin === 0)
                                        <form action="{{ url('admin/delete_user/' . $user->id) }}" method="POST">
                                        {!! csrf_field() !!}
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    @else
                                        <button type="submit" class="btn btn-danger" disabled>Delete</button>
                                    @endif
                                    
                                </td>
                                </tr>
                            @endforeach            
                                    
                            
                            </tbody>
                        </table>
                </div>
                
            </div>
        </div>
    </div>
@endsection