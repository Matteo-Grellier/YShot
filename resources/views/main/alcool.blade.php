@extends('layouts.app')

@section('title')
    <title>YShot</title>

@section('content')
    <div class="drink-content">
        @foreach($alcoolsNames as $alcool)
            <div class="drink-element">
                <img src="img/beer.png" alt="" width="200px">
                <h2>{{$alcool->name}}</h2>
                <h3>Degrée d'alcool : {{$alcool->degree}}°</h3>
            </div>
        @endforeach
    </div>
@endsection