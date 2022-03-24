@extends('layouts.app')

@section('content')
    <div class="m-auto">
        <h1 class="underline underline-offset-1 text-2xl font-bold container mx-auto pt-10 ">Liste de Sirops</h1>
    
    @foreach ($siropsList as $sirop)
        <div>
            <h3>{{ $sirop->name }}</h3>
        </div>
    @endforeach
    </div>

@endsection