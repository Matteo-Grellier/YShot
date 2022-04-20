@extends('layouts.app')

@section('title')
    <title>Admin Panel</title>
@endsection
@section('content')

    @if(!isset(Auth::user()->email))
    <script>window.location="{{ route('admin.login'); }}";</script>
    @endif

    <div>   
        @include('admin.softs.softs')
        @include('admin.alcoolsTypes.alcoolsTypes')
        @include('admin.glassesTypes.glassesTypes')
        @include('admin.sirops.sirops')
        @include('admin.fruits.fruits')
        @include('admin.alcoolsNames.alcoolsNames')
    </div>
@endsection