@extends('layouts.app')

@section('title')
    <title>YShot</title>

@section('content')
    <div class="drink-content">
        @foreach($softsList as $soft)
            <div class="drink-element">
                <img src="img/can.png" alt="" width="200px">
                <h2>{{$soft->name}}</h2>
            </div>
        @endforeach
    </div>
@endsection