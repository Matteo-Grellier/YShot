@extends('layouts.app')

@section('title')
    <title>Admin Panel</title>
@endsection
@section('content')
    <div class="m-auto">
        <h1 class="underline underline-offset-1 text-2xl font-bold container mx-auto pt-10 ">Liste de Sirops</h1>

    @include('admin.sirops')
    </div>


@endsection
