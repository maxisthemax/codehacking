@extends('layouts.admin')
@section('content')

    <h1>Create Post</h1>
    @include('includes.form_error')
    <div class="form-group">
        {!! Form::open(['method' => 'Post','action'=>'AdminPostController@store','files'=>true]) !!}
        <div class="form-group">
            {!! Form::Label('title','Title') !!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::Label('category_id','Category') !!}
            {!! Form::select('category_id',['' => 'Select A Category ...']+$categories, '', ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::Label('photo_id','Photo') !!}
            {!! Form::file('photo_id') !!}
        </div>
        <div class="form-group">
            {!! Form::Label('body','Body') !!}
            {!! Form::textarea('body',null,['class'=>'form-control','rows'=>3]) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection