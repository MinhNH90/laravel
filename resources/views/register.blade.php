@extends('layouts.app')

@section('content')
    <h1 class="mb-3">Register</h1>
    {{ Form::open(['url' => 'register/submit']) }}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' =>'Enter name'])}}
    </div>
    <div class="form-group">
        {{Form::label('sex', 'Sex')}}
        {{Form::text('sex', '', ['class' => 'form-control', 'placeholder' =>'Enter sex'])}}
    </div>
    <div class="form-group">
        {{Form::label('job', 'Job')}}
        {{Form::text('job', '', ['class' => 'form-control', 'placeholder' =>'Enter job'])}}
    </div>
    <div class="form-group">
        {{Form::label('address', 'Address')}}
        {{Form::textarea('address', '', ['class' => 'form-control', 'placeholder' =>'Enter address'])}}
    </div>
    <div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    </div>
    {{ Form::close() }}
@endsection

@section('sidebar')
    @parent
    <p>This is page register</p>
@endsection