@extends('layouts.app')

@section('title')
    <title>login</title>
@endsection
@section('content')
    <h3>Login to access to the login pannel</h3>

    @if(isset(Auth::user()->email))
    <script>window.location="{{ route('admin.home'); }}";</script>
    @endif

    @if ($message = Session::get('error'))
    <div>
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif

    @if (count($errors) > 0)
    <div>
        <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif

    <form method="post" action="{{ route('admin.login.checklogin') }}"> 
        @csrf
        <label>email :</label>
        <input type="email" name="email"/>
        <label>password :</label>
        <input type="password" name="password"/>
        <input type="submit" name="login" value="Login" />
    </form>


@endsection