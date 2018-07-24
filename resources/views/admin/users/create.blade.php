@extends('layouts.admin')
@section('content')

    <h1>Create Users</h1>
    @include('includes.form_error')
    <div class="form-group">
        {!! Form::open(['method' => 'Post','action'=>'AdminUserController@store','files'=>true]) !!}
        <div class="form-group">
            {!! Form::Label('name','Name') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::Label('email','Email') !!}
            {!! Form::text('email',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::Label('role_id','Role') !!}
            {!! Form::select('role_id', $roles, 0, ['placeholder'=>'Choose A Role','class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::Label('is_active','Status') !!}
            {!! Form::select('is_active', ['1' => 'Active', '0' => 'Non-Active'], 0, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::Label('file','File') !!}
            {!! Form::file('file',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::Label('password','Password') !!}
            {!! Form::text('password','',['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection