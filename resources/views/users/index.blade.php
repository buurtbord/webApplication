@extends('layout')



@section('content')
    <h1>All Users</h1>



    @foreach($users as $user)

        <div>
            <a href="/users/{{$user->id}}">{{$user->name}}</a>
        </div>
    @endforeach

@stop