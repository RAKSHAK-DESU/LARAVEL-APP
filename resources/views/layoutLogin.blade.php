@extends('components/layout');

@section('title','This is Login page');

@section('main')
<div>
    <h1>User Login</h1>
    <form action="">
        <input type="text" placeholder="enter name">
        <br><br>
        <input type="password" placeholder="enter password">
        <br><br>
        <button>Login</button>
    </form>
</div>
@endsection