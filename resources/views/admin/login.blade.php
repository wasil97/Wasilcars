@extends('layouts.app')

@section('content')
<div>
    
        <h2>{{ $msg ?? '' }}</h2>
        <h2>{{ $credentials ?? '' }}</h2>

    <div>
        <h2>Login</h2>
        <form action="login" method="POST">
            @csrf
            <input name="email" type="email" placeholder="Email Address">
            <input name="password" type="password" placeholder="Password">
            <input name="login" type="submit" value="Login">
        </form>
    </div>
    <div>
    <h2>Register</h2>
        <form action="register" method="POST">
            @csrf
            <input name="name" type="text" placeholder="Name">
            <input name="email" type="email" placeholder="Email Address">
            <input name="password" type="password" placeholder="Password">
            <input name="password_confirmation" type="password" placeholder="Confirmation Password">
            <input name="register" type="submit" value="register">
        </form>
    </div>
<div>
@endsection