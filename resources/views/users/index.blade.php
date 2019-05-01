


@extends('layout')

@section('content')

<h1>Users</h1>

    <table class="table">
        <thead>
            <tr>

                <th>{!! sort_users_by('username','Username')!!}</th>
                <th>{!! sort_users_by('email','Email')!!}</th>
            </tr>

        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->username}}</td>
                    <td>{{$user->email}}</td>

                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {{$users->links()}}
    </div>


@stop
