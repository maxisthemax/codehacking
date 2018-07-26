@extends('layouts.admin')
@section('content')
    <h1>Users</h1>
    <table class="table">
        <thead>
          <tr>
              <th>Id</th>
              <th>Photo</th>
              <th>Name</th>
              <th>Email</th>
              <th>Role</th>
              <th>Status</th>
              <th>Updated At</th>
              <th>Create At</th>
          </tr>
        </thead>
        <tbody>
        @if($users->count() > 0)
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td><img height="50" src="{{$user->photo?$user->photo->file:'No User Photo'}}" alt=""></td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role->name}}</td>
                <td>{{$user->is_active == 1?'Active':'Not Active'}}</td>
                <td>{{$user->updated_at->diffForHumans()}}</td>
                <td>{{$user->created_at->diffForHumans()}}</td>
            </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection