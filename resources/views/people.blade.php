@extends('layouts.app')

@section('content')
    <h1 class="mb-3">People</h1>
    @if(count($people) > 0)
        @foreach($people as $item)
            <ul class="list-group mb-4">
                <li class="list-group-item">Name : <a href="{{url('/people')}}/<?php echo $item->id; ?>">{{$item->name}}</a></li>
                <li class="list-group-item">Sex : {{$item->sex}}</li>
                <li class="list-group-item">Job : {{$item->job}}</li>
                <li class="list-group-item">Address : {{$item->address}}</li>
            </ul>
        @endforeach
    @endif
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection