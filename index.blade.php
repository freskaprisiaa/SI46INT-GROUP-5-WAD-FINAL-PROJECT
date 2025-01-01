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
    h1, h2 {
        color: #d147a3;
        font-weight: bold;
        text-align: center;
    }
    p {
        color: #6a1b9a;
        font-size: 16px;
        text-align: center;
    }
    .table {
        margin-top: 20px;
        border: 2px solid #d147a3;
    }
    .table th {
        background-color: #f8bbd0;
        color: #6a1b9a;
        text-align: center;
        font-weight: bold;
    }
    .table td {
        text-align: center;
        color: #6a1b9a;
    }
    .btn {
        border-radius: 20px;
        font-size: 14px;
        padding: 8px 15px;
    }
    .btn-primary {
        background-color: #9575cd;
        border-color: #9575cd;
    }
    .btn-primary:hover {
        background-color: #7e57c2;
        border-color: #7e57c2;
    }
    .btn-danger {
        background-color: #f06292;
        border-color: #f06292;
    }
    .btn-danger:hover {
        background-color: #e91e63;
        border-color: #e91e63;
    }
    .btn-success {
        background-color: #ba68c8;
        border-color: #ba68c8;
    }
    .btn-success:hover {
        background-color: #ab47bc;
        border-color: #ab47bc;
    }
    .btn {
        color: #fff;
    }
    .btn-back {
        background-color: #ff4081;
        border-color: #ff4081;
        border-radius: 20px;
        padding: 10px 20px;
        color: #fff;
        font-size: 16px;
        display: inline-flex;
        align-items: center;
    }
    .btn-back:hover {
        background-color: #f50057;
        border-color: #f50057;
    }
    .btn-back i {
        margin-right: 8px;
    }
</style>

<div class="container">
<a href="{{ route('dashboard.index') }}" class="btn btn-back">
    <i class="fas fa-arrow-left"></i> Back to Dashboard
</a>

    <h1>Admin Management</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($admins as $admin)
                <tr>
                    <td>{{ $admin->id }}</td>
                    <td>{{ $admin->name }}</td>
                    <td>{{ $admin->email }}</td>
                    <td>
                        <a href="{{ route('adminmanage.edit', $admin->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('adminmanage.destroy', $admin->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-center">
        <a href="{{ route('adminmanage.create') }}" class="btn btn-success">Create New Admin</a>
    </div>
</div>
@endsection
