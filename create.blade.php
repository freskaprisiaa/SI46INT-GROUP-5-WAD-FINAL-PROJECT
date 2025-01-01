@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #ffe6f2;
        font-family: 'Arial', sans-serif;
    }
    .container {
        margin-top: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }
    h1 {
        color: #d147a3;
        font-weight: bold;
        text-align: center;
    }
    .form-group label {
        color: #6a1b9a;
        font-weight: bold;
    }
    .form-control {
        border-radius: 5px;
        border: 1px solid #d147a3;
        padding: 10px;
        font-size: 14px;
    }
    .btn-primary {
        background-color: #9575cd;
        border-color: #9575cd;
        border-radius: 20px;
        padding: 10px 20px;
        color: #fff;
        font-size: 16px;
    }
    .btn-primary:hover {
        background-color: #7e57c2;
        border-color: #7e57c2;
    }
    .mt-3 {
        margin-top: 20px;
    }
</style>

<div class="container">
    <h1>Create New Admin</h1>

    <form action="{{ route('adminmanage.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter admin name" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter admin email" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter a strong password" required>
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Re-enter the password" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Save Admin</button>
    </form>
</div>
@endsection
