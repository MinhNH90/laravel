@extends('layouts.app')

@section('content')
    <h1 class="mb-3">{{$people->name}}</h1>
    <ul class="list-group mb-4">
        <li class="list-group-item">Sex : {{$people->sex}}</li>
        <li class="list-group-item">Job : {{$people->job}}</li>
        <li class="list-group-item">Address : {{$people->address}}</li>
    </ul>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection