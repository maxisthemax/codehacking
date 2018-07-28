@extends('layouts.admin')
@section('content')
    <h1>Posts</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Owner</th>
            <th>Category</th>
            <th>Title</th>
            <th>Body</th>
            <th>Updated At</th>
            <th>Create At</th>
        </tr>
        </thead>
        <tbody>
        @if($posts->count() > 0)
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td><img height="50" src="{{$post->photo?$post->photo->file:'http://placehold.it/40x40'}}" alt=""></td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->category_id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>{{$post->updated_at->diffForHumans()}}</td>
                    <td>{{$post->created_at->diffForHumans()}}</td>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection