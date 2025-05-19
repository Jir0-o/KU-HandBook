@extends('layouts.guest')
@section('content')
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    max-width: 400px;
    width: 100%;
    text-align: center;
}

h1 {
    margin-top: 0;
    color: #333;
}

ul {
    list-style-type: none;
    padding: 0;
}

li {
    margin-bottom: 10px;
}

.btn {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #0056b3;
}
</style>
<div class="container">
    <h1>Choose Role</h1>
    <ul>
        @foreach ($roles as $role)
        <li>
            <form method="POST" action="{{ route('login.with.role', ['role' => $role->id]) }}">
                @csrf
                <button type="submit" class="btn">{{ $role->name }}</button>
            </form>
        </li>
        @endforeach
    </ul>
</div>
@endsection