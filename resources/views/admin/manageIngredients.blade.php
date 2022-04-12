@extends('layouts.app')

@section('title')
    <title>Admin Panel</title>
@endsection
@section('content')

    <div>   
        @include('admin.softs.softs')
        @include('admin.alcoolsTypes.alcoolsTypes')
        @include('admin.glassesTypes.glassesTypes')
        @include('admin.sirops.sirops')
        @include('admin.fruits.fruits')
        @include('admin.alcoolsNames.alcoolsNames')
    </div>
@endsection