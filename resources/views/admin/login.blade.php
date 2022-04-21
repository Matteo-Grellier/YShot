@extends('layouts.app')

@section('title')
    <title>Login</title>
@endsection
@section('content')
    <div class="login-container">
        <h1>Accès à la partie administrateur</h1>
        <div class="underline-block-h1"></div>
        @if(isset(Auth::user()->email))
        <script>window.location="{{ route('admin.home'); }}";</script>
        @endif
    
        <form method="post" action="{{ route('admin.login.checklogin') }}"> 
            @csrf
            {{-- <label>email :</label> --}}
            <input type="email" name="email" placeholder="Email"/>
            {{-- <label>password :</label> --}}
            <input type="password" name="password" placeholder="Mot de passe"/>
            <input type="submit" name="login" value="Login" />
        </form>

        @if ($message = Session::get('error'))
        <div class="error-message">
            {{-- <button type="button" class="close" data-dismiss="alert">x</button> --}}
            <strong>⚠️{{ $message }}</strong>
        </div>
        @endif
    
        @if (count($errors) > 0)
        <div class="error-message">
            <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif

    </div>
@endsection