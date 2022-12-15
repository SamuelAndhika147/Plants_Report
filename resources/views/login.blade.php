@extends('layouts.layout')

@section('style')
<link rel="stylesheet" href="/css/register.css">
@endsection

@section('title')
<title>Login</title>
@endsection

@section('content')
<div class="container">
    <div class="content">
        <form action="/auth" method="post">
            @csrf
            <h2>Login</h2>
            <div class="label">
                <label for="">Email</label>
                <input type="text" name="email" placeholder="Put your email">
            </div>
            <div class="label">
                <label for="">Password</label>
                <input type="password" name="password" placeholder="Put your password">
            </div>
            <button type="submit">Login</button>
            <div class="confirm">
                <p>Dont have account yet? <a href="/">Register</a></p>
            </div>
        </form>
    </div>
</div>
@endsection
