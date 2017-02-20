@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                @if (Auth::user()->is_admin)
                <div class="panel-heading">Admin Dashboard</div>
                @else
                <div class="panel-heading">Dashboard</div>
                @endif
                <div class="panel-body">
                    <p>Welcome {{auth()->user()->name}}, You are logged in!</p>

                    @if (Auth::user()->is_admin)
                        <p>
                            See all <a href="{{ url('admin/tickets') }}">tickets</a> or <a href="{{ url('user') }}">display users</a>
                        </p>
                    @else
                        <p>
                            See all your <a href="{{ url('my_tickets') }}">tickets</a> or <a href="{{ url('new_ticket') }}">open new ticket</a>
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
