@extends('layouts.admin')
@section('content')

    <h1>Edit Users</h1>
    @include('includes.form_error')

    <div class="col-sm-3">

        <img src="{{$user->photo?$user->photo->file:'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">
        
    </div>

    <div class="col-sm-9">
        <div class="form-group">
            {!! Form::model($user,['method' => 'Patch','action'=>['AdminUserController@update',$user->id],'files'=>true]) !!}
            {{--{{dd($user)}}--}}
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
                {!! Form::select('role_id', $roles, null, ['placeholder'=>'Choose A Role','class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::Label('is_active','Status') !!}
                {!! Form::select('is_active', ['1' => 'Active','0' => 'Non-Active'], null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::Label('photo_id','File') !!}
                {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::Label('password','Password') !!}
                {!! Form::text('password','',['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update User',['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection