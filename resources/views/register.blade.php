@extends('layouts.layout')

@section('style')
<link rel="stylesheet" href="/css/register.css">
@endsection

@section('title')
<title>Register</title>
@endsection

@section('content')
<div class="container">
    <div class="content">
        <form action="/register" method="post">
            @csrf
            <h2>Register</h2>
            <div class="label">
                <label for="">Username</label>
                <input type="text" name="username" placeholder="Username">
            </div>
            <div class="label">
                <label for="">Email</label>
                <input type="text" name="email" placeholder="Put your email">
            </div>
            <div class="label">
                <label for="">Password</label>
                <input type="password" name="password" placeholder="Create your password">
            </div>
            <button type="submit">Register</button>
            <div class="confirm">
                <p>Have account? <a href="/login">Login</a></p>
            </div>
        </form>
    </div>
</div>
@endsection
